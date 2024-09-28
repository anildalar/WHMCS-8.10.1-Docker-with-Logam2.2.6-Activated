<?php
/* Smarty version 3.1.48, created on 2024-09-27 18:25:55
  from '/var/www/html/templates/lagom2/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6f8b345de62_70666388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff7e7d1ad4e9fecc685643b3cb31cf4742d790b' => 
    array (
      0 => '/var/www/html/templates/lagom2/homepage.tpl',
      1 => 1727159030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6f8b345de62_70666388 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="main-banner banner-center banner-home banner-<?php echo $_smarty_tpl->tpl_vars['siteBannerStyle']->value;?>
">
        <div class="container">
            <div class="banner-content">
        
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <h1 class="banner-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
</h1>
                <form method="post" action="domainchecker.php" id="frmDomainHomepage">
                    <input type="hidden" name="transfer">
                    <div class="domain-search-input search-group search-group-lg search-group-combined has-shadow">
                        <div class="search-field">
                            <div class="search-field-icon"><i class="lm lm-search"></i></div>
                            <input class="form-control" type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" autocapitalize="none" data-toggle="tooltip" <?php if (($_smarty_tpl->tpl_vars['language']->value == 'arabic' || $_smarty_tpl->tpl_vars['language']->value == 'hebrew' || $_smarty_tpl->tpl_vars['language']->value == 'farsi')) {?> data-placement="right" <?php } else { ?> data-placement="left" <?php }?> data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
"/>
                        </div>
                        <div class="search-group-btn">
                            <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                <button type="submit" class="btn btn-primary-faded transfer <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
" data-domain-action="transfer">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>

                                </button>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                <button type="submit" class="btn btn-primary search <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
" id="btnDomainSearch">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>

                                </button>
                            <?php }?>
                        </div>
                    </div>
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </form>
            <?php } else { ?>
                <h1 class="banner-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h1>
            <?php }?>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('illustration'=>"site/banner-bg"), 0, true);
?> 
    </div>
	<div class="main-body">
        <div class="container">
            <div class="m-w-lg m-h-a">
                <div class="section">
                    <div class="section-header">
                        <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>
</h2>
                    </div>
                    <div class="section-body">
                        <div class="tiles row">
                            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                <div class="col-md-3">
                                    <a class="tile tile-home" href="domainchecker.php">
                                        <div class="tile-icon">
                                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"domain"), 0, true);
?>                                            
                                        </div>
                                        <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
</div>
                                    </a>
                                </div>
                            <?php }?>
                            <div class="col-md-3">
                                <a class="tile tile-home" id="btnOrderHosting" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
                                    <div class="tile-icon">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"web-hosting"), 0, true);
?> 
                                    </div>
                                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
</div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="tile tile-home" id="btnMakePayment" href="clientarea.php">
                                    <div class="tile-icon">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comissions"), 0, true);
?> 
                                    </div>
                                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
</div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a class="tile tile-home" id="btnGetSupport" href="submitticket.php">
                                    <div class="tile-icon">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comments"), 0, true);
?>                                         
                                    </div>
                                    <div class="tile-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>
                        </div>
                        <div class="section-body">
                            <div class="panel" id="twitterFeedOutput">
                                <div class="loader d-flex justify-center">
                                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </div>
                            </div>
                            <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/twitter.js"><?php echo '</script'; ?>
>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>
                    <div class="section">
                        <div class="section-header">
                            <h2 class="section-title d-flex space-between"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['news'];?>
<i class="lm lm-info-text text-lighter"></i></h2>
                        </div>
                        <div class="section-body">
                            <div class="announcements-list list-group list-group-lg">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->index = -1;
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['announcement']->index++;
$__foreach_announcement_0_saved = $_smarty_tpl->tpl_vars['announcement'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['announcement']->index < 2) {?>
                                        <div class="list-group-item list-group-item-link" data-lagom-href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
">
                                            <span class="announcement-date">
                                                <i class="ls ls-calendar"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['carbon']->value->translatePassedToFormat($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],'M jS');?>

                                            </span>
                                            <div class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div>
                                            <div class="list-group-item-text">
                                                <p>
                                                    <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 350) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                                                    <?php }?>
                                                </p>
                                            </div>
                                            <div class="list-group-item-footer">
                                                <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) >= 350) {?>
                                                    <span class="btn btn-sm btn-primary-faded"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
</span>
                                                <?php }?>
                                                <div class="announcement-details">
                                                    <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                                                        <?php echo '<script'; ?>
>
                                                            (function(d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                if (d.getElementById(id)) {
                                                                    return;
                                                                }
                                                                js = d.createElement(s); js.id = id;
                                                                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                                                fjs.parentNode.insertBefore(js, fjs);
                                                            }(document, 'script', 'facebook-jssdk'));
                                                        <?php echo '</script'; ?>
>
                                                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-lagom-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                                                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-lagom-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div> 
        </div>
    </div>
<?php }
}
}
