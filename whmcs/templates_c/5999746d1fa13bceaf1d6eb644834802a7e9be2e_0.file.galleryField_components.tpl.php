<?php
/* Smarty version 3.1.48, created on 2025-01-03 12:00:09
  from '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/gallery/pages/galleryField_components.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6777d149baf335_01131785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5999746d1fa13bceaf1d6eb644834802a7e9be2e' => 
    array (
      0 => '/var/www/html/modules/addons/LagomOrderForm/app/UI/Admin/Templates/gallery/pages/galleryField_components.tpl',
      1 => 1734760265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6777d149baf335_01131785 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/x-template" id="t-mg-<?php echo strtolower($_smarty_tpl->tpl_vars['elementId']->value);?>
"
        :component_id="component_id"
        :component_namespace="component_namespace"
        :component_index="component_index"
        :name="name"
>
    <div class="lu-form-group">
        <div class="galleryFieldButtonContainer">
            <button type="button" class="lu-btn lu-btn--primary" v-on:click="buttonAction(event)">
                <span class="lu-btn__text"> Upload Image </span>
            </button>
        </div>
        <div class="componentButtonContainer">
        </div>
        <div class="imageFieldContainer">
            <div class="imageMainGalleryContainer">
                <div v-if="emptyGallery()" class="lu-text-center lu-m-t-3x">
                    <span><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('info','noImagesInGallery');?>
</span>
                </div>
                <div v-else v-for="image in getAvailableGraphics()" class="imageMainGalleryItem">
                    <figure v-on:click="loadImageRemoveModal(event, image)" data-toggle="lu-modal" class="lu-widget lu-widget--big has-overlay lu-col-3 ">
                        <div class="lu-widget__overlay lu-widget__overlay--danger">
                            <div class="lu-widget__content" id="<?php echo $_smarty_tpl->tpl_vars['rawObject']->value->getId();?>
">
                                <div class="lu-msg lu-msg--sm">
                                    <div class="lu-msg__icon">
                                        <span class="lu-zmdi lu-zmdi-delete"></span>
                                    </div>
                                    <div class="lu-msg__body">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('button','removeImage');?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lu-widget__content">
                            <div class=imageMainGalleryItemContainer >
                                <div>
                                    <img :src="getImageUrlWithName(image)" alt="Image Preview">
                                </div>
                            </div>
                            <figcaption v-html="image"></figcaption>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div><?php }
}
