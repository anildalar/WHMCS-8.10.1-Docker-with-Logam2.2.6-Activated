<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:45:04
  from '/var/www/html/templates/lagom2/viewannouncement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e409a015be31_74485270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4676f661bc3977a9ea3c269436ddc8db1056acf9' => 
    array (
      0 => '/var/www/html/templates/lagom2/viewannouncement.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e409a015be31_74485270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>	
	<div class="article panel panel-default">
        <div class="panel-body">
            <ul class="article-details">
                <li>
                    <i class="ls ls-calendar"></i>
                    <span><?php echo $_smarty_tpl->tpl_vars['carbon']->value->createFromTimestamp($_smarty_tpl->tpl_vars['timestamp']->value)->format('l, F j, Y');?>
</span>
                </li>
            </ul>
            <div class="article-content">
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            </div>
            <div class="article-footer">
                <div class="article-actions">
                    <a href="<?php echo routePath('announcement-index');?>
" class="btn btn-default"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'],"&laquo;",'');?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['editLink']->value) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['editLink']->value;?>
" class="btn btn-default btn-article-edit">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>

                    </a>
                    <?php }?>
                </div>
                <div class="article-share">
                    <?php if ($_smarty_tpl->tpl_vars['twittertweet']->value) {?>
                    <span>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="<?php echo $_smarty_tpl->tpl_vars['twitterusername']->value;?>
">Tweet</a><?php echo '<script'; ?>
 type="text/javascript" src="//platform.twitter.com/widgets.js"><?php echo '</script'; ?>
>
                    </span>
                    <?php }?>                
                    <?php if ($_smarty_tpl->tpl_vars['facebookrecommend']->value) {?>
                    <span>
                        
                        <div id="fb-root">
                        </div>
                        <?php echo '<script'; ?>
>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {return;}
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
                        
                        <div class="fb-like" data-lagom-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
                        </div>
                    </span>
                    <?php }?>
                </div>
            </div>
        </div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['facebookcomments']->value) {?>
    <div class="article-comments panel panel-default panel-form">
        <div class="panel-body">
            
            <div id="fb-root">
            </div>
            <?php echo '<script'; ?>
>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
            
            <fb:comments href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['urlfriendlytitle']->value);?>
" num_posts="5" width="500"></fb:comments>
        </div>
    </div>
	<?php }
}?>	<?php }
}
