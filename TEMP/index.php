<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Castaway Podcasts /Innowise PHP test mockup/</title>
  </head>
  <body>
    <div class="narrow-container">
      <!-- header of the site -->

     <?php include "components/header.php" ?>

      <!-- main part of the site -->
      <main class="main">
        <!-- top section of the site with a photo and a heading title -->
        <section class="main__next-level next-level flex flex-row pt-10">
          <!-- left container with a photo inside -->
          <div
            class="next-level__picture-container picture-container rounded-xl"
          >
            <img
              class="picture-container__photo"
              src="../assets/pictures/Next_level.png"
              alt="Our podcasts"
              width="650"
              height="873"
            />
          </div>

          <!-- right container with h1 title of the site and links to podcast platforms  -->
          <div
            class="next-level__title-container title-container flex flex-col"
          >
            <h1
              class="title-container__title title mt-[18.375rem] ml-[3.75rem]"
            >
              Take your podcast to the <span class="title__next">next</span>
              <span class="title__level">level</span>
            </h1>
            <div
              class="title-container__cast-platforms cast-platforms ml-[5.125rem] mt-20"
            >
              <p class="cast-platforms__listen-on listen-on">Listen on</p>
              <div class="cast-platforms__links-container links-container mt-4">
                <!-- podcast platforms list of links in form of image   -->
                <?php include "components/podcast-list.php" ?>
              </div>
            </div>
          </div>
        </section>

        <!-- section that shows the episodes list. contains 3 vertical list of boxes with episodes -->
        <section class="main__episodes episodes">
          <div
            class="episodes__e-title-container e-title-container flex flex-row"
          >
            <h2 class="e-title-container__e-title e-title">Latest episodes</h2>
            <button
              class="e-title-container__all-episodes-btn all-episodes-btn standart-teal-btn"
            >
              View all episodes
            </button>
          </div>
          <div
            class="episodes__episode-list-container episode-list-container flex flex-col"
          >
            
            <?php include "components/episodes.php" ?>
          </div>
        </section>

        <!-- section that showcases the host of the podcast -->
        <section class="main__host host flex flex-row">
          <div class="host__text host-text justify-center pr-[5.875rem]">
            <p class="host-text__meet-host teal-standard-text mt-[17.5rem]">
              Meet your host
            </p>
            <h2 class="host-text__name">Jacob Paulaner</h2>
            <p class="host-text__upper-text see-through-text-22px mt-7">
              Jacob has a background in audio engineering, and has been
              podcasting since the early days.
            </p>
            <p class="host-text__lower-text see-through-text-22px mt-8">
              He’s here to help you level up your game by sharing everything
              he’s learned along the way.
            </p>
          </div>
          <div class="host__photo host-photo">
            <img src="../assets/pictures/Host.png" alt="Photo of the host" />
          </div>
        </section>

        <!-- section with subscribe form  -->
        <section class="main__subscribe main-subscribe flex flex-row">
          <div class="main-subscribe__subscribe-text subscribe-text">
            <p class="subscribe-text__email-letter teal-standard-text">
              Email Newsletter
            </p>
            <h2 class="subscribe-text__subscribe-call">
              Subscribe for updates
            </h2>
          </div>
          <div class="main-subscribe__subscribe-form subscribe-form">
            <form
              class="subscribe-form__form form flex flex-col items-start"
              action="post"
            >
              <input
                class="form__name form-input"
                type="text"
                placeholder="Name"
              />
              <input
                class="form__email form-input"
                type="text"
                placeholder="Email"
              />

              <input
                class="form__submit standart-teal-btn"
                type="button"
                value="Submit"
              />
            </form>
          </div>
        </section>

        <!-- section with testimonials. contains a grid of 6 testimonial blocks  -->
        <section class="main__testimonials main-testimonials grid">
          <h2 class="main-testimonials__title hidden">List of testimonials</h2>
          <?php include "components/testimonials.php" ?>
        </section>
      </main>

      <!-- footer of the page -->
        <?php include "components/footer.php"; ?>
    </div>

  </body>
</html>
