<?php
/* Smarty version 3.1.48, created on 2024-09-10 08:48:02
  from '/var/www/html/templates/orderforms/lagom2/includes/viewcart/promo-code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e007c2d9fdc4_65629954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a3f82b8d2e7108fa55ff7a235ddeebf4c3a1f5d' => 
    array (
      0 => '/var/www/html/templates/orderforms/lagom2/includes/viewcart/promo-code.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/viewcart/overwrites/promo-code.tpl' => 1,
  ),
),false)) {
function content_66e007c2d9fdc4_65629954 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/promo-code.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/viewcart/overwrites/promo-code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="section">
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartpromo'];?>
</h2>
        </div>
        <div class="section-body">
            <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="promo-code-description">
                            <i class="ls ls-addon"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
</span>
                        </div>
                    </div>
                    <div class="panel-footer d-flex space-between">
                        <div class="content">
                            <span class="code"><?php echo $_smarty_tpl->tpl_vars['promotioncode']->value;?>
 </span>
                        </div>
                        <div class="content">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=removepromo" class="btn btn-default btn-sm"><i class="ls ls-trash"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['removePromotionCode'];?>
</a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="search-box search-box-sm search-box-<?php echo $_smarty_tpl->tpl_vars['searchBoxStyle']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['hookOutput']->value) {?>m-b-0<?php } else { ?>m-b-40<?php }?>">
                    <form method="post" action="cart.php?a=checkout">
                        <div class="search-group">
                            <div class="search-field">
                                <input class="form-control" type="text" name="promocode" id="inputPromotionCode" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderPromoCodePlaceholder'];?>
"/>
                                <div class="search-field-icon"><i class="lm lm-search"></i></div>     
                            </div>
                            <div class="search-group-btn">
                                <button class="btn btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>" type="submit" name="validatepromo"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromovalidatebutton'];?>
</button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['promoBannerStatus']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/core/extensions/PromoBanners/promo-slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('setting'=>"cart-view",'class'=>"m-t-3x"), 0, true);
?>
            <?php }?>
        </div>
    </div>
<?php }?>    <?php }
}
