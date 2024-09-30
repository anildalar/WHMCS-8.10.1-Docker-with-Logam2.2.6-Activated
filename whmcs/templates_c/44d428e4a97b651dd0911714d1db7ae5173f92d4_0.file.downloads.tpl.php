<?php
/* Smarty version 3.1.48, created on 2024-09-29 14:07:03
  from '/var/www/html/templates/lagom2/downloads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f95f07728883_16282078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d428e4a97b651dd0911714d1db7ae5173f92d4' => 
    array (
      0 => '/var/www/html/templates/lagom2/downloads.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f95f07728883_16282078 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>  
    <?php if (empty($_smarty_tpl->tpl_vars['dlcats']->value)) {?>
        <div class="message message-no-data">
            <div class="message-image">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"downloads"), 0, true);
?>
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</h6>
        </div>
    <?php } else { ?>
        <div class="search-box search-box-<?php echo $_smarty_tpl->tpl_vars['searchBoxStyle']->value;?>
">
            <form role="form" method="post" action="<?php echo routePath('download-search');?>
">
                <div class="search-group search-group-lg">
                    <div class="search-field">
                        <input class="form-control" type="text" name="search" id="inputDownloadsSearch"  placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadssearch'];?>
" />
                        <div class="search-field-icon"><i class="lm lm-search"></i></div>
                    </div>
                    <div class="search-group-btn">
                        <button class="btn btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>" type="submit" id="btnDownloadsSearch"/><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadscategories'];?>
</h2>
            </div>
            <div class="section-body">
                <?php if ($_smarty_tpl->tpl_vars['dlcats']->value) {?>
                    <div class="list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlcats']->value, 'dlcat');
$_smarty_tpl->tpl_vars['dlcat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dlcat']->value) {
$_smarty_tpl->tpl_vars['dlcat']->do_else = false;
?>  
                            <a class="list-group-item has-icon" href="<?php echo routePath('download-by-cat',$_smarty_tpl->tpl_vars['dlcat']->value['id'],$_smarty_tpl->tpl_vars['dlcat']->value['urlfriendlyname']);?>
">
                                <i class="list-group-item-icon lm lm-folder"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['numarticles'];?>
)</div>
                                    <?php if ($_smarty_tpl->tpl_vars['dlcat']->value['description']) {?><p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['description'];?>
</p><?php }?>
                                </div>
                            </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } else { ?>
                    <div class="message message-no-data">
                        <div class="message-image">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"downloads"), 0, true);
?>
                        </div>
                        <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</h6>
                    </div>
                <?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['mostdownloads']->value) {?>
            <div class="section">
                <div class="section-header">
                    <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadspopular'];?>
</h2>
                </div>  
                <div class="section-body">
                    <div class="list-group list-group-sm">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mostdownloads']->value, 'download');
$_smarty_tpl->tpl_vars['download']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->do_else = false;
?> 
                            <a class="list-group-item has-icon" href=<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
">
                                <i class="list-group-item-icon ls ls-document"></i>
                                <div class="list-group-item-body">
                                    <div class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?><i class="ls ls-padlock text-faded"></i> <?php }?></div>
                                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
<i class="ls ls-bullet-small"></i><?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>
</p>
                                </div>
                            </a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php }
}
}
}
