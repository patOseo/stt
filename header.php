<!doctype html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKRJ7DD');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
<script defer>
    (function () {
        var zi = document.createElement('script');
        zi.type = 'text/javascript';
        zi.async = true;
        zi.referrerPolicy = 'unsafe-url';
        zi.src = 'https://ws.zoominfo.com/pixel/61afb3db513e3b001ae445da';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(zi, s);
    })();
</script>
</head>

<body class="stt-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKRJ7DD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header stt">
        <nav class="navbar" aria-label="navbar">
            <a class="brand" href="/" aria-label="Learn2 logo">

                <?php
                     $img = get_field('logo', 'option');
                     $random = rand(1, 1000);
                ?>

                <?php echo wp_get_attachment_image($img, array('300', '46')); ?></a>
            <div class="align-items-center d-flex flex-grow-1 flex-md-grow-0 justify-content-end main-nav">
                <ul class="nav text-uppercase cta-nav" id="mainnav">
                    <li><a href="<?php the_field('button_link', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#bookCallModal2_<?= $random; ?>">Contact Us</a></li>
                </ul>
            </div>
            
        </nav>
        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg viewBox="0 0 70 54" width="30">
                  <rect fill="#fff" width="70" height="10"></rect>
                  <rect fill="#fff" y="22" width="70" height="10"></rect>
                  <rect fill="#fff" y="44" width="70" height="10"></rect>
                </svg>
            </button>
    </header>



   <!-- Modal -->
<div class="modal fade" id="bookCallModal2_<?= $random; ?>" tabindex="-1" aria-labelledby="bookCallModal2Label_<?php $random; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close rounded-circle btn-lg" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body px-5">
        <h5 class="modal-title" id="bookCallModal2Label_<?php $random; ?>"><strong><?php the_field('popup_2_title', 'option'); ?></strong></h5>
        <p class="text-dark"><small><?php the_field('popup_2_text', 'option'); ?></small></p><br>
        <div class="position-relative">
          <?php get_template_part('template-parts/form-book-a-call-2', null, array('btntext' => $button)); ?>
        </div>
      </div>
      
    </div>
  </div>
</div>