<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Products', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h2><span><?php esc_attr_e( 'Products', 'wp_admin_style' ); ?></span></h2>

						<div class="inside">

							<ul class="products">
								<?php for($i = 0; $i<20; $i++): ?>
									<li>
										<div class="wp_ironstreet_list_product_name">
											Port® - LPC61.
										</div>
										<img class="wp_ironstreet_list_product_image" src="<?php echo $plugin_url . '/images/tshirt.png'; ?>" alt="" />
										<div class="wp_ironstreet_list_product_buttons">
											<input class="button-primary" type="submit" name="Example" value="<?php esc_attr_e( 'Edit' ); ?>" />
											<input class="button-primary del" type="submit" name="Example" value="<?php esc_attr_e( 'Delete' ); ?>" />
										</div>
									</li>
								<?php endfor; ?>
							</ul>




						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h2><span><?php esc_attr_e(
									'Sidebar Content Header', 'wp_admin_style'
								); ?></span></h2>

						<div class="inside">
							<form class="" action="" method="post">
								<table class="form-table">

									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_name">Nombre</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_name" value="" class="large-text" />
										</td>
									</tr>

									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_description">Descripción</label>
											<br>
											<textarea id="wp_ironsteet_product_description" name="wp_ironsteet_product_description" cols="80" rows="10" class="all-options"></textarea>
										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_category">Categoria</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_category" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_brand">Brand</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_brand" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_style">Style</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_style" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_material">Material</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_material" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_price">Price</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_price" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_colors">Colors</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_colors" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top" >
										<td scope="row">
											<label for="wp_ironsteet_product_images">Images</label>
											<br>
											<input type="text" id ="wp_ironsteet_product_name" name="wp_ironsteet_product_images" value="" class="large-text" />

										</td>
									</tr>
									<tr valign="top">
										<td scope="row">
											<input class="button-primary" type="submit" name="Example" value="<?php esc_attr_e( 'Save' ); ?>" />
										</td>
									</tr>

								</table>
							</form>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
