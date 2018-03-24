<?php 
/*
  Template Name: Plantilla blog de noticias
*/ 
get_header();
?>

    <?php include 'includes/header-navigation.php'; ?>

  	<section id="cuerpo_blog">
      
      <h1>Blog de noticias</h1>

  		<div class="container-fluid"> 

  			<div class="row">
          
          <div class="col-sm-7 col-xs-12">

            <article class="blog">
              
                <div class="imagen-blog">
                  <img src="imagenes/helloquence-61189-1-625x415.jpg" class="img-responsive" width="424" height="281" />
                </div>

                <div class="texto-blog">
                  <h2>HOW TO SELECT A SMALL BUSINESS COACH OR CONSULTANT</h2>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                  <button type="button" class="btn btn-default">Leer mas</button>
                </div>

                <div class="limpiar"></div>

            </article>

            <article class="blog">
              
                <div class="imagen-blog">
                  <img src="imagenes/tran-mau-tri-tam-57714-625x415.jpg" class="img-responsive" width="424" height="281" />
                </div>

                <div class="texto-blog">
                  <h2>HOW TO SELECT A SMALL BUSINESS COACH OR CONSULTANT</h2>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                  <button type="button" class="btn btn-default">Leer mas</button>
                </div>

                <div class="limpiar"></div>

            </article>

            <article class="blog">
              
                <div class="imagen-blog">
                  <img src="imagenes/luis-llerena-15500-625x415.jpg" class="img-responsive" width="424" height="281" />
                </div>

                <div class="texto-blog">
                  <h2>HOW TO SELECT A SMALL BUSINESS COACH OR CONSULTANT</h2>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                  <button type="button" class="btn btn-default">Leer mas</button>
                </div>

                <div class="limpiar"></div>

            </article>

            <article class="blog">
              
                <div class="imagen-blog">
                  <img src="imagenes/helloquence-61189-1-625x415.jpg" class="img-responsive" width="424" height="281" />
                </div>

                <div class="texto-blog">
                  <h2>HOW TO SELECT A SMALL BUSINESS COACH OR CONSULTANT</h2>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                  <button type="button" class="btn btn-default">Leer mas</button>
                </div>

                <div class="limpiar"></div>

            </article>

            <article class="blog">
              
                <div class="imagen-blog">
                  <img src="imagenes/noah-hinton-178198-625x415.jpg" class="img-responsive" width="424" height="281" />
                </div>

                <div class="texto-blog">
                  <h2>HOW TO SELECT A SMALL BUSINESS COACH OR CONSULTANT</h2>
                  <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                  <button type="button" class="btn btn-default">Leer mas</button>
                </div>

                <div class="limpiar"></div>

            </article>
            
          </div>

          <div class="col-sm-4 col-md-push-1 col-xs-12">

            <aside class="sidebar-derecha">
              
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Buscar...">
                </div>
                <button type="button" class="btn btn-success">Buscar</button>
              </form>

              <h1>Categorias</h1>
              <ul>             
                <li><a href="#">Actualidad</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Pagina Web</a></li>
                <li><a href="#">Tutoriales</a></li>
                <li><a href="#">Otros</a></li>                   
              </ul>

              <h1>Comentarios recientes</h1>
              <ul>             
                <li><a href="#">Beneficios de jabón Dove para la piel</a></li>
                <li><a href="#">El aroma y la frescura de los campos de heno de Pravia</a></li>
                <li><a href="#">Desinfectante Poett con agradable aroma a Lavanda</a></li>
                <li><a href="#">Business consulting</a></li>
                <li><a href="#">How to Select a Small Business Coach or Consultant</a></li>
                <li><a href="#">Narrow Your Focus to Prevent Overanalysis</a></li>                   
              </ul> 

            </aside>
            
          </div>

          <div class="clearfix visible-xs"></div>

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