<?php
/*
  Template Name:  Build a quote page
*/

 ?>
<?php get_header(); ?>

<header class="fullHeight">
  <div class="header5 vCenter">
    <div class="title">
      <h1>Fast and Professional.</h1>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3"></div>
        <div class="pure-u-1 pure-u-md-1-3">
          <p>Iron Street Printing focuses on professional quality and fast turn around for all your t-shirt and design needs. </p>
          <p>Scroll down for a free quote!</p>
          <div><span class="buildAQuote_button">
Start Quote</span></div>
        </div>
        <div class="pure-u-1 pure-u-md-1-3"></div>
      </div>
    </div>
    <div class="down_button">
      <figure><img src="<?= get_bloginfo('template_url') ?>/assets/down1.png" /></figure>
    </div>
  </div>
</header>
<section id="buildAQuote">
  <form>
    <article class="redDivider"></article>
    <article class="contactInfo">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Contact Info</h3>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="First Name" required></input-form>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="Last Name" required orientation="right"></input-form>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="Email adress" required></input-form>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="phone number" required orientation="right"></input-form>

            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="Company" required></input-form>

            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="Website" required orientation="right"></input-form>
            </div>
          </div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="projectName">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>PROject name</h3>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">

              <input-form label="PROJECT NAME" required="true"></input-form>

            </div>
            <div class="pure-u-1 pure-u-sm-1-2"></div>
          </div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="productInfo">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>PROject info</h3>

          <cart-product-list> </cart-product-list>

          <a href="products">
            <div class="button redButton">
              <span> + add another product</span>
            </div>
          </a>

        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="printDetails">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Print details</h3>

          <cart-location-list> </cart-location-list>

          <print-location-button></print-location-button>

        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="extras">

      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Extra</h3>
          <div class="pure-g">

              <cart-extra class="pure-u-1 pure-u-md-1-4"  text="screen-printing tags" icon="icon-ink" >  </cart-extra>
              <cart-extra class="pure-u-1 pure-u-md-1-4"  text="hang tags" icon="icon-tag" > </cart-extra>
              <cart-extra class="pure-u-1 pure-u-md-1-4"  text="size tag" icon="icon-size" > </cart-extra>
              <cart-extra class="pure-u-1 pure-u-md-1-4"  text="size tagfolding and bagging" icon="icon-tshirt" > </cart-extra>



          </div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>


    </article>
    <article class="DesignFiles">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Add your design files</h3>
          <cart-upload-file>
          </cart-upload-file>

        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="ShippingInfo">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Shipping info</h3>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="ship to" required></input-form>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="attn" required orientation="right"></input-form>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="adress" required></input-form>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="city" required orientation="right"></input-form>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="state" required></input-form>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <input-form label="zip code" required orientation="right"></input-form>
            </div>
          </div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
  </form>
</section>

<?php get_footer(); ?>
