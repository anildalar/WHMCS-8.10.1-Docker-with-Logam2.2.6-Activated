<?php
/* Smarty version 3.1.48, created on 2024-09-28 10:44:55
  from '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/section-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66f7de278b03c7_42689294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5d3f4f0c4c6acaa92427e9f7ac46167ca7243db' => 
    array (
      0 => '/var/www/html/modules/addons/RSThemes/views/adminarea/pages/includes/modal/section/section-add.tpl',
      1 => 1720189764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminarea/includes/helpers/docs.tpl' => 1,
    'file:adminarea/pages/includes/modal/section/media-item.tpl' => 3,
    'file:adminarea/includes/media/no-data.tpl' => 3,
  ),
),false)) {
function content_66f7de278b03c7_42689294 (Smarty_Internal_Template $_smarty_tpl) {
?><div 
    class="modal modal--lg modal--media" 
    id="modalAddNewSection" 
    <?php if ($_smarty_tpl->tpl_vars['type']->value == "pageSection") {?>data-modal-section-add<?php }?>
>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <h4 class="top__title h6">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['modal']['add_section']['title'];?>
 
                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/helpers/docs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('link'=>$_smarty_tpl->tpl_vars['cms_docs']->value->modal['section']['add']), 0, false);
?>
                </h4>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link cancel__item" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <form 
                id="addNewSectionForm" 
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "pageSection") {?>
                    data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('CustomPage@addNewSection',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" 
                    data-modal-section-add-form
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value == "predefined") {?>
                    action="<?php echo $_smarty_tpl->tpl_vars['helper']->value->url('Section@create',array('templateName'=>$_smarty_tpl->tpl_vars['template']->value->getMainName()));?>
" method="POST"
                <?php }?>
            >
                <div class="modal__body">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "pageSection") {?>
                        <ul class="nav nav--h nav--tabs m-b-2x" data-modal-section-add-tabs>
                            <li class="nav__item is-active">
                                <a class="nav__link" data-toggle="lu-tab" href="#new-section-create" data-radio-tab>
                                    <input class="is-hidden" type="radio" name="newSection[type]" value="new" checked>
                                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['modal']['add_section']['create_new'];?>
</span>
                                </a>
                            </li>
                            <li class="nav__item  <?php if ($_smarty_tpl->tpl_vars['sections']->value->isEmpty()) {?>is-disabled<?php }?>">
                                <a class="nav__link" data-toggle="lu-tab" href="#new-section-predefined" data-radio-tab>
                                    <input class="is-hidden" type="radio" name="newSection[type]" value="predefined">
                                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['modal']['add_section']['choose_predefined'];?>
</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane is-active" id="new-section-create">
                                <div data-media-container>
                                    <div class="media__search input-group">
                                        <i class="input-group__addon lm lm-search"></i>
                                        <input type="text" class="form-control" placeholder="Search" data-media-search="">
                                    </div>
                                    <div class="media">
                                        <div class="media__list has-scroll" data-media-list>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionTypes']->value, 'sectionType');
$_smarty_tpl->tpl_vars['sectionType']->index = -1;
$_smarty_tpl->tpl_vars['sectionType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionType']->value) {
$_smarty_tpl->tpl_vars['sectionType']->do_else = false;
$_smarty_tpl->tpl_vars['sectionType']->index++;
$_smarty_tpl->tpl_vars['sectionType']->first = !$_smarty_tpl->tpl_vars['sectionType']->index;
$__foreach_sectionType_8_saved = $_smarty_tpl->tpl_vars['sectionType'];
?>
                                                <?php if ($_smarty_tpl->tpl_vars['sectionType']->value['default_type']) {?>
                                                    <?php $_smarty_tpl->_assignInScope('sectionComingSoon', false);?>
                                                    <?php $_smarty_tpl->_assignInScope('sectionThumb', false);?>
                                                    <?php $_smarty_tpl->_assignInScope('sectionChecked', false);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['sectionType']->first) {?>
                                                        <?php $_smarty_tpl->_assignInScope('sectionChecked', true);?>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionType']->value['comingsoon']))) {?>
                                                        <?php $_smarty_tpl->_assignInScope('sectionComingSoon', true);?>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['sectionType']->value['thumb']))) {?>
                                                        <?php $_smarty_tpl->_assignInScope('sectionThumb', $_smarty_tpl->tpl_vars['sectionType']->value['thumb']);?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/section/media-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->tpl_vars['sectionType']->value['name'],'slug'=>$_smarty_tpl->tpl_vars['sectionType']->value['slug'],'inputName'=>"newSection[new]",'value'=>$_smarty_tpl->tpl_vars['sectionType']->value['slug'],'comingsoon'=>$_smarty_tpl->tpl_vars['sectionComingSoon']->value,'thumb'=>$_smarty_tpl->tpl_vars['sectionThumb']->value,'checked'=>$_smarty_tpl->tpl_vars['sectionChecked']->value), 0, true);
?>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['sectionType'] = $__foreach_sectionType_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane" id="new-section-predefined">
                                <?php if ($_smarty_tpl->tpl_vars['sections']->value->isNotEmpty()) {?>
                                    <div data-media-container>
                                        <div class="media__search input-group">
                                            <i class="input-group__addon lm lm-search"></i>
                                            <input type="text" class="form-control" placeholder="Search" data-media-search="">
                                        </div>
                                        <div class="media">
                                            <div class="media__list has-scroll" data-media-list>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
                                                    <?php $_smarty_tpl->_assignInScope('sectionThumb', false);?> 
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['section']->value->type['thumb']))) {?>
                                                        <?php $_smarty_tpl->_assignInScope('sectionThumb', $_smarty_tpl->tpl_vars['section']->value->type['thumb']);?>
                                                    <?php }?>  
                                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/section/media-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"predefined",'originalName'=>$_smarty_tpl->tpl_vars['section']->value->type['name'],'name'=>$_smarty_tpl->tpl_vars['section']->value->name,'slug'=>$_smarty_tpl->tpl_vars['section']->value->type['slug'],'inputName'=>"newSection[predefined]",'value'=>$_smarty_tpl->tpl_vars['section']->value->id,'thumb'=>$_smarty_tpl->tpl_vars['sectionThumb']->value), 0, true);
?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            </div>
                                        </div>
                                    </div> 
                                <?php }?>     
                            </div>
                        </div>  
                       
                        <input id="section_language" type="hidden" name="language" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
                        <input id="section_order" type="hidden" name="order" value="" data-modal-section-add-order>                         <input id="section_index" type="hidden" name="index" value="" data-modal-section-add-index>                     <?php }?> 

                    <?php if ($_smarty_tpl->tpl_vars['type']->value == "predefined") {?>
                        <div data-media-container>
                            <div class="media__search input-group">
                                <i class="input-group__addon lm lm-search"></i>
                                <input type="text" class="form-control" placeholder="Search" data-media-search="">
                            </div>
                            <div class="media">
                                <div class="media__list has-scroll" data-media-list>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionTypes']->value, 'sectionType');
$_smarty_tpl->tpl_vars['sectionType']->index = -1;
$_smarty_tpl->tpl_vars['sectionType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionType']->value) {
$_smarty_tpl->tpl_vars['sectionType']->do_else = false;
$_smarty_tpl->tpl_vars['sectionType']->index++;
$_smarty_tpl->tpl_vars['sectionType']->first = !$_smarty_tpl->tpl_vars['sectionType']->index;
$__foreach_sectionType_10_saved = $_smarty_tpl->tpl_vars['sectionType'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['sectionType']->value['default_type']) {?>
                                            <?php $_smarty_tpl->_assignInScope('sectionComingSoon', false);?>
                                            <?php $_smarty_tpl->_assignInScope('sectionThumb', false);?>
                                            <?php $_smarty_tpl->_assignInScope('sectionChecked', false);?>                                            
                                            <?php if ($_smarty_tpl->tpl_vars['sectionType']->first) {?>
                                                <?php $_smarty_tpl->_assignInScope('sectionChecked', true);?>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['sectionType']->value['comingsoon']))) {?>
                                                <?php $_smarty_tpl->_assignInScope('sectionComingSoon', true);?>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['sectionType']->value['thumb']))) {?>
                                                <?php $_smarty_tpl->_assignInScope('sectionThumb', $_smarty_tpl->tpl_vars['sectionType']->value['thumb']);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->_subTemplateRender("file:adminarea/pages/includes/modal/section/media-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"default",'name'=>$_smarty_tpl->tpl_vars['sectionType']->value['name'],'slug'=>$_smarty_tpl->tpl_vars['sectionType']->value['slug'],'value'=>$_smarty_tpl->tpl_vars['sectionType']->value['slug'],'comingsoon'=>$_smarty_tpl->tpl_vars['sectionComingSoon']->value,'thumb'=>$_smarty_tpl->tpl_vars['sectionThumb']->value,'inputName'=>"type",'checked'=>$_smarty_tpl->tpl_vars['sectionChecked']->value), 0, true);
?>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['sectionType'] = $__foreach_sectionType_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:adminarea/includes/media/no-data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </div>
                            </div>
                        </div> 
                    <?php }?> 
                </div>
                <div class="modal__actions">
                    <button 
                        class="btn btn--primary" 
                        type="submit" 
                        form="addNewSectionForm" 
                        <?php if ($_smarty_tpl->tpl_vars['type']->value == "pageSection") {?>
                            data-modal-section-add-submit
                        <?php }?>
                    >
                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['page']['page_sections']['modal']['add_section']['title'];?>
</span>
                        <span class="btn__preloader preloader"></span>
                    </button>
                    <a class="btn btn--default btn--outline cancel__item" data-dismiss="lu-modal">
                        <span class="btn__text"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>
</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
