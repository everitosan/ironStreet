<?php
/*
  Template Name:  About Us page
*/

 ?>
<?php get_header(); ?>
<header>
  <div class="header4 vCenter">
    <h1>Something Here Too</h1>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-3"></div>
      <div class="pure-u-1 pure-u-md-1-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 1500s.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-3"></div>
    </div>
  </div>
</header>
<section id="aboutus">
  <article class="mainInfo"><img src="<?= get_bloginfo('template_url') ?>/assets/ironstreetFullLogo.png" class="HCenter">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <div class="historyText">
          <p>We are a Bellingham, Wa. Screen-printing and design company. </p>
          <p>We look to continue pushing the limits on new trends and styles for your buisness. By using industry expertise, technical knowledge and creative ideas we have established a wide range of customers from large commercial businesses to your local
            mom and pop stores. </p>
          <p>Our team has been constructed of a progressive creative department, easy to work with sales department and professional printing specialists. No order is to big or to small. We are committed to providing you with the best customer service
            and highest quality in t-shirts.</p>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
  </article>
  <article class="ourHistory">
    <div class="timeLine"><img src="<?= get_bloginfo('template_url') ?>/assets/timeLinePhoto.jpg"><img src="<?= get_bloginfo('template_url') ?>/assets/timeLinePhoto.jpg"><img src="<?= get_bloginfo('template_url') ?>/assets/timeLinePhoto.jpg"><img src="<?= get_bloginfo('template_url') ?>/assets/timeLinePhoto.jpg"></div>
    <div class="timeLineFooter">
      <div class="spaceBar">
        <div class="bar"></div>
        <div class="years">
          <div class="pure-g">
            <div class="pure-u-1-6 active">2010</div>
            <div class="pure-u-1-6 active">2011</div>
            <div class="pure-u-1-6">2012</div>
            <div class="pure-u-1-6">2013</div>
            <div class="pure-u-1-6">2014</div>
            <div class="pure-u-1-6">2015</div>
          </div>
        </div>
      </div>
      <div class="pure-g">
        <div class="pure-u-1-5 prev"><img src="<?= get_bloginfo('template_url') ?>/assets/nextArrow.png"></div>
        <div class="pure-u-3-5">
          <h2>our history</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
        <div class="pure-u-1-5 next"><img src="<?= get_bloginfo('template_url') ?>/assets/nextArrow.png"></div>
      </div>
    </div>
  </article>
  <article class="address">
    <h2>address</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-3"></div>
      <div class="pure-u-1 pure-u-md-1-3">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-3"></div>
    </div>
  </article>
  <article class="map"><img src="<?= get_bloginfo('template_url') ?>/assets/map.jpg" class="mainMap">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-2-24"></div>
      <div class="pure-u-1 pure-u-md-10-24"><img src="<?= get_bloginfo('template_url') ?>/assets/mapPointer.png" class="mapPointer"><address>
1242 N Forest St, Basement Alley access<br>Bellingham, WA 98227</address></div>
      <div class="pure-u-1 pure-u-md-10-24">
        <p>
          Phone: (366) 387 3847
          <br>Email: info@ironstreetprinting.com</p>
      </div>
      <div class="pure-u-1 pure-u-md-2-24"></div>
    </div>
  </article>
  <article class="form">
    <h2>Heeeey you!</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-2">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
        <p>dummy text ever since the 1500s, when an unknown.</p>
      </div>
      <div class="pure-u-1 pure-u-md-1-2">
        <form>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input type="text" placeholder="COMPANY//" class="minInput">
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input type="text" placeholder="EMAIL//">
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input type="text" placeholder="NAME//" class="minInput">
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input type="text" placeholder="PHONE//">
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1">
              <textarea rows="10" placeholder="MESSAGE//"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </article>
</section>
<back-to-top-button> </back-to-top-button>
<?php get_footer(); ?>
