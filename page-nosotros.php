<?php 
/*
  Template Name: Plantilla nosotros
*/ 
get_header();
?>

    <?php include 'includes/header-navigation.php'; ?>

  	<section id="slider_nosotros">
      
      <h2 class="animated fadeInLeftBig">Quienes somos</h2>
      <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do diam </p>
      <p class="animated fadeInRight">eiusmod tempor magna aliqua sed ut enim ad minim veniam, quis nostrud. </p>

  	</section>

  	<section id="cuerpo_nosotros">
  		<div class="container"> 

  			<div class="row">
  				<div class="col-sm-4">

            <article class="text-nosotros">
              <h3>Nosotros</h3>
              <h4>Como empresa</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do diam eiusmod tempor magna aliqua sed ut enim ad minim veniam, quis nostrud.</p>
            </article>            

  				</div>

  				<div class="col-sm-8">

            <article class="text-nosotros-derecha">
              <p><strong>Sed ut perspiciatis unde omnis iste natus</strong> error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <strong>Nemo enim ipsam voluptatem</strong> quia voluptas sit aspernatur aut odit aut fugit, sed quia <strong>consequuntur magni dolores</strong> eos qui ratione. Ut enim ad minima eniam, quis <strong>nostrum exercitationem ullam</strong> corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
            </article>             

  				</div>         

  			</div>

  		</div>
  	</section>


  	<section id="equipo">

  		<div class="container">

        <h5>Our Experts Team</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do diam eiusmod tempor
  magna aliqua sed ut enim ad minim veniam, quis nostrud.</p>        

  			<div class="row">

          <div class="col-sm-4 col-md-4 col-xs-12">
          	<article class="text-center">
              <figure>
                  <img src="imagenes/eq01.jpg" class="img-responsive" />
              </figure>
              <h3>Juan Perez</h3>
              <div class="cargo">Consultor</div>
            </article>

          </div>

          <div class="col-sm-4 col-md-4 col-xs-12">
            <article class="text-center">
              <figure>
                  <img src="imagenes/eq02.jpg" class="img-responsive" />
              </figure>
              <h3>Adrian Kugogo</h3>
              <div class="cargo">Administrador</div>              
            </article>

          </div>

          <div class="col-sm-4 col-md-4 col-xs-12">
            <article class="text-center">
              <figure>
                  <img src="imagenes/eq03.jpg" class="img-responsive" />
              </figure>
              <h3>Hizoka Morow</h3>
              <div class="cargo">Contador</div>              
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