<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:39:58
  from '/var/www/html/templates/orderforms/lagom2/includes/domain/bottom-sticky.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff7ce8404f9_14010126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0549362060011fbfbb0e988ee7d94f1d1b001d8d' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/domain/bottom-sticky.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/bottom-sticky.tpl' => 1,
  ),
),false)) {
function content_66dff7ce8404f9_14010126 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/bottom-sticky.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/bottom-sticky.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "domainsearch") {?>
        <div id="bottom-action-anchor" class="bottom-action-anchor"></div>
        <div class="bottom-action-sticky hidden" data-fixed-actions href="#bottom-action-anchor">
            <div class="container">
                <div class="sticky-content">
                    <div class="badge badge-circle-lg" id="cartItemCount">0</div>
                    <span class="m-l-1x"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('domains.domains_selected');?>
</span>
                </div>
                <div class="sticky-actions">
                    <a href="cart.php?a=confdomains" id="btnDomainContinue" class="btn btn-lg btn-primary" data-btn-loader>
                        <span>
                            <i class="ls ls-share"></i>
                            <span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span>
                        </span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                        </div>
                    </a>
                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "productdomian") {?>
        <div id="bottom-action-anchor" class="bottom-action-anchor"></div>
        <div class="bottom-action-sticky hidden" data-fixed-actions href="#bottom-action-anchor">
            <div class="container">
                <div class="sticky-content">
                    <div class="badge badge-circle-lg" id="cartItemCount">0</div>
                    <span class="m-l-1x"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('domains.domains_selected');?>
</span>
                </div>
                <div class="sticky-actions">
                    <button id="btnDomainContinue" type="submit" class="btn btn-lg btn-primary" disabled="disabled" data-btn-loader>
                        <span><i class="ls ls-share"></i><span class="btn-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
</span></span>
                        <div class="loader loader-button hidden">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                        </div>
                    </button>
                </div>
            </div>
        </div>
    <?php }
}
}
}
