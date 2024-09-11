<?php
/* Smarty version 3.1.48, created on 2024-09-10 07:44:13
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/style-manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66dff8cd172189_24544223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe886e6793f3085e409edd78ff70e520486ddf5' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/styles/style-manage.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/breadcrumb.tpl' => 1,
    'file:adminarea/includes/tabs.tpl' => 1,
    'file:adminarea/includes/modals/unsaved-changes.tpl' => 1,
    'file:adminarea/includes/modals/restore-defaults.tpl' => 1,
    'file:adminarea/includes/modals/save-confirmation.tpl' => 1,
  ),
),false)) {
function content_66dff8cd172189_24544223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163289415566dff8cd165154_20852074', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130622329966dff8cd166f96_23102859', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95791432966dff8cd168576_35954786', "template-content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21126670666dff8cd16a429_16780835', "template-actions");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85135814966dff8cd16d780_64314863', "template-modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115444648666dff8cd16ed15_75906342', "template-scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_163289415566dff8cd165154_20852074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_163289415566dff8cd165154_20852074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"style_manage"), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_130622329966dff8cd166f96_23102859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_130622329966dff8cd166f96_23102859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"style"), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_95791432966dff8cd168576_35954786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_95791432966dff8cd168576_35954786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
        <head>
            <meta charset="utf-8">
            <title>RSThemes - Style Manager</title>
            <base href="<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['adminPath']->value;?>
/">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/x-icon" href="favicon.ico">
        </head>
        <body>
        <app-root></app-root>
        </body>
    
<?php
}
}
/* {/block "template-content"} */
/* {block "template-actions"} */
class Block_21126670666dff8cd16a429_16780835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-actions' => 
  array (
    0 => 'Block_21126670666dff8cd16a429_16780835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="app-main__actions">
        <div class="container"> 
            <button class="btn btn--primary" data-save-changes data-toggle="lu-modal" data-target="#saveConfirmationModal">
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['save_changes'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </button>
            <a class="btn btn--default btn--outline " href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@pages',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
">
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </a>
            <button class="btn btn--default btn--outline m-l-a" type="button" data-toggle="lu-modal" data-target="#restoreDefaultModal">
                <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['restore_defaults'];?>
</span>
                <span class="btn__preloader preloader"></span>
            </button>
        </div>
    </div>
<?php
}
}
/* {/block "template-actions"} */
/* {block "template-modals"} */
class Block_85135814966dff8cd16d780_64314863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-modals' => 
  array (
    0 => 'Block_85135814966dff8cd16d780_64314863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/unsaved-changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/restore-defaults.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/modals/save-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-modals"} */
/* {block "template-scripts"} */
class Block_115444648666dff8cd16ed15_75906342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_115444648666dff8cd16ed15_75906342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>window.whmcsURL = '<?php echo $_smarty_tpl->tpl_vars['whmcsURL']->value;?>
'<?php echo '</script'; ?>
>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['angularDistJs']->value, 'dist');
$_smarty_tpl->tpl_vars['dist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dist']->value) {
$_smarty_tpl->tpl_vars['dist']->do_else = false;
?> 
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['dist']->value;?>
"><?php echo '</script'; ?>
> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo '<script'; ?>
> 

        let confirmRestoreModal = $('#restoreDefaultModal');
        let confirmRestoreCheckbox = $("input[name='restore-confirm-checkbox']");
        let confirmRestoreRadio = $("input[name='restore-confirm-radio']");
        let confirmRestoreButton  = $('[data-restore-default-modal-btn]');

        confirmRestoreCheckbox.change(function(){
            if(this.checked && confirmRestoreButton.is(":disabled")){
                confirmRestoreButton.prop("disabled", false)
            }else if (!this.checked && !confirmRestoreButton.is(":disabled")){
                confirmRestoreButton.prop("disabled", true)
            }
        })

        confirmRestoreModal.on('hidden.bs.modal', function (){
            if(confirmRestoreCheckbox.is(':checked') && !confirmRestoreButton.is(":disabled")){
                confirmRestoreButton.prop("disabled", true)
                confirmRestoreCheckbox.prop('checked', false)
            }
            confirmRestoreRadio.val(['activeTab'])
        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
