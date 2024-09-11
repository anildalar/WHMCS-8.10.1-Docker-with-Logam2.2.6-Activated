<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:53
  from '/var/www/html/templates/orderforms/lagom2/includes/recommendations-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7c96ac701_66297234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80482e6229fed55747cbd21ec661638d895eb11a' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/recommendations-modal.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/overwrites/recommendations-modal.tpl' => 1,
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/product-recommendations.tpl' => 1,
  ),
),false)) {
function content_66dff7c96ac701_66297234 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/recommendations-modal.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/overwrites/recommendations-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if (in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('configureproductdomain','configureproduct'))) {?>
        <div class="hidden" id="divProductHasRecommendations" data-value="<?php echo $_smarty_tpl->tpl_vars['productinfo']->value['hasRecommendations'];?>
"></div>
    <?php }?>
    <div class="modal modal-lg fade modal-recomendations" id="recommendationsModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
                    <h3 class="modal-title">
                        <?php if (in_array($_smarty_tpl->tpl_vars['templatefile']->value,array('viewcart','complete','checkout'))) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"recommendations.title.generic"),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"recommendations.title.addedTo"),$_smarty_tpl ) );?>

                        <?php }?>
                    </h3>
                </div>
                <div class="modal-body has-scroll">
                    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/product-recommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <div class="modal-footer m-t-3x">
                    <a class="btn btn-primary btn-block btn-lg" href="#" id="btnContinueRecommendationsModal" data-dismiss="modal" role="button">
                        <span><i class="ls ls-share"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="product-recommendation clonable w-hidden hidden">
            <div class="header">
                <div class="cta">
                    <div class="price">
                        <span class="w-hidden hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderfree"),$_smarty_tpl ) );?>
</span>
                        <span class="breakdown-price"></span>
                        <span class="setup-fee"><small>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"ordersetupfee"),$_smarty_tpl ) );?>
</small></span>
                    </div>
                    <button type="button" class="btn btn-sm btn-add">
                        <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"addtocart"),$_smarty_tpl ) );?>
</span>
                        <span class="arrow"><i class="fas fa-chevron-right"></i></span>
                    </button>
                </div>
                <div class="expander">
                    <i class="fas fa-chevron-right rotate" data-toggle="tooltip" data-placement="right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"recommendations.learnMore"),$_smarty_tpl ) );?>
"></i>
                </div>
                <div class="content">
                    <div class="headline truncate"></div>
                    <div class="tagline truncate">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"recommendations.taglinePlaceholder"),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
            <div class="body clearfix"><p></p></div>
        </div>
    </div>
<?php }?>    <?php }
}
