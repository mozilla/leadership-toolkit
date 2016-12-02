<?php
/**
 * The template used for displaying home page content
 */
?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12 col-md-offset-2">
        <h2><?php the_title();?></h2>
        <?php the_content();?>
      </div>
    </div>

    <div class="abstarct abstract-home-tl hidden-md-down"></div>
    <div class="abstarct abstract-home-tr hidden-md-down"></div>
  </div>
</section>
<section class="home-section section-questions">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-xs-12 col-md-offset-1">
         <h2> <a href="https://leadershiptoolkit.production.paas.mozilla.community/gather-insights/">Build</a> | <a href="https://leadershiptoolkit.production.paas.mozilla.community/ideate/">Empower</a> | <a href="https://leadershiptoolkit.production.paas.mozilla.community/communicate/">Communicate</a> | <a href="https://leadershiptoolkit.production.paas.mozilla.community/prototype-test/">Open</a></h2>
      </div>
    </div>
  </div>
</section>

<?php
  //echo oit_home_processes();
?>



<!-- section class="home-section section-questions">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-xs-12 col-md-offset-1">
        <h3 class="heading3 hidden-sm-down">Commonly Asked Questions</h3>
        <a href="<?php echo SUBMIT_PAGE_URL;?>/question/" class="quick-link hidden-sm-down">Submit a question</a>
        <?php echo oit_questions_dropdown();?>
      </div>
    </div>
  </div>
</section -->

<section class="home-section section-methods">
  <div class="container">
    <h3 class="heading3"><a href="<?php echo SITE_URL;?>/methods/">Browse Resources</a></h3>
    <div class="row">
      <?php echo oit_methods();?>
    </div>
  </div>
</section>

<!--section class="home-section section-messages-slider">
  <?php //echo oit_message_slider();?>
</section-->
