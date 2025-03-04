<?php
/* Smarty version 3.1.48, created on 2025-03-04 11:55:21
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67c6ea298efab7_67478265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '895f01c369a62c1f56055cec1ebee18ff474d8c2' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/menu/new.tpl',
      1 => 1741086853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/helpers/tooltip.tpl' => 3,
    'file:adminarea/menu/includes/modals.tpl' => 1,
  ),
),false)) {
function content_67c6ea298efab7_67478265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94282743067c6ea298c8fd6_87879269', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74616501767c6ea298ccab6_85290628', "template-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196796757367c6ea298eb1c7_43485071', "template-actions");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209331150867c6ea298ee422_14035439', "template-scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_94282743067c6ea298c8fd6_87879269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_94282743067c6ea298c8fd6_87879269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'menu'), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-content"} */
class Block_74616501767c6ea298ccab6_85290628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_74616501767c6ea298ccab6_85290628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('iconLocation', "./../../../assets/svg-icons");?>
    <form id="updateMenuForm" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@save',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" method="POST">
        <div class="block is-loading">
            <div class="block__body" data-menu-items data-check-unsaved-changes>
                <div class="section">
                    <div class="section__header top">
                        <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['title'];?>
</h3>
                        <div class="top__toolbar m-l-a">
                            <button 
                                class="btn btn--primary" 
                                type="button" 
                                data-add-new-item 
                                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                                data-index="0" 
                                data-position="1"
                                data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_customization_options'];?>
" 
                                data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['hide_customization_options'];?>
"
                                data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                                data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                                data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                                data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                            >                                                           
                                <i class="btn__icon lm lm-plus"></i>
                                <span class="btn__text">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>

                                </span>
                            </button>
                        </div>
                    </div>

                    <div id="menuManagerItem" class="section__body">
                        <div class="sortable-list list-group list-group--simple list-group--p-h-0x list-group--collapse m-b-0x w-100" data-menu-items-list></div>
                        <a class="btn btn--block btn-add-parent m-t-1x is-hidden"
                            data-add-new-item 
                            data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                            data-index="0" 
                            data-position="1"
                            data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_customization_options'];?>
" 
                            data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['hide_customization_options'];?>
"
                            data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                            data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                            data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                            data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                            data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                        >
                            <div class="text-bg">
                                <i class="btn__icon ls ls-plus"></i>
                                <span class="btn__text m-l-0x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new'];?>
</span>
                            </div>
                        </a>
                        <div class="section__builder panel w-100 p-0x" data-menu-items-no-data>
                            <div class="builder__icon text-center">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3856 16.4751L27.0847 1.80041C29.4918 -0.600136 33.393 -0.600136 35.8001 1.80041L38.1943 4.19069C40.6017 6.59403 40.6017 10.492 38.1943 12.8928L23.425 27.6375C22.3476 28.7132 20.8866 29.3177 19.3628 29.3177H11.9949C11.1658 29.3177 10.4995 28.6359 10.5202 27.8084L10.7051 20.3855C10.7421 18.9155 11.3436 17.5154 12.3856 16.4751ZM36.1082 6.27339L33.7151 3.88424C32.4599 2.63246 30.425 2.63246 29.1704 3.88368L27.9611 5.09096L34.899 12.0173L36.1088 10.8095C37.3632 9.55845 37.3632 7.5263 36.1082 6.27339ZM32.8128 14.1L25.8749 7.17369L14.4719 18.5578C13.9651 19.0638 13.6726 19.7447 13.6545 20.4592L13.5059 26.3705L19.3629 26.3723C20.0113 26.3723 20.6365 26.1472 21.1339 25.7402L21.339 25.5548L32.8128 14.1ZM18.6696 0.0759835C19.4843 0.0759835 20.1448 0.735339 20.1448 1.54869C20.1448 2.29427 19.5898 2.91044 18.8698 3.00796L18.6696 3.0214H11.3155C6.35587 3.0214 3.14341 6.30596 2.95873 11.4067L2.95032 11.8753V28.2008C2.95032 33.4173 6.00656 36.8485 10.8685 37.0458L11.3155 37.0548H28.6712C33.6431 37.0548 36.8458 33.7773 37.0299 28.6701L37.0383 28.2008V20.2914C37.0383 19.478 37.6988 18.8187 38.5135 18.8187C39.2603 18.8187 39.8775 19.3727 39.9752 20.0916L39.9886 20.2914V28.2008C39.9886 34.9991 35.6752 39.779 29.1313 39.9927L28.6712 40.0002H11.3155C4.67062 40.0002 0.206456 35.3745 0.00697185 28.6718L0 28.2008V11.8753C0 5.08376 4.32451 0.297515 10.8562 0.0834665L11.3155 0.0759835H18.6696Z" fill="#1062FE"/>
                                </svg>
                            </div>
                            <h5 class="builder__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['no_data']['title'];?>
