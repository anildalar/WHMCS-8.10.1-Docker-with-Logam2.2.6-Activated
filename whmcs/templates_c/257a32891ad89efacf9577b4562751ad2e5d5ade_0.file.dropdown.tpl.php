<?php
/* Smarty version 3.1.48, created on 2025-02-06 05:14:25
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67a445310a0e62_50358883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '257a32891ad89efacf9577b4562751ad2e5d5ade' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/fields/dropdown.tpl',
      1 => 1738818652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a445310a0e62_50358883 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-dropdown-input-field">
    <div class="panel has-input panel--main" v-if="visible" :class="[
        { 'section section--config-options' : (showNumber && field.isFirstInGroup) || (showNumber && field.groupSection.single_section != 'on')},
        { 'panel--first' : field.isFirstInGroup},
        { 'panel--section' : field.groupSection.single_section != 'on' || !Object.keys(field.groupSection).length},
        { 'has-radio' : field.displayType == 'radioBox' || field.displayType == 'packageBox'},
        { 'panel--addonBox-section' : (field.groupSection.single_section == 'on' || Object.keys(field.groupSection).length) && field.displayType == 'addonBox'}
        ]">
        <div class="section-number" v-if="(showNumber && field.isFirstInGroup) || (showNumber && field.groupSection.single_section != 'on')">X</div>
        <div class="section-header" :class="[{ 'section-header--tooltip': field.isFirstInGroup && field.groupSection.section_description_type == 'tooltip'}]" v-if="field.isFirstInGroup && field.groupSection.single_section == 'on'">
            <h2 class="section-title" v-html="field.groupSection.section_title"></h2>
            <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + field.groupSection.section_description + `</div>`" data-html="true" class="lm lm-info section-tooltip" v-if="field.groupSection.section_description_type == 'tooltip'"></i>
            <p class="section-desc" v-html="field.groupSection.section_description" v-if="field.groupSection.section_description_type == 'default' && field.groupSection.section_description"></p>
        </div>
        <div class="panel-header" v-else-if="!field.isFirstInGroup && field.groupSection.single_section == 'on' && field.displayType != 'addonBox'" :class="[{ 'section-header--tooltip': field.isFirstInGroup && field.groupSection.section_description_type == 'tooltip'}]">
            <h5 class="panel-title" v-html="field.details.optionname"></h5>
            <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + field.description + `</div>`" data-html="true" class="lm lm-info section-tooltip" v-if="field.descriptionType == 'tooltip' && field.description"></i>
            <p class="panel-desc" v-html="field.description" v-if="field.descriptionType == 'default' && field.description && field.displayType != 'addonBox'"></p>
        </div>
        <div class="section-header" v-else-if="field.displayType != 'addonBox' || field.displayType == 'addonBox' && field.groupSection.single_section != 'on'" :class="[{ 'section-header--tooltip': field.descriptionType == 'tooltip' && field.description}]">
            <h2 class="section-title" v-html="field.details.optionname"></h2>
            <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + field.description + `</div>`" data-html="true" class="lm lm-info section-tooltip" v-if="field.descriptionType == 'tooltip' && field.description"></i>
            <p class="section-desc" v-html="field.description" v-if="field.descriptionType == 'default' && field.description && field.displayType != 'addonBox'"></p>
        </div>

        <div class="panel-header" v-if="field.isFirstInGroup && field.groupSection.single_section == 'on' && field.displayType != 'addonBox'">
            <h5 class="panel-title" v-html="field.details.optionname"></h5>
            <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + field.description + `</div>`" data-html="true" class="lm lm-info section-tooltip" v-if="field.descriptionType == 'tooltip' && field.description"></i>
            <p class="panel-desc" v-html="field.description" v-if="field.descriptionType == 'default' && field.description"></p>
        </div>

        <div class="tab-nav tab-nav--section tab-nav--domain" data-nav-tabs-container ref="tabSliderContainer" v-if="field.groups.length > 0 && field.displayType != 'osBox'">
            <div class="nav-arrow nav-arrow--left nav-arrow--hidden">
                <a href="#" class="nav-link" data-scrollnav="-250">
                    <i class="ls ls-arrow-left"></i>
                </a>
            </div>
            <ul class="nav nav-tabs nav-lg  m-b-3x" data-nav ref="tabSlider">
                <li class="nav-item" v-for="(group, groupIndex) in field.groups" :class="{ active: group.id == getGroupId()}" :href="'#'+group.id"  v-on:click="changeGroup($event, group, groupIndex)" v-if="Object.keys(group.suboptions).length && group.enable">
                    <a class="nav-link" href="nav-link" >
                        <img class="nav-img" :src="group.image" v-if="group.image"/>
                        <input type="radio" :name="'group.name' + group.id" :id="'group.id' + group.id">
                        <span v-html="group.name"></span>
                        <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + group.description + `</div>`" data-html="true" class="lm lm-info section-tooltip section-tooltip--sm" v-if="group.description"></i>
                    </a>
                </li>
            </ul>
            <div class="nav-arrow nav-arrow--right nav-arrow--hidden">
                <a href="#" class="nav-link" data-scrollnav="250">
                    <i class="ls ls-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="row row-eq-height row-eq-height-xs row--osBox" v-if="field.displayType == 'osBox' && field.groups.length">
            <div
                    v-if="field.groups && opt.enable"
                    v-for="(opt, index) in field.groups"
                    :value="index"
                    :class="[
                    { 'col-sm-6 col-md-4 col-xl-3' : showNumber},
                    { 'col-sm-6 col-md-4' : !showNumber},
                ]">
                <div class="panel panel-check panel--osBox dropdown" data-toggle="dropdown" :class="{ 'checked' : isBoxSelected && opt.id == activeGroup}">
                    <div class="panel-body check">
                        <span class="check-sign"><i class="ls ls-check"></i></span>
                        <div class=" panel-icon check-icon"  v-if="opt.image">
                            <img :src="opt.image"/>
                        </div>
                        <h6 class="panel-title" v-html="opt.name"></h6>
                        <p class="panel-desc" v-html="opt.description" v-if="opt.description"></p>
                        <div class="panel-actions">
                            <button class="btn">
                                <span class="btn-text">
                                    <div v-if="activeGroup == opt.id">
                                        <span v-if="selectedOption.nameonly" v-html="selectedOption.nameonly"></span>
                                        <span v-else-if="selectedOption.rawName" v-html="selectedOption.rawName"></span>
                                        <strong v-html="' - ' + getOptionPrice(selectedOption)"></strong>
                                    </div>
                                    <span v-else><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','section','configOptions','selectVersion');?>
</span>
                                    <span v-if="selectedOption && selectedOption.setup && activeGroup == opt.id" v-html="getOptionSetupFee(selectedOption) + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span>
                                </span>
                                <b class="ls ls-caret"></b>
                            </button>
                            <ul class="dropdown-menu">
                                <li v-for="suboption in opt.suboptions">
                                    <a class="radio">
                                        <label class="radio-label"   @click="changeOption($event, suboption, opt.id)" :class="{ 'checked': data[field.id] == suboption.id && opt.id == activeGroup}" :style="[
                            { 'background-color' : suboption.overrideColor ? '#' + suboption.color : 'transparent'},
                            ]">
                                            <div class="radio-styled">
                                                <ins class="iCheck-helper"></ins>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div class="text" v-if="suboption.nameonly" v-html="suboption.nameonly"></div>
                                                <div class="text" v-else v-html="suboption.rawName"></div>
                                                <span class="ml-1" v-html="getOptionPrice(suboption)"></span>
                                                <span class="w-100 text-right" v-if="suboption.setup" v-html="getOptionSetupFee(suboption) + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span>
                                            </div>

                                        </label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                    v-for="(opt, index) in getAllSuboptions()"
                    :value="index"
                    :class="[
                    { 'col-sm-6 col-md-4 col-xl-3' : showNumber},
                    { 'col-sm-6 col-md-4' : !showNumber},
                ]"
                    v-if="!field.groups"
            >
                <div class="panel panel-check panel--osBox" :class="{ 'checked' : opt.id == value}">
                    <div class="panel-body check">
                        <span class="check-sign"><i class="ls ls-check"></i></span>
                        <div class=" panel-icon check-icon"  v-if="opt.image">
                            <img :src="opt.image"/>
                        </div>
                        <h6 class="panel-title" v-html="opt.nameonly"></h6>
                        <p class="panel-desc" v-html="opt.description" v-if="opt.description"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-eq-height row-eq-height-xs" data-inputs-container :class="{ 'row-sm' :  layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.active_style != 'modern'}" v-else-if="field.displayType == 'packageBox'">
            <div
                v-for="(opt, index) in getFilteredSuboptions()"
                :value="index"
                :class="[
                    { 'col-sm-6 col-md-4 col-xl-3' : showNumber},
                    { 'col-sm-6 col-md-4' : !showNumber}
                ]">
                <div class="package package-sm" :class="[
                        { 'package-selected' : value == opt.id},
                    ]" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]"
                    @click="changeOption($event, opt, opt.id)">
                    <div class="package-icon" v-if="opt.image">
                        <img :src="opt.image" alt=""/>
                    </div>
                    <div class="package-header">
                        <span class="check-sign"><i class="ls ls-check"></i></span>
                        <h3 class="package-name package-title" v-html="opt.nameonly"></h3>
                        <div class="package-price" v-if="(opt.fullprice == '0.00' && !field.hideZeroPrices) || opt.fullprice != '0.00'">
                            <div class="price" :class="[ { 'price-sm': isOneStep } ]">
                                <div class="price-amount">
                                    <span v-html="getOptionPrice(opt)"></span>
                                </div>
                            </div>
                        </div>
                        <div class="price-setup-fee" v-if="opt.setup != '0.00'" v-html="currency.prefix + getFormattedPrice(opt.setup) + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></div>
                    </div>
                    <div class="package-body" v-if="opt.description">
                        <div class="package-content">
                            <ul class="package-features" v-html="opt.description"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-eq-height row-eq-height-xs" data-inputs-container :class="{ 'row-sm' :  layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.active_style != 'modern'}" v-else-if="field.displayType == 'isPackageDisabled'">
            <div
                v-for="(opt, index) in getFilteredSuboptions()"
                :value="index"
                :class="[
                    { 'col-sm-6 col-md-4 col-xl-3' : showNumber},
                    { 'col-sm-6 col-md-4' : !showNumber}
                ]">
                <div class="package package-sm" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]" :class="[
                        { 'package-selected' : value == opt.id},
                    ]"
                    @click="changeOption($event, opt)" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]">
                    <div class="package-icon" v-if="opt.image">
                        <img :src="opt.image" alt=""/>
                    </div>
                    <div class="package-header">
                        <span class="check-sign"><i class="ls ls-check"></i></span>
                        <h3 class="package-name package-title" v-html="opt.nameonly"></h3>
                        <div class="package-price" v-if="((opt.fullprice == '0.00' && !field.hideZeroPrices) || opt.fullprice != '0.00')">
                            <div class="price" :class="[ { 'price-sm': isOneStep } ]">
                                <div class="price-amount">
                                    <span v-html="getOptionPrice(opt)"></span>
                                </div>
                            </div>
                        </div>
                        <div class="price-setup-fee" v-if="opt.setup != '0.00'" v-html="currency.prefix + opt.setup + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '')"></div>
                    </div>
                    <div class="package-body" v-if="opt.description">
                        <div class="package-content">
                            <ul class="package-features" v-html="opt.description"></ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

                                    <div class="panel panel-addon panel--addonBox" v-else-if="field.displayType == 'addonBox'" :class="[
                    { 'panel-addon--has-image has-icon': field.image},
                    { 'panel--no-body' : (field.descriptionType == 'tooltip' && field.groupSection.single_section != 'on') || (field.descriptionType == 'default' && !field.description && field.groupSection.single_section != 'on')},
                    { 'panel--no-image' : !field.image}
                    ]">
                                        <div class="panel-body" v-if="field.groupSection.single_section == 'on' || (field.descriptionType == 'default' && field.description)" :class="[
                        { 'panel-body--tooltip' : field.descriptionType == 'tooltip' && field.description}
                    ]">
                        <h4 class="panel-title" v-html="field.details.optionname" v-if="field.groupSection.single_section == 'on'"></h4>
                        <i data-toggle="tooltip" :title="`<div class='tooltip-inner--lg'>` + field.description + `</div>`" data-html="true" class="lm lm-info section-tooltip section-tooltip--sm" v-if="field.descriptionType == 'tooltip' && field.description"></i>
                        <p class="panel-desc" v-html="field.description" v-if="field.descriptionType == 'default' && field.description"></p>
                    </div>
                    <div class="panel-icon" v-if="field.image" :class="[
                    { 'panel-icon--default': field.illustrationType == 'default'},
                    { 'panel-icon--icon': field.illustrationType == 'iconType'},
                    { 'panel-icon--illustration': field.illustrationType == 'illustrationType'},
                    { 'panel-icon--illustration-small': field.illustrationType == 'illustrationSmallType'}
                    ]">
                        <img :src="field.image"  alt="">
                    </div>
                    <div class="panel-options" :class="[
                        { 'panel-options--no-image': !field.image},
                    ]">
                        <div class="panel-actions">
                            <div class="check check-custom"
                                v-for="(opt, index) in getAllSuboptions()"
                                :value="index"
                            >
                                <label class="radio-label" @click="changeOption($event, opt)" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]">
                                    <input :id="opt.id" type="radio" :name="opt.nameonly + '-' + opt.id" class="" :value="opt.id" v-model="value">
                                    <div class="radio-styled"></div>
                                    <div class="check-content" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]">
                                        <span class="check-title" v-html="opt.nameonly" v-if="opt.nameonly"></span>
                                        <div class="check-subtitle" v-if="(opt.fullprice == '0.00' && !field.hideZeroPrices) || opt.fullprice != '0.00' || opt.setup > 0">
                                            <span v-html="getOptionPrice(opt)"></span>
                                            <span v-if="opt.setup > 0 && product.paytype !== 'free'">
                                                <span v-html="' + ' + currency.prefix + getFormattedPrice(opt.setup) + ' ' + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span>
                                            </span>
                                        </div>
                                        <div class="check-description" v-if="opt.description" v-html="opt.description"></div>
                                    </div>
                                    <div class="check-icon" v-if="opt.image">
                                        <img :src="opt.image" :alt="opt.description">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span class="check-sign"><i class="ls ls-check"></i></span>
                </div>
                    
        <div v-else-if="field.displayType == 'radioBox'" class="row row-eq-height row-eq-height-xs" data-inputs-container :class="{ 'row-sm' :  layoutSettings.templates && layoutSettings.templates.lagom && layoutSettings.templates.lagom.active_style != 'modern'}" >
            <div
                v-for="(opt, index) in getFilteredSuboptions()"
                :value="index"
                :class="[
                    { 'col-sm-6 col-md-4 col-xl-3' : showNumber},
                    { 'col-sm-6 col-md-4' : !showNumber}
                ]" >
                <div class="panel panel-check" :class="{ checked: value == opt.id}" data-virtual-input >
                    <div class="check check-custom">
                        <span class="check-sign" v-if="value == opt.id">
                            <i class="ls ls-check"></i>
                        </span>
                        <label @click="changeOption($event, opt)" :style="[
                            { 'background-color' : opt.overrideColor ? '#' + opt.color : 'transparent'},
                            ]">
                            <input :id="opt.id" type="radio" :name="opt.nameonly + '-' + opt.id" class="" :value="opt.id" v-model="value">
                            <div class="radio-styled"></div>
                            <div class="check-content">
                                <h6 class="check-title" v-if="!String(opt.nameonly).includes(',')" v-html="opt.nameonly"></h6>
                                <h6 class="check-title check-title--box" v-else v-for="row in getNameRows(opt.nameonly)" v-html="row.trim()"></h6>
                                <p class="check-subtitle" v-if="(opt.fullprice == '0.00' && !field.hideZeroPrices) || opt.fullprice != '0.00' || opt.setup > 0">
                                    <span v-html="getOptionPrice(opt)"></span>
                                    <span v-if="opt.setup > 0 && product.paytype !== 'free'">
                                        <span v-html="' + ' + currency.prefix + getFormattedPrice(opt.setup) + ' ' + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
'"></span>
                                    </span>
                                </p>
                                <div class="check-description" v-if="opt.description" v-html="opt.description"></div>
                            </div>
                            <div class="check-icon" v-if="opt.image">
                                <img :src="opt.image" :alt="opt.description">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-body" v-else>
            <div class="form-group m-b-0">
                <select class="form-control" v-model="value">
                    <option  v-for="(option, index) in getAllSuboptions()" :value="option.id" :style="[
                            { 'background-color' : option.overrideColor ? '#' + option.color : 'transparent'},
                            ]"
                    v-html="option.nameonly + (product.paytype !== 'free' ? ' ' +
                    ((field.hideZeroPrices && option.fullprice == '0.00') ? '' : getOptionPrice(option)) +
                    (option.setup > 0 ? (' + ' + currency.prefix + getFormattedPrice(option.setup) + ' ' + (layoutSettings.displayPriceSuffix ? (' ' + currency.suffix) : '') + ' <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','product','setupFee');?>
') : '') : '')"
                    ></option>
                </select>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
