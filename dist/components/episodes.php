<?php

$episodes = [
    ['number' => 3, 'tag' => 'Gear', 'title' => 'Should you get outboard audio gear?', 'summary' => 'Is hardware really worth it when it comes to podcasting? The answer is...it depends. Here’s our reasons on why you might want to consider picking something up.'],
    ['number' => 2, 'tag' => 'Tips & Tricks', 'title' => 'Mic tricks to take you to the next level', 'summary' => 'Stop rolling with those default settings on your mic. These small tweaks will take you from sounding good to great.'],
    [ 'number' => 1, 'tag' => 'Gear', 'title' => "The best microphone under $200", 'summary' => 'With so many microphones on the market, how are you supposed to know what’s the best? Take a look at our top picks.'],
    ];

?>

<?php foreach ($episodes as $episode): ?>
    <article
              class="episode-list-container__episode-item episode-item grid p-10"
            >
              <div
                class="episode-item__episode-image-container episode-image-container"
              >
                <img
                  class="episode-image-container__image"
                  src="../assets/pictures/Episode_<?php echo $episode['number'] ?>.png"
                  alt="Episode <?php echo $episode['number'] ?> picture"
                />
              </div>
              <div
                class="episode-item__episode-description-container episode-description-container flex flex-col items-start"
              >
                <p class="episode-description-container__tag"><?php echo $episode['tag'] ?></p>
                <p
                  class="episode-description-container__episode-num teal-standard-text"
                >
                  Episode <?php echo $episode['number'] ?>
                </p>
                <h3 class="episode-description-container__episode-name">
                <?php echo $episode['title'] ?>
                </h3>
                <p
                  class="episode-description-container__episode-description see-through-text-22px"
                >
                <?php echo $episode['summary'] ?>
                </p>
                <button
                  class="episode-description-container__details-button standart-teal-btn"
                >
                  View Episode Details
                </button>
              </div>
            </article>
<?php endforeach; ?>