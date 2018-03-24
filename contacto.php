<?php 
/*
  Template Name: Plantilla contacto
*/ 
get_header();
?>

    <?php include 'includes/header-navigation.php'; ?>

  	<section id="slider_contacto">
      
      <h2 class="animated fadeInLeftBig">Contáctenos</h2>
      <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do diam </p><p class="animated fadeInRight">eiusmod tempor magna aliqua sed ut enim ad minim veniam, quis nostrud. </p>

  	</section>

  	<section id="cuerpo_contacto">
  		<div class="container"> 

  			<div class="row">

          <article class="contacto">

            <h1>Contáctenos</h1>

            <div class="col-sm-4 col-xs-12">
              
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. Ut enim ad minima eniam, quis.</p>

            </div>

            <div class="col-sm-7 col-md-push-1 col-xs-12">

              <form>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombres" />
                  </div> 
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellidos" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" />
                  </div>                  
                </div>
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Asunto" />
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group">
                    <button type="button" class="btn btn-default">Enviar</button>
                  </div>

                </div>

              </form>              
              
            </div>

            <div class="limpiar"></div>
            
          </article>
      

  			</div>

  		</div>
  	</section>

  	<section id="equipo">

  		<div class="container">

  			<div class="row">

          <div class="col-sm-3 col-md-3">
          	<article class="text-center">
              <figure>
                  <img src="imagenes/eq01.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <div class="cargo">In moleste ipsum</div>
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="imagenes/eq02.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <div class="cargo">In moleste ipsum</div>              
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="imagenes/eq03.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
              <div class="cargo">In moleste ipsum</div>              
            </article>

          </div>

          <div class="col-sm-3 col-md-3">
            <article class="text-center">
              <figure>
                  <img src="imagenes/eq04.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
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