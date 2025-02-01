<?php
/* Smarty version 3.1.48, created on 2025-01-13 06:24:19
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-optimization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6784b193b2e986_08826174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4862a7f6ba7cf03cf3083057b713bc87b0e8ea' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-optimization.tpl',
      1 => 1734354618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 4,
  ),
),false)) {
function content_6784b193b2e986_08826174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane <?php if ($_GET['tab'] == 'optimization') {?>is-active<?php }?>" id="settings-optimization">
    <div class="section">
        <div class="section__header">
            <h3 class="section__title">
                Website optimization
                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->pages['website_optimization']), 0, false);
?>
            </h3>
            
        </div>
        <div class="section__content">

            <div class="panel panel--collapse">
                <div class="collapse-toggle">
                    <h6 class="top__title">
                        Website Security Headers
                    </h6>
                </div>
                <div class="collapse show" data-website-security-headers>
                    <div class="form-group d-flex align-items-center p-b-0x" data-x-frame-options data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/adminApi.php?controller=CmsApi&method=xFrameOptionsValidate">
                        <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                            X-Frame-Options:
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['x_frame_options']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['x_frame_options']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['x_frame_options']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['x_frame_options']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['x_frame_options']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                            <?php }?>
                        </span>
                        <span data-x-frame-options-status-container>
                            <span data-x-frame-options-status="unsecure" class="text-danger is-hidden"><i class="ls ls-close text-danger"></i>Disabled</span>
                            <span data-x-frame-options-status="secure" class="text-success is-hidden"><i class="ls ls-check text-success"></i>Enabled</span>
                            <span data-x-frame-options-status="unknown" class="text-faded is-hidden"><i class="text-faded ls ls-denial"></i>Unknown</span>
                        </span>
                        <span data-x-frame-options-loader class="preloader preloader--sm"></span>
                        <button class="btn btn-primary btn--refresh is-hidden" type="button" data-x-frame-options-refresh>
                            <i class="btn-icon ls ls-refresh"></i>
                            Refresh
                        </button>
                    </div>
                    <form data-header-policy-options data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/adminApi.php?controller=CmsApi&method=headerOptionsSave" data-alert-text-sucess="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved'];?>
" data-alert-text-error="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved_error'];?>
">
                                                <div class="form-group p-t-2x">
                            <label class="form-label d-inline-flex is-pointer">
                                <span class="m-w-240 m-r-1x d-flex align-items-center">
                                    Referrer Policy
                                    <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['referrer_policy']['content']) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['referrer_policy']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['referrer_policy']['url'] != '') {?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['referrer_policy']['url'])."' target='_blank'>Learn More</a>");?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['security_headers']['referrer_policy']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                                    <?php }?>
                                </span>
                                <div class="switch switch--success">
                                    <input type="hidden" name="optimizator[rp]" value="0" />
                                    <input class="switch__checkbox" name="optimizator[rp]" data-option value="1" type="checkbox" data-show-icon-tabs <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("header_origin_enabled") == 1) {?> checked <?php }?>>
                                    <span class="switch__container">
                                        <span class="switch__handle"></span>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel--collapse" data-optimize-media-quality data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/adminApi.php?controller=MediaApi&method=optimizedImagesStatus">
                <div class="collapse-toggle">
                    <h6 class="top__title">
                        Optimize Media Quality
                    </h6>
                    <label data-optimize-media-quality-toggle>
                        <div class="switch <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_status") != "1") {?>collapsed<?php }?>" >
                            <input type="hidden" name="optimize_enabled" value="0">
                            <input class="switch__checkbox" name="optimize_enabled" value="1"  type="checkbox" <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_status") == "1") {?>checked<?php }?>>
                            <span class="switch__container">
                                <span class="switch__handle"></span>
                            </span>
                        </div>
                    </label> 
                </div>
                <div class="collapse <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_status") == "1") {?>show<?php }?>" id="optimize-images" data-optimizemedia-quality-collapse>
                    <div class="form-group d-flex align-items-center p-b-2x p-t-3x p-h-3x m-b-0x">
                        <label class="form-label m-w-240 m-r-1x m-b-0x">Image Quality:
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['media_quality']['image_quality']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['media_quality']['image_quality']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['media_quality']['image_quality']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['media_quality']['image_quality']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['optimize']['media_quality']['image_quality']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </label>
                        <select class="form-control form-control--sm" name="optimize" data-optimize-media-quality-select>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 0) {?>selected<?php }?> value="0">Off</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 90) {?>selected<?php }?> value="90">90%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 80) {?>selected<?php }?> value="80">80%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 70) {?>selected<?php }?> value="70">70%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 60) {?>selected<?php }?> value="60">60%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 50) {?>selected<?php }?> value="50">50%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 40) {?>selected<?php }?> value="40">40%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 30) {?>selected<?php }?> value="30">30%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 20) {?>selected<?php }?> value="20">20%</option>
                            <option <?php if (\RSThemes\Controller\Admin\CustomPageController::checkOptimizeSetting("image_optimize_percent") == 10) {?>selected<?php }?> value="10">10%</option>
                        </select>
                        <button
                                class="btn btn--sm btn--primary m-l-3x"
                                type="button"
                                data-toggle="lu-modal"
                                data-backdrop="static"
                                data-keyboard="false"
                                data-target="#optimize-media-modal"
                        >
                            Optimize
                        </button>
                    </div>
                    <ul class="list list--info p-h-3x p-b-3x is-hidden" data-optimize-media-quality-results>
                        <li class="list__item">
                            <span class="list__item-label">
                                Total size before optimization:
                            </span>
                            <span class="list__item-value" data-optimize-media-quality-results-before>
                                
                            </span>
                        </li>
                        <li class="list__item">
                            <span class="list__item-label">
                                Total size after optimization:
                            </span>
                            <span class="list__item-value" data-optimize-media-quality-results-after>
                                
                            </span>
                        </li>
                        <li class="list__item">
                            <span class="list__item-label">
                                Total size saved:
                            </span>
                            <span class="list__item-value" data-optimize-media-quality-results-saved>
                                
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <?php ob_start();
echo \RSThemes\Helpers\AddonHelper::getCurrentTemplate();
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('disableCacheConfigName', $_prefixVariable2."_disable_section_cache");?>
            <div class="panel panel--collapse" data-cache-history>
                <form class="collapse-toggle" data-enable-section-cache data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/modules/addons/RSThemes/src/Api/adminApi.php?controller=CmsApi&method=cacheSave" data-alert-text-sucess="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved'];?>
" data-alert-text-error="<?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['changes_saved_error'];?>
">
                    <h6 class="top__title">
                        Section Cache
                        <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['cache']['enable']['content']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['cache']['enable']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['cache']['enable']['url'] != '') {?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['cache']['enable']['url'])."' target='_blank'>Learn More</a>");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                            <?php }?>
                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['cache']['enable']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                        <?php }?>
                    </h6>
                    <label data-enable-section-cache-toggle>
                        <div class="switch switch--success">
                            <input type="hidden" name="disablecache" value="1" />
                            <input data-enable-section-cache-input class="switch__checkbox" name="disablecache" value="0" type="checkbox" <?php if (!\RSThemes\Models\Settings::getValue($_smarty_tpl->tpl_vars['disableCacheConfigName']->value)) {?> checked <?php }?>>
                            <span class="switch__container">
                                <span class="switch__handle"></span>
                            </span>
                        </div>
                    </label> 
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
