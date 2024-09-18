const radioInput = {
    template: '#t-mg-one-page-radion-input-field',
    props: {
        field: {
            type: Object,
            required: true
        },
        data: {
            type: Object,
            required: true
        }
    },
    data: function(){
        return{
            value: null,
            interactive: false,
            activeGroup: null,
            isBoxSelected: false,
            loader: false,
            selectedOption: null,
            filteredGroup: [],
            groupSuboptions: [],
            selectedValue: null,
            groupId: 0,
            oldProduct: false,
            isSliderMoving: false,
        }
    },
    computed: {
        visible: {
            get(){
                return this.field.billingCycles[Object.keys(this.field.billingCycles)[0]] !== undefined;
            }

        },
        details: {
            get(){
                const details = this.field.details;
                if (this.oldProduct.id !== this.product.id && details.options[0]) {
                    this.data[this.field.id] = details.options[0].id
                    this.value = details.options[0].id
                    this.oldProduct = this.product
                }
                return details;
            }
        },
        currency: {
            get(){
                return this.$store.getters['cartStore/getSelectedCurrency']();
            }
        },
        billingCycle: {
            get() {

                return this.$store.getters['cartStore/getSelectedProductCycle']();
            }
        },
        fieldId:{
            get(){
                return 'mg-page-order-config-opt-' + this.field.id;
            }
        },
        showNumber:{
            get(){
                return this.$store.getters['cartStore/shouldShowNumber']();
            }
        },
        layoutSettings: {
            get() {
                return this.$store.getters['cartStore/getLayoutSettings']();
            }
        },
        product: {
            get() {
                return this.$store.getters['cartStore/getSelectedProductDetails']();
            }
        },
        sysURL: {
            get() {
                return this.$store.state.cartStore.moduleSettings.mainEndpoint
            }
        },
        isOneStep:{
            get(){
                return this.$store.getters['cartStore/isOneStep']();
            }
        },
        billingCycles: {
            get () {
                if (this.isDiscountCenterOn) {
                    return this.getBillingCyclesWithDiscountCenterPrices()
                }
                return this.$store.getters['cartStore/getBillingCycles']();
            }
        },
        selectedConfigOptions: {
            get(){
                const product = this.$store.getters['cartStore/getSelectedProduct']()
                if (product.configoptions) {
                    return Object.values(product.configoptions)
                }
                return []
            }
        },
        configurableOptions: {
            get() {
                return this.$store.getters['cartStore/getProductConfigurableOptions']()
            }
        },

        requestedConfigOption:{
            get(){
                return this.$store.getters['cartStore/getRequestedConfigOption']();
            }
        },
    },
    updated() {
        let self = this;

        this.$nextTick(() => {
            if(this.value != this.data[this.field.id]) {
                // self.value = self.data[self.field.id] ? self.data[self.field.id] : null;
                self.renderOptions();
            }
        })
    },
    mounted() {
        let self = this;
        this.$nextTick(() => {
            if(this.visible) {
                this.isSliderMoving = false
                this.handleNavTouchScroll(this.$refs.tabSlider, this.$refs.tabSliderContainer)
            }
            //select first option from selected group
            if(Object.keys(this.field.groups).length) {
                var firstGroupSuboptions = null
                for(let i = 0; i < this.field.groups.length; i++) {
                    if(this.field.groups[i].enable) {
                        self.activeGroup = this.field.groups[i].id
                        firstGroupSuboptions = this.field.groups[i].suboptions
                        break;
                    }
                }
                if(firstGroupSuboptions.length) {
                    this.data[this.field.id] = firstGroupSuboptions[Object.keys(firstGroupSuboptions)[0]].id
                }
                this.value = firstGroupSuboptions[Object.keys(firstGroupSuboptions)[0]].id
                this.selectedOption = firstGroupSuboptions[Object.keys(firstGroupSuboptions)[0]]
                this.isBoxSelected = true;
            }
            this.interactive = true;
            if (this.requestedConfigOption) {
                this.selectURLConfigOption()
            }



        })
        if (this.requestedConfigOption) {
            this.selectURLConfigOption()
        }
        if(!this.data[this.field.id]) {
            this.data[this.field.id] = this.field.value
        }
        this.value = this.field.value
        this.renderOptions();
    },
    watch:{
        value: function(value){
            if(!this.interactive){
                return;
            }
            if(value == -1) {
                this.isBoxSelected = false
            }

            this.data[this.field.id] = value;
        },
        activeGroup: function(value) {
            let self = this;
            if(this.field.groups.length) {
                const filteredGroup = this.field.groups.filter(group => group.id == value)
                if (!filteredGroup.length) return;
                this.filteredGroup = filteredGroup
            }

            if(self.field.displayType != 'osBox' && self.filteredGroup.length) {
                this.value = this.filteredGroup[0].suboptions[Object.keys(this.filteredGroup[0].suboptions)[0]].id
            }
        },
        field: function(value){
            if(value.groups.length) {
                this.filteredGroup = value.groups.filter(group => group.id == this.activeGroup)
                //select option from filteredGroup
                Object.keys(this.filteredGroup[0].suboptions).forEach(item => {
                    if(this.filteredGroup[0].suboptions[item].id == this.value) {
                        this.selectedOption = this.filteredGroup[0].suboptions[item]
                    }
                })
            }
        },
    },

    methods:{
        renderOptions: function(){
            var self = this;

            this.$nextTick(function () {
                /** render add event in payments section  */
                renderCheckBox(
                    self.fieldId,
                    function(val){
                        self.loader = false
                        self.value = val
                    },
                    function(val){});
            });
        },
        getFormattedPrice(price) {
            return formatPrice.getFormattedPrice(price, this.currency.format)
        },
        changeGroup(event, group, groupIndex)
        {
            event.preventDefault();
            if(!this.isSliderMoving) {
                if (this.isBlockedPage)
                {
                    return;
                }

                this.activeGroup = group.id;
            }


            // this.$nextTick(() => {
            //     this.activeGroup = group.id;
            // })
        },
        changeOption(event, option, group = null) {
            this.selectedValue = null
            this.selectedOption = option
            this.value = option.id

            if (this.checkIfSuboptionExists(group, option.id)) {
                this.activeGroup = group
            }

        },
        getNameRows(name) {
            const separator = ','
            return name.includes(separator) ? name.split(separator) : name
        },
        getFilteredSuboptions()
        {
            if (this.field.groups.length && this.filteredGroup.length) {
                this.groupSuboptions = this.filteredGroup[0].suboptions
                this.groupId = this.activeGroup
                return this.filteredGroup[0].suboptions;
            }

            return this.groupSuboptions.length ? this.groupSuboptions : this.details.options;
        },
        getAllSuboptions()
        {
            return this.details.options;
        },
        getGroupId() {
            return this.groupId ? this.groupId : this.activeGroup
        },
        isSelected(value) {
            return this.selectedValue ? this.selectedValue == value : this.value == value
        },
        selectURLConfigOption()
        {
            const requestedOption = this.selectedConfigOptions.filter(item => item !== 0);
            if (requestedOption.length) {
                requestedOption.forEach(val => {
                    if (this.field.groups && this.field.groups.length) {
                        let groupId = null;
                        this.field.groups.forEach(group => {
                            if (Object.values(group.suboptions).some(suboption => suboption.id === val)) {
                                groupId = group.id;
                            }
                        });
                        const opt = this.field.details.options.find(option => option.id === val)
                        if (opt) {
                            this.changeOption(null, opt, groupId);
                        }

                    } else {
                        const opt = this.field.details.options.find(option => option.id === val)
                        if (opt) {
                            this.changeOption(null, opt);
                        }
                    }
                });
            }
        },
        getOptionPrice(opt) {
            if ((this.product.paytype === 'free' || !opt.fullprice) && this.field.hideZeroPrices) {
                return ''
            }

            let price = this.product.paytype === 'free' ? 0 : opt.fullprice
            return price ?
                this.currency.prefix +
                this.getFormattedPrice(price)
                + (this.layoutSettings.displayPriceSuffix ? (' ' + this.currency.suffix) : '')
                : this.$store.getters['cartStore/getZeroPrice']('configurableOptionsPrices')
        },
        getOptionSetupFee(opt) {
            if (this.product.paytype === 'free' && this.field.hideZeroPrices) {
                return ''
            }

            let setupFee = this.product.paytype === 'free' ? 0 : opt.setup
            return setupFee ?
               '+ ' + this.currency.prefix +
                this.getFormattedPrice(setupFee)
                + (this.layoutSettings.displayPriceSuffix ? (' ' + this.currency.suffix) : '')
                : this.$store.getters['cartStore/getZeroPrice']('configurableOptionsPrices')
        },
        getNameBySuboptionRawName(rawName) {
            return this.field.details.options.filter(option => option.rawName == rawName)[0].nameonly
        },
        checkIfSuboptionExists(groupId, suboptionId) {
            if (Array.isArray(this.field.groups)) {
                const group = this.field.groups.find(group => group.id === groupId);
                if (group) {
                    // Sprawdzenie czy suboptions istnieje i jest przekształcalne do tablicy
                    const suboptionsArray = Array.isArray(group.suboptions) ? group.suboptions : Object.values(group.suboptions);
                    return suboptionsArray.some(suboption => suboption.id === suboptionId);
                }
            }
            return false;
        }
    },
};
