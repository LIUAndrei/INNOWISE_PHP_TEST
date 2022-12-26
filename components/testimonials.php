<?php

$testimonials = [
    ['stars' => 5, 'quote' => 'I can’t recommend this podcast enough', 'cite' => 'Betty Lacey'],
    ['stars' => 5, 'quote' => 'Jacob is the best in the business', 'cite' => 'Adam Driver'],
    ['stars' => 5, 'quote' => 'A wealth of audio knowledge', 'cite' => 'Marcus Brown'],
    ['stars' => 5, 'quote' => 'Every episode is a gem!', 'cite' => 'Jessica Knowl'],
    ['stars' => 5, 'quote' => 'Whoa whoa, let me take some notes!', 'cite' => 'Scott Adams'],
    ['stars' => 5, 'quote' => 'I’ve upped my game considerably since I started listening', 'cite' => 'Steven Blast']




];

$currentDirectory =  get_template_directory_uri();
?>



<?php foreach ($testimonials as $testimonial): ?>
    <div class="main-testimonials__testimonial-box testimonial-box">
            <div  class="testimonial-box__line-of-stars flex flex-row">
           <?php while ($testimonial['stars'] > 0) {
                $testimonial['stars']--;
                echo '<img src="'.$currentDirectory.'/assets/images/Star_yellow.svg" alt="Star" />';
           } ?>
                
            
                

           
            </div>
            <blockquote class="testimonial-box__blockquote">
              <?php echo $testimonial['quote'] ?>
            </blockquote>
            <cite class="testimonial-box__cite see-through-text-22px"
              ><?php echo $testimonial['cite'] ?></cite
            >
          </div>
<?php endforeach; ?>