<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
     <link rel="stylesheet" href="styles.css" /> -->
    <?php
     wp_head() 
    ?>


    <!-- <title>Castaway Podcasts /Innowise PHP test mockup/</title> -->
  </head>
  <body>
    <div class="narrow-container">
      <!-- header of the site -->

      <header class="header flex flex-row flex-nowrap justify-around">
        <div class="header__container-logo container-logo">
          <a href="index.html"
            ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Castaway_logo.svg"  alt="Podcast Logo"
          /></a>
        </div>
        <div class="header__container-nav container-nav flex justify-end">
          <nav class="container-nav__nav nav">
            <ul class="nav__link-list link-list flex">
              <li class="link-list__nav-item nav-item">
                <a class="nav-item__nav-link nav-link__home" href="#">Home</a>
              </li>
              <li class="link-list__nav-item nav-item">
                <a class="nav-item__nav-link nav-link__episodes" href="#"
                  >Episodes</a
                >
              </li>
              <li class="link-list__nav-item nav-item">
                <a class="nav-item__nav-link nav-link__about" href="#">About</a>
              </li>
              <li class="link-list__nav-item nav-item">
                <a class="nav-item__nav-link nav-link__contact" href="#"
                  >Contact</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </header>