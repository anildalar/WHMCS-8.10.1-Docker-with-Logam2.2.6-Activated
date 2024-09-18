<?php
/* Smarty version 3.1.48, created on 2024-09-18 05:50:45
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66ea6a354b50a0_76193057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fd871b9d2757e0c586a9cebde9addfbdb745032' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/includes/tabs.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea6a354b50a0_76193057 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="app-main__nav">
    <div class="container">
        <ul class="nav nav--md nav--h nav--tabs">
            <?php if ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === "style") {?>
                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'standard') {?>is-active<?php }?>">
                    <a class="nav__link"
                    href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@manageStyle',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['styleName']->value));?>
">
                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tabs']['style_variables'];?>
</span>
                    </a>
                </li>
                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'styleSettings') {?>is-active<?php }?>">
                    <a class="nav__link"
                    href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@styleSettings',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['styleName']->value));?>
">
                        <span class="nav__link-text">Style Settings</span>
                    </a>
                </li> 
                <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['activeTab']->value == 'advanced') {?>is-active<?php }?>">
                    <a class="nav__link"
                    href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@manageStyleCustomCSS',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'styleName'=>$_smarty_tpl->tpl_vars['styleName']->value));?>
">
                        <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tabs']['custom_css'];?>
</span>
                    </a>
                </li>
            <?php } elseif ((isset($_smarty_tpl->tpl_vars['type']->value)) && $_smarty_tpl->tpl_vars['type']->value === 'display') {?>
                <?php if ((isset($_smarty_tpl->tpl_vars['display']->value)) && (isset($_smarty_tpl->tpl_vars['displayRule']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display']->value->rules, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
                        <li class="nav__item <?php if ($_smarty_tpl->tpl_vars['displayRule']->value->id == $_smarty_tpl->tpl_vars['rule']->value->id) {?> is-active<?php }?>">
                            <a class="nav__link" data-toggle="lu-tab" href="#display-rule-<?php echo $_smarty_tpl->tpl_vars['rule']->value->id;?>
">
                                <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['rule']->value->name;?>
</span>
                            </a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value->getFunctions(), 'function');
$_smarty_tpl->tpl_vars['function']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['function']->value) {
$_smarty_tpl->tpl_vars['function']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['function']->value['label'] != 'Extensions') {?>
                    <li class="nav__item <?php if (!$_smarty_tpl->tpl_vars['template']->value->license()->isActive() && $_smarty_tpl->tpl_vars['function']->value['action'] != 'info') {?>is-disabled<?php }?> <?php if ($_GET['action'] == $_smarty_tpl->tpl_vars['function']->value['action']) {?> is-active<?php }?>">
                        <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@".((string)$_smarty_tpl->tpl_vars['function']->value['action']),array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['function']->value['label'];?>
</span>
                        </a>
                    </li>
                    <?php } else { ?>
                    <li class="nav__item m-l-a <?php if (!$_smarty_tpl->tpl_vars['template']->value->license()->isActive() && $_smarty_tpl->tpl_vars['function']->value['action'] != 'info') {?>is-disabled<?php }?> <?php if ($_GET['action'] == $_smarty_tpl->tpl_vars['function']->value['action']) {?> is-active<?php }?>">
                        <a class="nav__link" href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@".((string)$_smarty_tpl->tpl_vars['function']->value['action']),array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                            <span class="nav__link-text"><?php echo $_smarty_tpl->tpl_vars['function']->value['label'];?>
</span>
                        </a>
                    </li>    
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </ul>
    </div>
</div>
<?php }
}
