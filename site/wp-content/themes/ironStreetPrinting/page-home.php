<?php
/*
  Template Name: Home Page
*/

 ?>


<?php get_header(); ?>
<header class="fullHeight">
  <div class="header1 vCenter">
    <h1>Something About Us</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
    <span class="buildAQuote_button">
      <a href="build-a-quote">
        Build A Quote
      </a>
    </span>
    <div class="down_button">
      <figure><img src="<?= get_bloginfo('template_url') ?>/assets/down1.png" /></figure>
    </div>
  </div>
</header>
<section>
  <article class="social-media vCenter">
    <div class="iconContainer">
      <img src="<?= get_bloginfo('template_url') ?>/assets/icons/ironStreet_logo.png" class="logo">
      <img src="<?= get_bloginfo('template_url') ?>/assets/separator.png" class="separator">
      <a href="https://www.facebook.com/IronStreetPrinting/?fref=ts" target="_blank">
        <span class="icon-facebook"></span>
      </a>
      <a href="https://www.instagram.com/ironstreetprinting/" target="_blank">
        <span class="icon-instagram"></span>
      </a>
      <a href="https://twitter.com/ironystreet"  target="_blank">
        <span class="icon-twitter"></span>
      </a>
    </div>
  </article>
  <article class="our-mission">
    <h2>Our Mission</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <p>Millions use Any.do to realize their true potential. Any.do helps you achieve anything by syncing your personal tasks, work projects, and shared lists so you have a clear path moving forward. You have a clear path moving forward.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-3">
        <div class="our_plus">
          <div class="item"><span class="icon-like"></span>
            <h3>Text Example</h3>
            <p>shared lists so you have a clear path moving forward. Download now to see for yourself.</p>
          </div>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-3">
        <div class="our_plus">
          <div class="item"><span class="icon-handShake"></span>
            <h3>Text Example</h3>
            <p>shared lists so you have a clear path moving forward. Download now to see for yourself.</p>
          </div>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-3">
        <div class="our_plus">
          <div class="item"><span class="icon-people"></span>
            <h3>Text Example</h3>
            <p>shared lists so you have a clear path moving forward. Download now to see for yourself.</p>
          </div>
        </div>
      </div>
    </div>
  </article>
  <article class="testimonial vCenter">
    <testimonial-slider class="testimonial_slider">
    <?php
      $args = array(
        'post_type' => 'testimonial'
      );
      $the_query = new WP_Query($args);
      if( $the_query-> have_posts()) {
        while ($the_query-> have_posts()) {
          $the_query->the_post();
          echo "<testimonial-slider-item text=' ";
          echo the_field('testimonial');
          echo "' url = '";
          echo the_field('url') . "' >";
            the_post_thumbnail();
          echo "</testimonial-slider-item>";
        }
      }
     ?>

   </testimonial-slider>



  </article>
  <article class="services">
    <h2>Our Services</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-lof letters.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-4 item"><span class="icon-ink"></span>
          <div class="outboxButton"><span>screen Print</span></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
          <p class="link">LEARN MORE</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-4 item"><span class="icon-pencil"></span>
          <div class="outboxButton"><span>Graphic Design</span></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
          <p class="link">LEARN MORE</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-4 item"><span class="icon-circle"></span>
          <div class="outboxButton"><span>Plotted vinil</span></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
          <p class="link">LEARN MORE</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-4 item"><span class="icon-box"></span>
          <div class="outboxButton"><span>shipping</span></div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
          <p class="link">LEARN MORE</p>
        </div>
      </div>
    </div>
  </article>
  <article class="how_we_work">
    <h2>HOW WE WORK</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters. It is a long established fact that a reader.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
    <div class="slider">
      <div class="slide">
        <h2>EASIER THAN YOU THINK</h2>
        <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-3"></div>
          <div class="pure-u-1 pure-u-md-1-3">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
          </div>
          <div class="pure-u-1 pure-u-md-1-3"></div>
        </div>
        <div class="button">
          <a href="build-a-quote">
            <span>start here to build a quote</span>
          </a>
        </div>
      </div>
      <div class="slide">
        <h2>EASIER THAN YOU THINK</h2>
        <div class="pure-g">
          <div class="pure-u-1 pure-u-md-1-3"></div>
          <div class="pure-u-1 pure-u-md-1-3">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
          </div>
          <div class="pure-u-1 pure-u-md-1-3"></div>
        </div>
        <div class="button">
          <a href="build-a-quote">
            <span>start here to build a quote</span>
          </a>
        </div>
      </div>

      <a class="slidesjs-previous slidesjs-navigation" href="#" title="Previous">
        <div class="arrowContainer">
          <img src="<?= get_bloginfo('template_url') ?>/assets/arrow.png">
        </div>
      </a>

      <a class="slidesjs-next slidesjs-navigation" href="#" title="Previous">
        <div class="arrowContainer">
          <img src="<?= get_bloginfo('template_url') ?>/assets/arrow.png">
        </div>
      </a>

    </div>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been th industry's standard dummy tex ever since the 1500s, when an unknown printer.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
  </article>
  <article class="say_hello">
    <h2>don't forget say hello</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-sm-1-5"></div>
      <div class="pure-u-1 pure-u-sm-3-5">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
        <form>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-2">
              <input type="text" placeholder="COMPANY:">
            </div>
            <div class="pure-u-1 pure-u-md-1-2">
              <input type="text" placeholder="EMAIL:">
            </div>
            <div class="pure-u-1 pure-u-md-1-2">
              <input type="text" placeholder="NAME:">
            </div>
            <div class="pure-u-1 pure-u-md-1-2">
              <input type="text" placeholder="PHONE:">
            </div>
            <div class="pure-u-1">
              <textarea rows="5" placeholder="MESSAGE: "></textarea>
            </div>
          </div>
          
        </form>
      </div>
      <div class="pure-u-1 pure-u-sm-1-5"></div>
    </div>
  </article>
</section>

<back-to-top-button> </back-to-top-button>
<?php get_footer(); ?>
