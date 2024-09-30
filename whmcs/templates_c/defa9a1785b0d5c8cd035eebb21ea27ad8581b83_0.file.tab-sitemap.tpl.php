<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de277b3343_47462020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'defa9a1785b0d5c8cd035eebb21ea27ad8581b83' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/cms/includes/tab-sitemap.tpl',
      1 => 1720189766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/includes/helpers/popover.tpl' => 5,
  ),
),false)) {
function content_66f7de277b3343_47462020 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane <?php if ($_GET['tab'] == 'sitemap') {?>is-active<?php }?>" id="settings-sitemap">
    <form id="sitemapForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@sitemapSave",array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
        <div class="section">
            <div class="section__header">
                <h3 class="section__title">
                    Sitemap Manager
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->pages['sitemap_manager']), 0, false);
?>
                </h3>
            </div>
            <div class="">
                <div class="panel panel--collapse col-sm-12">
                    <div class="collapse-toggle">
                        <h6 class="top__title">
                            Sitemap
                        </h6>
                    </div>
                    <div  class="collapse show">
                        <div class="form-group d-flex p-h-3x p-b-2x p-t-3x">
                            <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                                Enable Sitemap
                                <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['sitemap']['enable']['content']) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['sitemap']['enable']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['sitemap']['enable']['url'] != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['sitemap']['enable']['url'])."' target='_blank'>Learn More</a>");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['sitemap']['enable']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, false);
?>
                                <?php }?>
                            </span>
                            <label>
                                <div class="switch switch--primary">
                                    <input type="hidden" name="enabled" value="0"/>
                                    <input class="switch__checkbox" id="sitemap_enable_disable" name="enabled" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->enabled) {?>checked="checked"<?php }?>>
                                    <span class="switch__container"><span class="switch__handle"></span></span>
                                </div>
                            </label>
                        </div>
                        <div class="form-group p-h-3x p-t-1x" <?php if (!$_smarty_tpl->tpl_vars['sitemap']->value->enabled) {?>style="display:none;"<?php }?> id="sitemap_enable_disable_buttons">
                            <button type="button" class="btn btn--primary m-r-1x" onclick="submitSitemap('<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@sitemapGen",array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
')">Generate Sitemap</button>
                            <button type="button" class="btn btn--secondary" onclick="submitSitemap('<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@sitemapPreview",array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
