<?php
/* Smarty version 3.1.48, created on 2024-09-29 15:12:00
  from '/var/www/html/templates/lagom2/core/cms/sections/common/forms/knowledgebase-search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f96e4089a357_48761464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cec25e9a423c4d633171e65564e3234520c6c0' => 
    array (
      0 => '/var/www/html/templates/lagom2/core/cms/sections/common/forms/knowledgebase-search.tpl',
      1 => 1694186636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f96e4089a357_48761464 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/knowledgebase-search.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/overwrites/knowledgebase-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <form 
        role="form" method="post" action="<?php echo routePath('knowledgebase-search');?>
"
    >
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
            <?php echo '<script'; ?>
>
                var recaptchaSiteKey = "<?php echo $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->getSiteKey();?>
";
            <?php echo '</script'; ?>
>
        <?php }?>
        <div class="domain-search-input search-group search-group-lg search-group-combined has-shadow <?php if ($_smarty_tpl->tpl_vars['customClass']->value) {
echo $_smarty_tpl->tpl_vars['customClass']->value;
}?>">
            <div class="search-field"  data-custom-tooltip data-placement="top" title="Please search phrase" data-trigger="manual">
                <input class="form-control" type="text" id="inputKnowledgebaseSearch" name="search" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>
" />
                <div class="search-field-icon">
                    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/search-field-icon.tpl")) {?>
                        <?php $_smarty_tpl->_subTemplateRender(((string)dirname($_smarty_tpl->source->filepath))."/../../../../../assets/svg-icon/custom/search-field-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php } else { ?>
                        <i class="lm lm-search"></i>
                    <?php }?>  
                </div>
            </div>
            <div class="search-group-btn">
                <button class="btn btn-primary" type="submit" id="btnKnowledgebaseSearch"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
            </div>
        </div>
    </form>
<?php }
}
}
