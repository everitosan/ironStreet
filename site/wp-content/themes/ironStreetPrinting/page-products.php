<?php
/*
  Template Name:  Products page
*/

 ?>
<?php get_header(); ?>

<header>
  <div class="header3 vCenter">
    <div class="title">
      <h1>Something About Us</h1>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3"></div>
        <div class="pure-u-1 pure-u-md-1-3">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="pure-u-1 pure-u-md-1-3"></div>
      </div>
    </div>
  </div>
</header>
<section>
  <article class="selet_your_product">
    <h2>select your product!</h2>
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <product-type-selector> </product-type-selector>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
  </article>
  <article class="filter">
    <div class="pure-g">
      <div class="pure-u-1 pure-u-md-1-5"></div>
      <div class="pure-u-1 pure-u-md-3-5">
        <h3>Filter//</h3>

        <div class="pure-g filters">
          <div class="pure-u-1-3 pure-u-sm-1-5" id="category_filter_list">
            <h5>Category</h5>

          </div>
          <div class="pure-u-1-3 pure-u-sm-1-5" id="brand_filter_list">
            <h5>Brand</h5>

          </div>
          <div class="pure-u-1-3 pure-u-sm-1-5" id="style_filter_list">
            <h5>Style</h5>

          </div>
          <div class="pure-u-1-3 pure-u-sm-1-5" id="material_filter_list">
            <h5>Material</h5>

          </div>
          <div class="pure-u-1-3 pure-u-sm-1-5" id="price_filter_list">
            <h5>Price</h5>
            <div>
              <div class="label">Example</div>
              <div class="radioButton"></div>
            </div>
            <div>
              <div class="label">Example</div>
              <div class="radioButton"></div>
            </div>
            <div>
              <div class="label">Example</div>
              <div class="radioButton active"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pure-u-1 pure-u-md-1-5"></div>
    </div>
    <div class="pure-g catalog">
      <div class="pure-u-1 pure-u-md-3-24"></div>
      <div class="pure-u-1 pure-u-md-18-24">



          <?php
            $args = array(
              'post_type'=>'product'
            );
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
            	echo '<div class="pure-g" id="product_list">';
            	while ( $the_query->have_posts() ) {
            		$the_query->the_post();
                echo '<div class="pure-u-1 pure-u-md-1-3 itemContainer" data-filter="';
                echo " ".the_field('type');
                echo " ".the_field('category');
                echo " ".the_field('brand');
                echo " ".the_field('style');
                echo " ".the_field('material');
                echo " ".the_field('price');
                echo '">';
                  echo '<div class="item" >';
                    echo '<div class="title">'.  get_the_title() .'</div>';
                    echo '<div class="figure">';
                       the_post_thumbnail();
                    echo '</div>';

                    // hidden Data
                    echo '<div class="hidden_data">';
                    echo '<button id="close" class="cancel"> X </button>';

                      echo '<div class="title">';
                        echo the_title() ;
                      echo '</div>';
                      echo '<div class="pure-g"> ';
                        echo '<div class=" pure-u-1 pure-u-sm-1-2">';

                          echo '<div class="description">';
                            echo the_field('description') ;
                          echo '</div>';

                          echo '<div class="category">';
                            echo '<span> Category: </span>';
                            echo the_field('category');
                          echo '</div>';
                          echo '<div class="brand">';
                            echo '<span> Brand: </span>';
                            echo  the_field('brand');
                          echo '</div>';
                          echo '<div class="style">';
                            echo '<span> Style: </span>';
                            echo the_field('style');
                          echo '</div>';
                          echo '<div class="material">';
                            echo '<span> Material: </span>';
                            echo the_field('material');
                          echo '</div>';
                          echo '<div class="price">';
                            echo '<span> $ </span>';
                            echo the_field('price');
                          echo '</div>';
                          echo '<div class="colors">';
                            echo the_field('colors');
                          echo '</div>';
                        echo '</div>';
                        echo '<div class="images  pure-u-1 pure-u-sm-1-2">';
                          echo the_field('images');
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';

                    echo '<div class="filters_data hidden_data">';
                      acf_form();
                    echo '</div>';
                  echo '</div>';
                echo '</div>';
            	}
            	echo '</div>';
            } else {
            	// no posts found
              echo "No post found";
            }
            /* Restore original Post Data */
            wp_reset_postdata();

        ?>

      </div>
      <div class="pure-u-1 pure-u-md-3-24"></div>
    </div>
  </article>
</section>

<back-to-top-button> </back-to-top-button>
<?php get_footer(); ?>
