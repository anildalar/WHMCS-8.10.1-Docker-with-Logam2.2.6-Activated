<?php
/* Smarty version 3.1.48, created on 2025-01-04 18:05:21
  from '/var/www/html/templates/lagom2/announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_677978610dbec6_55480663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0711cdf61f734d5b3f1001d424739a3c7cd98a1b' => 
    array (
      0 => '/var/www/html/templates/lagom2/announcements.tpl',
      1 => 1681745128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677978610dbec6_55480663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
        <?php echo '<script'; ?>
>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['locale'];?>
/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        <?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?>
        <div class="announcements-list list-group list-group-lg">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
            <div class="list-group-item list-group-item-link" data-lagom-href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
">
                <span class="announcement-date"><i class="ls ls-calendar"></i><?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['announcement']->value['timestamp'])->format('jS M Y');?>
</span>
                <h3 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</h3>
                <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 350) {?>
                    <div class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>
</div>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('imgSrc', false);?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['displayImages'])) && $_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['displayImages'] == '1') {?>
                        <?php $_smarty_tpl->_assignInScope('imgCheck', smarty_modifier_truncate($_smarty_tpl->tpl_vars['announcement']->value['text'],"10"));?>
                        <?php if (strstr($_smarty_tpl->tpl_vars['imgCheck']->value,"<img")) {?>
                            <?php $_smarty_tpl->_assignInScope('imgArray', explode("<img",$_smarty_tpl->tpl_vars['announcement']->value['text']));?>
                            <?php $_smarty_tpl->_assignInScope('imgArray', explode("/>",$_smarty_tpl->tpl_vars['imgArray']->value[1]));?>
                            <?php $_smarty_tpl->_assignInScope('imgSrc', $_smarty_tpl->tpl_vars['imgArray']->value[0]);?>
                        <?php }?>
                    <?php }?>
                    <div class="list-group-item-text">
                        <?php if ($_smarty_tpl->tpl_vars['imgSrc']->value) {?>
                            <img <?php echo $_smarty_tpl->tpl_vars['imgSrc']->value;?>
 />
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                    </div>
                <?php }?>
                <div class="list-group-item-footer">
                    <span class="btn btn-sm btn-primary-faded"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['announcement']->value['editLink']) {?>
                        <button data-lagom-href="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['editLink'];?>
" class="btn btn-primary-faded btn-sm">                    
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>

                        </button>
                    <?php }?>
                    <div class="announcement-details">
                        <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-lagom-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-lagom-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        <ul class="pagination">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>class="active"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
       
    </div>
    <?php } else { ?>
        <div class="message message-no-data">
            <div class="message-image">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"article"), 0, true);
?>
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['noannouncements'];?>
</h6>
        </div>
    <?php }
}?>    <?php }
}
