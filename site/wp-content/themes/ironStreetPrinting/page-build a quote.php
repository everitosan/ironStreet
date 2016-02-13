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
              <div class="HCenter">
                <div class="input">
                  <label>First Name *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Last Name *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Email adress *</label>
                  <input type="email" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>phone number *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Company *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Website *</label>
                  <input type="text" />
                </div>
              </div>
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
              <div class="HCenter">
                <div class="input">
                  <label>Project name *</label>
                  <input type="text" />
                </div>
              </div>
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
          <h3>PROject name</h3>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Product, color</label>
                  <input type="text" />
                </div>
              </div>
              <div class="removeProduct outboxButton"><span>remove this product</span></div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="inputsiZeCointainer">
                <div class="size">
                  <input type="text" />
                  <label>S</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>M</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>L</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>XL</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>XXL</label>
                </div>
              </div>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>Product, color</label>
                  <input type="text" />
                </div>
              </div>
              <div class="removeProduct outboxButton"><span>remove this product</span></div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="inputsiZeCointainer">
                <div class="size">
                  <input type="text" />
                  <label>S</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>M</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>L</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>XL</label>
                </div>
                <div class="size">
                  <input type="text" />
                  <label>XXL</label>
                </div>
              </div>
            </div>
          </div>
          <div class="button"><span>+ Add another product</span></div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="printDetails">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Print details</h3>
          <div class="pure-g">
            <div class="pure-u-24-24 pure-u-lg-10-24">
              <div class="HCenter">
                <div class="input">
                  <label>IST print location</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-12-24 pure-u-lg-4-24">
              <div class="HCenter">
                <div class="input">
                  <label>ink colors</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-12-24 pure-u-lg-10-24">
              <div class="HCenter">
                <div class="input">
                  <label>ink</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="outboxButton"><span>Remove this print location</span></div>
          <div class="button"><span>+ Add another print location</span></div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
    <article class="extras">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-6-24"></div>
        <div class="pure-u-1 pure-u-md-12-24">
          <h3>Extra</h3>
          <div class="pure-u-1 pure-u-md-1-4 active"><span class="icon-ink"></span>
            <div class="name">screen-printing tags</div>
          </div>
          <div class="pure-u-1 pure-u-md-1-4"><span class="icon-tag"></span>
            <div class="name">hang tags</div>
          </div>
          <div class="pure-u-1 pure-u-md-1-4"><span class="icon-size"></span>
            <div class="name">size tag</div>
          </div>
          <div class="pure-u-1 pure-u-md-1-4"><span class="icon-tshirt"></span>
            <div class="name">size tagfolding and bagging</div>
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
          <div class="HCenter">
            <div class="input">
              <label>Design</label>
              <input type="file" />
            </div>
          </div>
          <div class="HCenter">
            <div class="input">
              <label> Design notes</label>
              <input type="text" />
            </div>
          </div>
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
              <div class="HCenter">
                <div class="input">
                  <label>ship to *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>attn</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>adress *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>city *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="pure-g">
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>state *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="pure-u-1 pure-u-sm-1-2">
              <div class="HCenter">
                <div class="input">
                  <label>zip code *</label>
                  <input type="text" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pure-u-1 pure-u-md-6-24"></div>
      </div>
    </article>
  </form>
</section>

<?php get_footer(); ?>