','_blank')">Preview Sitemap</button>
                            <?php if ($_smarty_tpl->tpl_vars['sitemapUpdate']->value) {?>
                                <p class="p-sm m-t-2x m-b-0x"><span class="text-faded">Last Updated:</span> <?php echo date("jS \of  F Y H:i",$_smarty_tpl->tpl_vars['sitemapUpdate']->value);?>
</p>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel--collapse col-sm-12">
                <div class="collapse-toggle">
                    <h6 class="top__title">
                        Settings
                    </h6>
                </div>
                <div class="collapse show">
                    <div class="form-group d-flex p-h-3x p-b-1x p-t-3x">
                        <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                            Include in robots.txt
                           <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_robots']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_robots']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_robots']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_robots']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_robots']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </span>
                        <label>
                            <div class="switch switch--primary">
                                <input type="hidden" name="" value="0"/>
                                <input class="switch__checkbox" name="robots" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->robots) {?>checked="checked"<?php }?>>
                                <span class="switch__container"><span class="switch__handle"></span></span>
                            </div>
                        </label>
                    </div>
                    
                    <div class="form-group d-flex p-h-3x p-t-1x p-b-3x">
                        <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                            Frequency
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['frequency']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['frequency']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['frequency']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['frequency']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['frequency']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </span>
                        <select class="form-control selectized m-w-250" name="frequency" style="opacity: 1; display: none;" tabindex="-1">
                            <option value="always" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "always") {?>selected<?php }?>>always</option>
                            <option value="hourly" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "hourly") {?>selected<?php }?>>hourly</option>
                            <option value="daily" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "daily") {?>selected<?php }?>>daily</option>
                            <option value="weekly" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "weekly") {?>selected<?php }?>>weekly</option>
                            <option value="monthly" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "monthly") {?>selected<?php }?>>monthly</option>
                            <option value="yearly" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "yearly") {?>selected<?php }?>>yearly</option>
                            <option value="never" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->frequency == "never") {?>selected<?php }?>>never</option>
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-start p-h-3x p-v-1x">
                        <input type="hidden" name="pages[website]" value="website">
                        <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                            Include Additional Pages
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_sitemap_pages']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_sitemap_pages']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_sitemap_pages']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_sitemap_pages']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['include_sitemap_pages']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </span>
                        <div class="d-flex flex-column">
                            <label class="checkbox d-flex m-t-0x is-pointer">
                                <input class="form-checkbox" type="checkbox" name="productGroups" value="1" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->productGroups) {?>checked="checked"<?php }?>>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Product Group Pages</span>
                            </label>
                            <label class="checkbox d-flex m-t-0x is-pointer">
                                <input class="form-checkbox" type="checkbox" name="announcements" value="1" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->announcements) {?>checked="checked"<?php }?>>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Announcement Articles Pages</span>
                            </label>
                            <label class="checkbox d-flex m-t-0x is-pointer">
                                <input class="form-checkbox" type="checkbox" name="knowledgebase" value="1" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->knowledgebase) {?>checked="checked"<?php }?>>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Knowledgebase Categories and Articles Pages</span>
                            </label>
                            <label class="checkbox d-flex m-t-0x is-pointer">
                                <input class="form-checkbox" type="checkbox" name="downloads" value="1" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->downloads) {?>checked="checked"<?php }?>>
                                <span class="form-indicator"></span>
                                <span class="form-text m-l-1x">Download Categories Pages</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group d-flex p-h-3x p-t-1x p-b-3x is-hidden">
                        <span class="form-label text-default m-w-240 m-r-1x m-b-0x">
                            Update
                            <?php if ($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['update']['content']) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['update']['url'])) && $_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['update']['url'] != '') {?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', "<a class='btn btn--secondary btn--xs' href='".((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['update']['url'])."' target='_blank'>Learn More</a>");?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('popoverFooter', false);?>
                                <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/popover.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popoverClasses'=>"notification__popover",'popoverBody'=>((string)$_smarty_tpl->tpl_vars['cms_tooltips']->value->pages['sitemap']['settings']['update']['content']),'popoverFooter'=>((string)$_smarty_tpl->tpl_vars['popoverFooter']->value)), 0, true);
?>
                            <?php }?>
                        </span>
                        <select class="form-control selectized m-w-250" name="update" style="opacity: 1; display: none;" tabindex="-1">
                            <option value="hourly" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->update == "hourly") {?>selected<?php }?>>hourly</option>
                            <option value="daily" <?php if ($_smarty_tpl->tpl_vars['sitemap']->value->update == "daily") {?>selected<?php }?>>daily</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions p-t-2x">
                <button type="submit" class="btn btn--primary" onclick="submitSitemap('<?php echo $_smarty_tpl->tpl_vars['helper']->value->url("Template@sitemapSave",array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
')">Save Changes</button>
            </div>
        </div>
    </form>
    
        <?php echo '<script'; ?>
>
            function submitSitemap(url,blank="")
            {
                $('#sitemapForm').attr('action',url);
                $('#sitemapForm').attr('target',blank)
                $('#sitemapForm').submit();
            }
                
            $("#sitemap_enable_disable").click(function() {
                if($(this).is(":checked")) {
                    $("#sitemap_enable_disable_buttons").show(500);
                } else {
                    $("#sitemap_enable_disable_buttons").hide(500);
                }
            });
        <?php echo '</script'; ?>
>
    
</div><?php }
}
