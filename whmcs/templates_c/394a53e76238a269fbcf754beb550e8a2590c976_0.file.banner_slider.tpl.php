<?php
/* Smarty version 3.1.48, created on 2024-12-18 05:24:19
  from '/var/www/html/templates/lagom2/banner_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_67625c838595d9_71099147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394a53e76238a269fbcf754beb550e8a2590c976' => 
    array (
      0 => '/var/www/html/templates/lagom2/banner_slider.tpl',
      1 => 1734499456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67625c838595d9_71099147 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://oceanpbx.club/templates/lagom2/assets/img/page-manager/mountains_banner.png" class="d-block w-100" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beautiful Mountains</h5>
                    <p>Experience the beauty of nature.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://oceanpbx.club/templates/lagom2/assets/img/page-manager/mountains_banner2.png" class="d-block w-100" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Stunning Views</h5>
                    <p>Discover breathtaking landscapes.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header><?php }
}
