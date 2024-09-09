<?php
/* Smarty version 3.1.48, created on 2024-09-09 04:16:10
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66de768aabe137_38569216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28357a1fc6a969596c951f5cf9e831be79392749' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/extensions/promobanners/settings.tpl',
      1 => 1694173948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/extensions/promobanners/includes/breadcrumb.tpl' => 1,
    'file:adminarea/extensions/promobanners/includes/tabs.tpl' => 1,
    'file:adminarea/includes/helpers/docs.tpl' => 1,
  ),
),false)) {
function content_66de768aabe137_38569216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205486375066de768aaa15e0_42829641', "template-heading");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196389211566de768aaa2d96_10240272', "template-tabs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10673662866de768aaa3ae7_55211252', "template-content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16976895366de768aabb353_44446013', "template-scripts");
?>























<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "adminarea/includes/layout.tpl");
}
/* {block "template-heading"} */
class Block_205486375066de768aaa15e0_42829641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-heading' => 
  array (
    0 => 'Block_205486375066de768aaa15e0_42829641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/promobanners/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-heading"} */
/* {block "template-tabs"} */
class Block_196389211566de768aaa2d96_10240272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-tabs' => 
  array (
    0 => 'Block_196389211566de768aaa2d96_10240272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/extensions/promobanners/includes/tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "template-tabs"} */
/* {block "template-content"} */
class Block_10673662866de768aaa3ae7_55211252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-content' => 
  array (
    0 => 'Block_10673662866de768aaa3ae7_55211252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        #rs-module .img-thumb {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
        }

        #rs-module .table.table-list {
            border-spacing: 0 24px;
            border-collapse: separate;
        }

        #rs-module .table.table-list tr {
            box-shadow: 0 3px 10px rgba(0,0,0,.1);
        }

        #rs-module .table.table-list tr td{
            height: 159px;
            border: none;
        }

        #rs-module .table .ui-sortable-helper,#rs-module .table .sortable-chosen {
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.5) !important;
            background: #ffffff !important;
            opacity: .7;
        }
    </style>

<?php if ($_smarty_tpl->tpl_vars['extension']->value->checkStructureUpdateNeeded()) {?>
<div class="alert alert--outline has-icon alert--border-left alert--license alert--warning">
    <div class="alert__body">
        <p>Please update Database Structure in PromotionBanner Extension</p>
    </div>
    <div class="alert__actions">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'update'));?>
">
            <input type="hidden" name="crud_action" value="update_extension">
            <button type="submit" class="btn btn--warning">Update now</button>
            <button class="btn btn--default" data-dismiss="alert" aria-label="Close" type="button">Dismiss</button>
        </form>
    </div>
</div>
<?php }?>

    <div class="t-c mob-t-c--full" data-table-container data-table-check-container>
        <div class="t-c__top top m-b-3x" data-top-search data-toggler-options="toggleClass: is-open;">
            <div class="top__toolbar">
                <h3 class="section__title">
                    Promotions
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>'https://lagom.rsstudio.net/docs/v2/settings.html#general'), 0, false);
?>
                </h3>
            </div>
            <div class="top__toolbar is-right">
                <div class="top__search input-group">
                    <span class="input-group__icon lm lm-search"></span>
                    <input class="form-control input-group__form-control table-search" data-toggler-options="toggleFocus: true; clearOnBlur: true;" value="" placeholder="Search..." id="table-search" placeholder="Search">
                </div>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'add'));?>
" class="btn btn--primary"><span class="btn__icon lm lm-plus"></span> <span class="btn__text">Add Promo</span></a>
            <form action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'settings'));?>
