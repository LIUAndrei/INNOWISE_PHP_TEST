<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
     wp_head();
    ?>


  </head>
  <body>
    <div class="narrow-container">
      <!-- header of the site -->

      <header class="header flex flex-row flex-nowrap justify-around">
        <div class="header__container-logo container-logo">
          <a href="index.html"
            >
            <?php
              if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
              }

              
            ?>
            <img src="<?php echo $logo[0]; ?>"  alt="Podcast Logo"
          /></a>
        </div>
        <div class="header__container-nav container-nav flex justify-end">
          <nav class="container-nav__nav nav">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul id="" class="nav__link-list link-list flex">%3$s</ul>'

                )
              
              )
            ?>


            
          </nav>
        </div>
      </header>