</h5>
                            <p class="p-md builder__desc text-center m-b-4x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['no_data']['desc'];?>
</p>
                            <div class="builder__actions">
                                <button 
                                    class="btn btn--secondary" 
                                    type="button" 
                                    data-add-new-item 
                                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@addNewMenuItem',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                                    data-index="0" 
                                    data-position="1"
                                    data-lang-edit="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_customization_options'];?>
" 
                                    data-lang-cancel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['hide_customization_options'];?>
"
                                    data-lang-remove="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['remove'];?>
"
                                    data-lang-add-child="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['add_child'];?>
"
                                    data-lang-show-hide="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['show_hide'];?>
"
                                    data-lang-move-up="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_up'];?>
"
                                    data-lang-move-down="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_items']['move_down'];?>
"
                                >    
                                    <i class="btn__icon lm lm-plus"></i>
                                    <span class="btn__text">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['add_new_item'];?>

                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__sidebar" data-check-unsaved-changes data-menu-settings>
                <div class="section menu-sidebar-section">
                    <h3 class="section__title">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu_settings']['title'];?>

                    </h3>
                    <div class="section__body">
                        <div class="widget panel of-visible">
                            <div class="widget__body">
                                <div class="widget__content">
                                    <div class="form-group">
                                        <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['name'];?>

                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['name']), 0, false);
?>
                                        </label>
                                        <input class="form-control" type="text" name="settings[name]" value="" lu-required>
                                        <span class="form-feedback is-hidden"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['field_required'];?>
</span> 
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['display_rule'];?>

                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['display']), 0, true);
?>
                                        </label>
                                        <select data-menu-settings-display-rules class="form-control multiselect form-control--basic" name="settings[rules][]" multiple>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayRules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['rule']->value['disabled']) {?>data-data='{"selectable": false}'<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['rule']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rule']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="form-group menu-status m-b-0x">
                                        <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['status'];?>

                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['tooltips']->value['menu']['menu_settings']['status']), 0, true);
?>
                                        </label>
                                        <select class="form-control" name="settings[active]">
                                            <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['active'];?>
</option>
                                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['general']['disabled'];?>
</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="settings[location]" data-menu-location value="<?php echo $_GET['menuLocation'];?>
">
                                    <input type="hidden" name="settings[display]" value="<?php echo $_GET['currentDisplay'];?>
">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__loader preloader-container">
                <div class="preloader preloader--lg"></div>
            </div>
        </div>            
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/menu/includes/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_196796757367c6ea298eb1c7_43485071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_196796757367c6ea298eb1c7_43485071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container">
            <button 
                class="btn btn--primary is-disabled" 
                type="button" 
                data-menu-action-save 
                data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Menu@checkRules',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'location'=>$_GET['menuLocation']));?>
" 
                data-check-unsaved-changes
                data-form-validate="#updateMenuForm"
            >
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['save_changes'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@menu',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-scripts"} */
class Block_209331150867c6ea298ee422_14035439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_209331150867c6ea298ee422_14035439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['helper']->value->script('menu-manager.js');?>
?v=<?php echo $_smarty_tpl->tpl_vars['template']->value->getRSThemesVersion();?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
