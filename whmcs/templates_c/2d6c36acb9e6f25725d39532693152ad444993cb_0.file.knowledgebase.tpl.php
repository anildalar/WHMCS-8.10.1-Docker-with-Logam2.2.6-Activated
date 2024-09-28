<?php
/* Smarty version 3.1.48, created on 2024-09-27 14:26:04
  from '/var/www/html/templates/lagom2/knowledgebase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f6c07c28b268_38641287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d6c36acb9e6f25725d39532693152ad444993cb' => 
    array (
      0 => '/var/www/html/templates/lagom2/knowledgebase.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f6c07c28b268_38641287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="search-box search-box-<?php echo $_smarty_tpl->tpl_vars['searchBoxStyle']->value;?>
">
        <form role="form" method="post" action="<?php echo routePath('knowledgebase-search');?>
">
            <div class="search-group search-group-lg">
                <div class="search-field">
                    <input class="form-control" type="text" id="inputKnowledgebaseSearch" name="search" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>
" />
                    <div class="search-field-icon"><i class="lm lm-search"></i></div>
                </div>
                <button class="btn btn-lg btn-primary<?php if ($_smarty_tpl->tpl_vars['searchBoxStyle']->value == 'primary') {?>-faded<?php }?>" type="submit" id="btnKnowledgebaseSearch"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
            </div>
        </form>
    </div>
    <div class="section kb-categories">
        <div class="section-header">
            <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasecategories'];?>
</h2>
        </div>
        <div class="section-body">
            <?php if ($_smarty_tpl->tpl_vars['kbcats']->value) {?>
                <div class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbcats']->value, 'kbcat', false, NULL, 'kbcats', array (
));
$_smarty_tpl->tpl_vars['kbcat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kbcat']->value) {
$_smarty_tpl->tpl_vars['kbcat']->do_else = false;
?>  
                        <a class="list-group-item has-icon" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbcat']->value['id'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbcat']->value['urlfriendlyname'];
$_prefixVariable2 = ob_get_clean();
echo routePath('knowledgebase-category-view',$_prefixVariable1,$_prefixVariable2);?>
">
                            <i class="list-group-item-icon lm lm-folder"></i>
                            <div class="list-group-item-body">
                                <div class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['numarticles'];?>
)<?php if ($_smarty_tpl->tpl_vars['kbcat']->value['editLink']) {?> <button data-lagom-href="<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['editLink'];?>
" class="btn btn-xs btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>
</button><?php }?></div> 
                                <?php if ($_smarty_tpl->tpl_vars['kbcat']->value['description']) {?><p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['description'];?>
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
                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"article"), 0, true);
?>
                    </div>
                    <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasenoarticles'];?>
</h6>
                </div>
            <?php }?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['kbmostviews']->value) {?>
        <div class="section kb-articles">
            <div class="section-header">
                <h2 class="section-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasepopular'];?>
</h2>
            </div>
            <div class="section-body">
                <div class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbmostviews']->value, 'kbarticle');
$_smarty_tpl->tpl_vars['kbarticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kbarticle']->value) {
$_smarty_tpl->tpl_vars['kbarticle']->do_else = false;
?>
                        <a class="list-group-item has-icon" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable4 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable3,$_prefixVariable4);?>
">
                            <i class="list-group-item-icon ls ls-document"></i>
                            <div class="list-group-item-body">
                                <div class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];
if ($_smarty_tpl->tpl_vars['kbarticle']->value['editLink']) {?> <button data-lagom-href="<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['editLink'];?>
" class="btn btn-default btn-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['edit'];?>
</button><?php }?></div>
                                <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['article']) {?><p class="list-group-item-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kbarticle']->value['article'],100,"...");?>
</p><?php }?>
                            </div>
                        </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    <?php }?>
    
    <?php echo '<script'; ?>
>
        document.addEventListener("DOMContentLoaded", function() {
            if (localStorage.getItem("remoteSearchPhrase")) {
                var searchPhrase = localStorage.getItem("remoteSearchPhrase");
                var searchInput = document.querySelector('#inputKnowledgebaseSearch');
                var searchBtn = document.querySelector('#btnKnowledgebaseSearch');
                setTimeout(function(){
                    searchInput.value = searchPhrase;
                    searchBtn.click();
                    localStorage.removeItem("remoteSearchPhrase");
                }, 500);
            }
        });

    <?php echo '</script'; ?>
>
    
<?php }?>    <?php }
}
