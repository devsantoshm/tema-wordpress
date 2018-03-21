  <footer>	
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 hidden-sm">
					 <h4>Nosotros</h4>
           <p>Sed et ultricies velit, pulvinar lobortis ligula. Donec vitae nunc eget ante maximus laoreet. Vivamus orci dolor, sodales vel lorem sed, tincidunt fringilla libero. Nulla nec ipsum ac tellus molestie lobortis eu vel magna.</p>
				</div> 

        <div class="col-sm-12 visible-sm">
           <h4>Nosotros</h4>
           <p>Sed et ultricies velit, pulvinar lobortis ligula. Donec vitae nunc eget ante maximus laoreet. Vivamus orci dolor, sodales vel lorem sed, tincidunt fringilla libero. Nulla nec ipsum ac tellus molestie lobortis eu vel magna.</p>
        </div> 

				<div class="col-sm-2 hidden-sm">
					 <h4>ENLACES UTILES</h4>
           <ul>
              <li><a href="#">Morbi in ex</a></li>
              <li><a href="#">Morbi ut tellus</a></li>
              <li><a href="#">Proin facilisis</a></li>
              <li><a href="#">Proin sodale</a></li>
           </ul>
				</div>  

        <div class="visible-sm">

          <div class="col-sm-12">
             <h4>ENLACES UTILES</h4>
             <ul>
                <li><a href="#">Morbi in ex</a></li>
                <li><a href="#">Morbi ut tellus</a></li>
                <li><a href="#">Proin facilisis</a></li>
                <li><a href="#">Proin sodale</a></li>
             </ul>
          </div>             

        </div>  

        <div class="col-sm-2 hidden-sm">
           <h4>CONTACTO</h4>
           <p>
             <span class="glyphicon glyphicon-earphone"></span> 784 56850 | 987 096 766<br />
             <span class="glyphicon glyphicon-envelope"></span>informes@miempresa.com<br />
             <span class="glyphicon glyphicon-map-marker"></span>Av. Garzon 1245 Of 415 Jesus Maria.
           </p>
        </div> 

        <div class="visible-sm"> 

  				<div class="col-sm-12">
  					 <h4>CONTACTO</h4>
             <p>
               <span class="glyphicon glyphicon-earphone"></span> 784 56850 | 987 096 766<br />
               <span class="glyphicon glyphicon-envelope"></span>informes@miempresa.com<br />
               <span class="glyphicon glyphicon-map-marker"></span>Av. Garzon 1245 Of 415 Jesus Maria.
             </p>
  				</div> 

        </div> 

        <div class="col-sm-2 hidden-sm">
           <h4>SERVICIOS</h4>
           <ul>
              <li><a href="#">Morbi in ex</a></li>
              <li><a href="#">Morbi ut tellus</a></li>
              <li><a href="#">Proin facilisis</a></li>
              <li><a href="#">Proin sodale</a></li>
           </ul>             
        </div> 

        <div class="visible-sm"> 
				
  				<div class="col-sm-12">
  					 <h4>SERVICIOS</h4>
             <ul>
                <li><a href="#">Morbi in ex</a></li>
                <li><a href="#">Morbi ut tellus</a></li>
                <li><a href="#">Proin facilisis</a></li>
                <li><a href="#">Proin sodale</a></li>
             </ul>             
  				</div>

        </div> 

			</div>

      <div class="footer2">

  			<div class="row">
  				<div class="col-sm-4">
            <div id="logo-footer">
  					   <img src="<?php echo get_template_directory_uri() ?>/imagenes/logo-footer.png" />
            </div>
  				</div>

  				<div class="col-sm-4 text-center">
            <div class="creditos">
              MI EMPRESA 2017 - Todos los derechos reservados
            </div>
  				</div>   
  				
  				<div class="col-sm-4 text-right">
              <div class="social">
                  <a href="#"> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                  <a href="#"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                  <a href="#"> <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                  <a href="#"> <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                  <a href="#"> <i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a>
                  <a href="#"> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
              </div>

  				</div> 

  			</div>

      </div>
		</div>
  </footer>

  <!-- Modal search -->
  <div class="modal fade" id="ventana_buscar" tabindex="-1" role="dialog">

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fa fa-times-circle-o fa-2x icon-cerrar" aria-hidden="true"></i>
    </button>

    <div class="modal-dialog" role="document">
      <div class="modal-content modal-search">
        <div class="modal-body">
          <form class="form-group" method="get">
            <div class="form-group">
              <input type="text" class="form-control buscar" placeholder="Ingresa el termino de busqueda">
            </div>
            <button type="submit" class="btn btn-link btn_buscar">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- -->
  <?php wp_footer(); ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>

  <!-- owl carousel js -->
  <script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){ 
        $("#slider-testimonios").owlCarousel({
          items:1, 
          margin: 20,
          nav: true,
          dots: false,
          autoplay:true, 
          loop:true, 
          animateOut: 'fadeOut'
        });

        $(document).ready(function(){
            $("#menu_5").addClass("active");

        });          

      });        
  </script>

  </body>
</html>