" method="post">
                <input type="hidden" name="crud_action" value="refresh">
                <button data-toggle="tooltip" data-title="Click this button to refresh the MarketConnect banners. It's necessary after the MarketConenct settings changes"
                         type="submit" class="btn btn--icon btn--default btn--outline"><span class="btn__icon ls ls-refresh"></span></button>
            </form>
        </div>
        <div class="t-c__body t-c__body--boxed">
            <table class="t-c__table table mob-table--block" id="promotion-table" data-services-table data-search-input="#table-search" data-order='[0, "asc"]' data-clickable-rows="true" data-responsive="false">
                <colgroup>
                    <col class="table__col-9">
                    <col class="table__col-5">
                    <col class="table__col-5">
                    <col class="table__col-5">
                    <col class="table__col-0">
                    <col class="table__col-0">
                </colgroup>
                <thead>
                <tr>
                    <th class="cell-name">
                        <span>Name</span>
                    </th>
                    <th class="cell-type">
                        <span>Type</span>
                    </th>
                    <th class="cell-start-date" style="white-space: nowrap">
                        <span>Start Date</span>
                    </th>
                    <th class="cell-due-date" style="white-space: nowrap">
                        <span>Due Date</span>
                    </th>
                    <th class="cell-status">
                        <span>Status</span>
                    </th>
                    <th class="cell-actions no-sort"></th>
                </tr>
                </thead>
                <tbody id="rs_drag_items">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extension']->value->getSlides(), 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                    <tr style="cursor:move;" id="item_<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
">
                        <td class="cell-name" data-order="<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_order;?>
">
                            <div class="rail"> 
                                <div class="content-extension">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['slide']->value->getField('slide_name');?>
</strong>
                                    <p class="extensions-description truncate" style="max-width: 464px;"><?php echo $_smarty_tpl->tpl_vars['slide']->value->getField('slide_description');?>
</p>
                                </div>
                            </div>
                        </td>
                        <td class="cell-type">
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_type == '1') {?>
                                <strong>Banner</strong>
                            <?php } elseif ($_smarty_tpl->tpl_vars['slide']->value->slide_type == '2') {?>
                                <strong>Modal</strong>
                            <?php }?>
                        </td>
                        <td class="cell-start-date">
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_begin_time == 0) {?>
                                -
                            <?php } else { ?>
                                <?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['slide']->value->slide_begin_time);?>

                            <?php }?>
                        </td>
                        <td class="cell-due-date">
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_end_time == 0) {?>
                                -
                            <?php } else { ?>
                                <?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['slide']->value->slide_end_time);?>

                            <?php }?>
                        </td>
                        <td class="cell-status">
                            <div class="status">
                                <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_show == 1) {?>
                                    <label class="label label--success label--outline">Published</label>
                                <?php } else { ?>
                                    <label class="label label--outline is-disabled">Disabled</label>
                                <?php }?>
                            </div>
                        </td>
                        <td class="cell-actions">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName(),'exaction'=>'edit','slide_id'=>$_smarty_tpl->tpl_vars['slide']->value->id));?>
" class="btn btn--sm btn--default btn--outline"><span class="btn__text">Manage</span></a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="preloader-container is-hidden" data-table-preloader>
                <div class="preloader"></div>
            </div>
        </div>
    </div>
    
<?php
}
}
/* {/block "template-content"} */
/* {block "template-scripts"} */
class Block_16976895366de768aabb353_44446013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'template-scripts' => 
  array (
    0 => 'Block_16976895366de768aabb353_44446013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/sortable/0.8.0/js/sortable.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        
            $('.t-c__top.top.m-b-3x *[title]').tooltip('disable');
            $("#rs_drag_items").sortable({
                update: function (event, ui){
                    var order = $(this).sortable('serialize',{key:'string'});
                    // order var gives something like string=3&string=2&string=1
                    var ar = order.split('&');
                    var i = 0;
                    var str = '';
                    for(i;i<ar.length;i++){
                        if(str !== "") { str += ','; }
                        // slice is used to remove 'sting=' from every value of var ar
                        str += ar[i].slice(7);
                    }
                    $.post('<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Template@extension',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName(),'extension'=>$_smarty_tpl->tpl_vars['extension']->value->getLinkName()));?>
', {
                        'crud_action': 'sortable_new',
                        'sorting': str
                    }).done(function (response) {
                        console.log(response);
                    })
                },
            });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "template-scripts"} */
}
