<?php
/* Smarty version 3.1.48, created on 2024-09-24 05:48:34
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f252b2badf19_17349784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c9455f2b520d05341cb359660476e04d9287603' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/styles.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/svg-icons/sorting-arrows.tpl' => 3,
  ),
),false)) {
function content_66f252b2badf19_17349784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205930439366f252b2b93791_63168956', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197814714266f252b2b95e25_02280502', "template-tabs");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14853704966f252b2b96ce8_88898849', "template-content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_205930439366f252b2b93791_63168956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_205930439366f252b2b93791_63168956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_197814714266f252b2b95e25_02280502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_197814714266f252b2b95e25_02280502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_14853704966f252b2b96ce8_88898849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_14853704966f252b2b96ce8_88898849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <div class="section">
        <div class="t-c mob-t-c--full" data-table-container data-table-check-container>
            <div class="t-c__top top" data-top-search data-toggler-options="toggleClass: is-open;">
                <div class="top__toolbar">
                    <h3 class="section__title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['styles']['title'];?>
 <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['docs']->value['styles']['theme_style']), 0, false);
?></h3>
                   
                </div>
                <div class="top__toolbar is-right">
                    <div class="top__search input-group">
                        <span class="input-group__icon lm lm-search"></span>
                        <input 
                            class="form-control input-group__form-control table-search" 
                            data-toggler-options="toggleFocus: true; clearOnBlur: true;" 
                            value="" 
                            placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['search'];?>
..." 
                            id="table-search"
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="t-c__body t-c__body--boxed">
            <table 
                class="t-c__table table mob-table--block" 
                id="styles-table" 
                data-services-table 
                data-search-input="#table-search" 
                data-clickable-rows="true" 
                data-responsive="false"
            >
                <colgroup>
                    <col class="table__col-14">
                    <col class="table__col-4">
                    <col class="table__col-4">
                    <col class="table__col-5">
                </colgroup>
                <thead>
                    <tr>
                        <th class="cell-name">
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['name'];?>
</span>
                            <span class="sorting-icons-box">
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </span>
                        </th>
                        <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>
                            <th class="cell-scheme">
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['styles']['table']['color_scheme'];?>
</span>
                                <span class="sorting-icons-box">
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </span>
                            </th>
                        <?php }?>
                        <th class="cell-status">
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['status'];?>
</span>
                            <span class="sorting-icons-box">
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/svg-icons/sorting-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </span>
                        </th>
                        <th class="cell-actions no-sort"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getStyles(), 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                        <tr>
                            <td class="cell-name">
                                <div class="rail">
                                    <div class="content-extension">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@manageStyle',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['style']->value->getMainName()));?>
">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['style']->value->getName();?>
</strong>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <?php if (intval($_smarty_tpl->tpl_vars['template']->value->getVersion()) >= 2) {?>
                                <td class="cell-scheme">
                                    <div class="scheme-colors">
                                        <div class="scheme-color" style="background: <?php echo $_smarty_tpl->tpl_vars['style']->value->getPreviewColors("primary");?>
"></div>
                                        <div class="scheme-color" style="background: <?php echo $_smarty_tpl->tpl_vars['style']->value->getPreviewColors("secondary");?>
"></div>
                                    </div>
                                </td>
                            <?php }?>
                            <td class="cell-status">
                                <?php if ($_smarty_tpl->tpl_vars['style']->value->isActiveFromConfig()) {?>
                                    <span class="label label--outline label--success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['active'];?>
</span>
                                <?php } else { ?>
                                    <span class="label label--outline  is-disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['disabled'];?>
</span>
                                <?php }?>
                            </td>
                            <td class="cell-actions">
                                <div class="has-dropdown">
                                    <a class="btn btn--default btn--outline btn--xs" href="" data-toggle="lu-dropdown" data-placement="bottom right">
                                        <span class="btn__text is-hidden-mob-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['actions'];?>
</span>
                                        <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-down" data-arrow-target></span>
                                        <span class="btn__icon btn__icon-arrow ls ls-caret is-hidden-mob-up" data-arrow-target></span>
                                    </a>
                                    <div class="dropdown" data-dropdown-menu >
                                        <div class="dropdown__arrow" data-arrow></div>
                                        <div class="dropdown__menu">
                                            <ul class="nav">
                                                <li class="nav__item">
                                                    <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@manageStyle',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['style']->value->getMainName()));?>
">
                                                        <span class="nav__link-icon ls ls-edit"></span>
                                                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['manage'];?>
</span>
                                                    </a>
                                                </li>
                                                                                                <li class="nav__item">
                                                    <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['style']->value->getLivePreviewLink();?>
" target="__blank">
                                                        <span class="nav__link-icon lm lm-search"></span>
                                                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['live_preview'];?>
</span>
                                                    </a>
                                                </li>
                                                <?php if (!$_smarty_tpl->tpl_vars['style']->value->isActiveFromConfig()) {?>
                                                    <li class="nav__divider"></li>
                                                    <li class="nav__item">
                                                        <a 
                                                            class="nav__link" 
                                                            href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@setStyle',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['style']->value->getMainName()));?>
" 
                                                            data-toggle="lu-notification" 
                                                            data-status="success" 
                                                            data-timeout="5000" 
                                                            data-title="Success" 
                                                            data-body="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved'];?>
"
                                                        >
                                                            <span class="nav__link-icon ls ls-check"></span>
                                                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['activate'];?>
</span>
                                                        </a>
                                                    </li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="preloader-container is-hidden" data-table-preloader>
                <div class="preloader"></div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "template-content"} */
}
