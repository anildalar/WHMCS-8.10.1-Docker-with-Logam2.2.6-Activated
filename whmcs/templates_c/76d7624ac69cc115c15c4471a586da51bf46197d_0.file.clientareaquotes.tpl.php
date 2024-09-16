<?php
/* Smarty version 3.1.48, created on 2024-09-13 09:47:08
  from '/var/www/html/templates/lagom2/clientareaquotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66e40a1c08ae52_58145296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d7624ac69cc115c15c4471a586da51bf46197d' => 
    array (
      0 => '/var/www/html/templates/lagom2/clientareaquotes.tpl',
      1 => 1725773960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e40a1c08ae52_58145296 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['quotes']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"QuotesList",'noSortColumns'=>"5",'filterColumn'=>"4"), 0, true);
?>
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready( function ()
            {
                var table = jQuery('#tableQuotesList').removeClass('hidden').DataTable();
                <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'id') {?>
                    table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
                    table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'validuntil') {?>
                    table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'stage') {?>
                    table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
                <?php }?>
                table.draw();
                jQuery('.table-container').removeClass('loading');
                jQuery('#tableLoading').addClass('hidden');
            });
        <?php echo '</script'; ?>
>
        <div class="table-container loading clearfix">
            <div class="table-top">
                <div class="d-flex">
                    <label><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingaddonsview'];?>
</label>
                    <div class="dropdown view-filter-btns <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_status_icon'] == 'displayed') {?>iconsEnabled<?php }?>">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            <span class="status hidden"></span>
                            <span class="filter-name"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.all_entries');?>
</span>
                            <i class="ls ls-caret"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><span data-value="all"><?php echo $_smarty_tpl->tpl_vars['rslang']->value->trans('generals.all_entries');?>
</span></a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RSQuotesStatuses']->value, 'status', false, 'num');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                                    <li><a href="#"><span class="status status-<?php echo $_smarty_tpl->tpl_vars['status']->value['stageClass'];?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['status']->value['stage'];?>
" data-status-class="<?php echo $_smarty_tpl->tpl_vars['status']->value['stageClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['stage'];?>
</span></a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>  
            </div>
            <table id="tableQuotesList" class="table table-list">
                <colgroup>
                    <col style="width: 0%"/>
                    <col style="width: 45%"/>
                    <col style="width: 20%"/>
                    <col style="width: 20%"/>
                    <col style="width: 15%"/>
                    <col style="width: 0%"/>
                    
                </colgroup>
                <thead>
                    <tr>
                        <th data-priority="1"><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotenumber'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="2"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotesubject'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="6"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotedatecreated'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="5"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotevaliduntil'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestage'];?>
<span class="sorting-arrows"></span></th>
                        <th data-priority="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'quote');
$_smarty_tpl->tpl_vars['quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quote']->value) {
$_smarty_tpl->tpl_vars['quote']->do_else = false;
?>
                        <tr data-url="viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
">
                            <td><button type="button" class="btn-table-collapse"></button><?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
</td>
                            <td class="text-light"><?php echo $_smarty_tpl->tpl_vars['quote']->value['subject'];?>
</td>
                            <td class="text-nowrap"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['datecreated'];?>
</td>
                            <td class="text-nowrap"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedValidUntil'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['validuntil'];?>
</td>
                            <td class="text-nowrap"><span class="status status-<?php echo $_smarty_tpl->tpl_vars['quote']->value['stageClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['quote']->value['stage'];?>
</span></td>
                            <td class="text-center">
                                <form method="submit" action="dl.php">
                                    <input type="hidden" name="type" value="q" />
                                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
" />
                                    <button type="submit" class="btn btn-icon btn-sm"><i class="ls ls-download"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="loader loader-table" id="tableLoading">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
            </div>
        </div>
    <?php } else { ?>
        <div class="message message-no-data">
            <div class="message-image">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"invoice"), 0, true);
?>     
            </div>
            <h6 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['noquotes'];?>
</h6>
            <div class="message-action">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['opennewticket'];?>

                </a>
            </div>
        </div>
    <?php }
}?>    
<?php }
}
