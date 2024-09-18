<script type="text/x-template" id="t-mg-one-page-domain-dropdown-field">
    <div class="form-group" >
        <label v-html="getTranslatedMessage(field.displayName)"></label>
        <div class="form-group__wrapper flex-column">
            <select class="form-control" v-model="value" @change="change">
                <option v-for="option in field.options" :value="option.id" v-html="getTranslatedMessage(option.name)"></option>
            </select>
            <p class="mb-0 mt-1" v-if="field.description" v-html="field.description"></p>
        </div>
    </div>
</script>