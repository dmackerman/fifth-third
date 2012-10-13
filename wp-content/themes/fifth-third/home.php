<?php get_header(); ?>
<body>
  <div class="wrap">
    
    <section role="main" class="main">
      <div class="inner">
        <div class="left">
          <a class="sprite-logo" href="https://www.53.com/site" target="_blank"></a>
          <h2>Between Nov. 1 – Dec. 30, 2012</h2>
          <div class="item">
            <div class="sprite-home-icon-1"></div>
            <p>Every time you use your Fifth Third Bank Credit or Debit Card this holiday season you’re automatically entered to win!</p>
          </div>
          <div class="item">
            <div class="sprite-home-icon-2"></div>
            <p>We’re selecting <strong>100 customers</strong> to win a “Holiday Payback” – a statement credit for every card purchase made that day -  <strong>up to $2,000</strong></p>
          </div>
          <a class="callToAction modalLink" data-name="seeDetails" href="#">See Details</a>
        </div>
        <div class="right">
          <div class="block">
            <div class="sprite-green-border"></div>
            <div class="prize">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/ipad.png" />
              <div class="week">1st Week's Prize</div>
              <div class="prize-name">iPad 2</div>
            </div>
            <div class="sprite-block-details-background">
              <h2>Facebook Sweepstakes</h2>
              <div class="dates">Every Friday Between Nov. 9 – Dec. 28, 2012</div>
              <a class="callToAction modalLink" data-name="facebookSweepstakes" href="#">Details &amp; Prizes</a>
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/fb-sweeps-photo.png" />
              <div class="blurb">Check back Nov.9 to see the winner and the next week’s prize!</div>
              <a href="https://www.facebook.com/FifthThirdBank" target="_blank" class="sprite-like-us-button" href="#">Like Us Now</a>

            </div>
          </div>
          <div class="block">
            <div class="sprite-green-border"></div>
            <div class="prize">
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/ipad.png" />
              <div class="week">1st Week's Prize</div>
              <div class="prize-name">iPad 2</div>
            </div>
            <div class="sprite-block-details-background">
              <h2>Facebook Sweepstakes</h2>
              <div class="dates">Every Friday Between Nov. 9 – Dec. 28, 2012</div>
              <a class="callToAction modalLink" data-name="facebookSweepstakes" href="#">See Details</a>
              <div class="blurb">Check back Nov.9 to see the winner and the next week’s prize!</div>
              <img src="<?php echo get_bloginfo('template_directory') ?>/images/fb-sweeps-photo.png" />
            </div>
          </div>
          <div class="block no-margin">
            <div class="sprite-green-border"></div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>

  </div> <!-- end .wrap -->

  <!-- include our modals -->
  <?php get_template_part('modals'); ?>

</body>
</html>