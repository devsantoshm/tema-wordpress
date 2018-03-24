<?php 
/*
  Template Name: Plantilla inicio
*/ 
get_header();
?>

  	<?php include 'includes/header-navigation.php'; ?>

  	<section id="slider">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo get_template_directory_uri() ?>/imagenes/slider1.png" alt="slide 01">
              <div class="carousel-caption">
                <h2>INSURANCE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum commodo urna at elementum. Quisque nisi augue, egestas ac orci at, accumsan interdum sem. Nam sit amet scelerisque ipsum. Phasellus scelerisque ut nisi in cursus.</p>
                <div class="vermas">
                  <a href="#" class="btn btn-success">Buy now</a>
                </div>                
              </div>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri() ?>/imagenes/slider2.png" alt="slide 02">
              <div class="carousel-caption">
                <h2>INSURANCE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum commodo urna at elementum. Quisque nisi augue, egestas ac orci at, accumsan interdum sem. Nam sit amet scelerisque ipsum. Phasellus scelerisque ut nisi in cursus.</p>
                <div class="vermas">
                  <a href="#" class="btn btn-success">Buy now</a>
                </div>                    
              </div>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri() ?>/imagenes/slider3.png" alt="slide 03">
              <div class="carousel-caption">
                <h2>INSURANCE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum commodo urna at elementum. Quisque nisi augue, egestas ac orci at, accumsan interdum sem. Nam sit amet scelerisque ipsum. Phasellus scelerisque ut nisi in cursus.</p>
                <div class="vermas">
                  <a href="#" class="btn btn-success">Buy now</a>
                </div>                    
              </div>
            </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        
        </div>

  	</section>

  	<section id="servicios">
  		<div class="container"> 

  			<div class="row">

  				<div class="col-sm-4">
  					<article class="text-center">
  						<figure>
  							<img src="<?php echo get_template_directory_uri() ?>/imagenes/servicio01.jpg" class="img-responsive img-thumbnail" />
  						</figure>
  						<h3>Business consulting</h3>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum commodo urna at elementum. Quisque nisi augue, egestas ac orci at, accumsan interdum sem. Nam sit amet scelerisque ipsum. Phasellus scelerisque ut nisi in cursus.</p>
  						<div>
  							<a href="#">Read more</a>
  						</div>
  					</article>
  				</div>

  				<div class="col-sm-4">
  					<article class="text-center">
  						<figure>
  							<img src="<?php echo get_template_directory_uri() ?>/imagenes/servicio02.jpg" class="img-responsive img-thumbnail" />
  						</figure>
  						<h3>IT management</h3>
  						<p>Nulla sollicitudin, ipsum sed interdum dignissim, lorem orci placerat nunc, facilisis bibendum magna enim id odio. Suspendisse eu commodo risus. Ut ac eleifend nibh, a hendrerit nunc. Phasellus scelerisque ut nisi in cursus.</p>
  						<div>
  							<a href="#">Read more</a>
  						</div>
  					</article>
  				</div>

  				<div class="col-sm-4">
  					<article class="text-center">
  						<figure>
  							<img src="<?php echo get_template_directory_uri() ?>/imagenes/servicio03.jpg" class="img-responsive img-thumbnail" />
  						</figure>
  						<h3>Online consulting</h3>
  						<p>Cras feugiat nunc a viverra iaculis. Maecenas mattis condimentum elementum. Sed sem dolor, accumsan sit amet est in, vestibulum vehicula erat.  Vivamus faucibus viverra ex, sit amet sollicitudin tortor venenatis eu. Cras sed congue libero.</p>
  						<div>
  							<a href="#">Read more</a>
  						</div>
  					</article>
  				</div>

  			</div>

  		</div>
  	</section>

  	<section id="testimonios">

  		<div class="container"> 
  			<div class="row">
  				<div class="col-sm-12">

            <div id="slider-testimonios" class="owl-carousel owl-theme">
  					
                <article class="text-center">
                    <div class="testimonio">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ex consequat, mollis libero sit amet, iaculis purus. Sed ac enim non arcu imperdiet ultricies a vel libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas massa lacus, congue at lorem at, aliquet sagittis sem.                        
                    </div>

                    <div class="autor">
                      Orci varius natoque penatibus
                    </div>
                    
                    <div class="organizacion">
                       Sed ac enim non arcu 
                    </div>

                </article>

                <article class="text-center">
                    <div class="testimonio">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ex consequat, mollis libero sit amet, iaculis purus. Sed ac enim non arcu imperdiet ultricies a vel libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas massa lacus, congue at lorem at, aliquet sagittis sem.                        
                    </div>

                    <div class="autor">
                      Orci varius natoque penatibus
                    </div>
                    
                    <div class="organizacion">
                       Phasellus tortor tellus
                    </div>

                </article>

                <article class="text-center">
                    <div class="testimonio">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ex consequat, mollis libero sit amet, iaculis purus. Sed ac enim non arcu imperdiet ultricies a vel libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas massa lacus, congue at lorem at, aliquet sagittis sem.                        
                    </div>

                    <div class="autor">
                      Orci varius natoque penatibus
                    </div>
                    
                    <div class="organizacion">
                       Sed ac enim non arcu 
                    </div>

                </article>

                <article class="text-center">
                    <div class="testimonio">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ex consequat, mollis libero sit amet, iaculis purus. Sed ac enim non arcu imperdiet ultricies a vel libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas massa lacus, congue at lorem at, aliquet sagittis sem.                        
                    </div>

                    <div class="autor">
                      Cras facilisis dui ac erat viverra
                    </div>
                    
                    <div class="organizacion">
                       Donec feugiat lectus sit amet
                    </div>

                </article>

            </div>

  				</div>

  			</div>
  		</div>

  	</section>

  	<section id="equipo">

  		<div class="container">

  			<div class="row">

          <div class="col-sm-3 col-md-3">
          	<article class="text-center">
              <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/imagenes/eq01.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquet tortor a scelerisque vehicula. Vivamus volutpat malesuada quam id fringilla.</p>
              <div class="cargo">In moleste ipsum</div>
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/imagenes/eq02.jpg" class="img-responsive" />
              </figure>
              <h3>Adrian Kugogo</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquet tortor a scelerisque vehicula. Vivamus volutpat malesuada quam id fringilla.</p>
              <div class="cargo">In moleste ipsum</div>              
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/imagenes/eq03.jpg" class="img-responsive" />
              </figure>
              <h3>Hizoka Morow</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquet tortor a scelerisque vehicula. Vivamus volutpat malesuada quam id fringilla.</p>
              <div class="cargo">In moleste ipsum</div>              
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="<?php echo get_template_directory_uri() ?>/imagenes/eq04.jpg" class="img-responsive" />
              </figure>
              <h3>Juliana Martinez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam aliquet tortor a scelerisque vehicula. Vivamus volutpat malesuada quam id fringilla.</p>
              <div class="cargo">In moleste ipsum</div>              
            </article>

          </div>  				

  			</div>

  		</div>

  	</section>

  	<section id="suscripcion">
  		<div class="container"> 
  			<div class="row">
  				<div class="col-sm-6">
  					   <h3 class="text-right">Suscribete a nuestro newsletter</h3>
  				</div>

  				<div class="col-sm-6">
              <form id="boletin" class="form-inline">
                  <input type="email" name="correo" class="form-control" />
                  <input type="submit" value="Enviar" class="btn btn-info centrar_boton" />
              </form>

  				</div>  				

  			</div>
  		</div>
  	</section>

<?php  
get_footer();
?>