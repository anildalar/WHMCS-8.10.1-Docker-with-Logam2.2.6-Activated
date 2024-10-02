<?php
/* Smarty version 3.1.48, created on 2024-10-02 03:41:44
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/group_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66fcc0f83e6444_17268450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98e5b7ad0646b463dc6f7daee040ad6937ed6dc' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Client/Templates/baseFormComponents/widgets/components/group_components.tpl',
      1 => 1702664292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcc0f83e6444_17268450 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-one-page-groups-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
>
    <div class="main-header-wrapper" v-if="isVisible && layoutSettings.navigationTabs" :class="{ 'main-header-wrapper--promo': cart.promo && !cart.promo.isApplied }">
        <div class="main-header-nav">
            <div class="container tab-nav" data-nav-tabs-container ref="tabSliderContainer">
                <div class="nav-arrow nav-arrow--left nav-arrow--hidden">
                    <a href="#" class="nav-link" data-scrollnav="-250">
                        <i class="ls ls-arrow-left"></i>
                    </a>
                </div>
                <ul class="nav nav-tabs nav-lg" data-nav ref="tabSlider">
                    <li class="nav-item"  :class="{ active: group.id == selectedGroupId}" :href="'#group'+group.id"  v-for="group in groups" v-if="group.hidden !== 1 || group.id == selectedGroupId">
                        <a class="nav-link" href="nav-link"  @click="setGroup($event, group.id)">
                            <input type="radio" :id="'group_'+group.id" :name="group.id">
                            <span v-html="group.name"></span>
                        </a>
                    </li>
                </ul>
                <div class="nav-arrow nav-arrow--right nav-arrow--hidden">
                    <a href="#" class="nav-link" data-scrollnav="250">
                        <i class="ls ls-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="modal modal-info fade" id="changeGroupModal">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                            <h3 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','groups','modal','change','title');?>
</h3>
                        </div>
                        <div class="modal-body">
                            <p><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','groups','modal','change','description');?>
 <b><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','groups','modal','change','description_2');?>
</b></p>
                        </div>
                        <div class="modal-footer d-flex">
                            <button type="button" class="btn btn-primary" @click="confirm(this)"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','groups','modal','change','confirm');?>
</button>
                            <button type="button" class="btn btn-default" @click="close(this)"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','groups','modal','change','close');?>
</button>
                            
                                <label class="checkbox checkbox-custom checkbox-sm m-l-a m-t-0 m-b-0">
                                    <input type="checkbox" name="popoverNotShowAgain" class="" v-model="hideConfirmationModal">
                                    <span class="checkbox-styled"></span>
                                    <div class="check-content"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('LagomOrderForm','doNotShowAgain');?>
</div>
                                </label>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo '</script'; ?>
><?php }
}
