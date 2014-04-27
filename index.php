<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/functions.php'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<style>
        body{
            padding-top:0;
            
        }
		.dropdown label , .dropdown input , .dropdown button{
			margin-bottom:10px;
		}
		.modal-title{
			text-align:center;
		}
	#tblFormulario tr td{
		padding:5px;
	}
        .navbar{
            margin-bottom:0;
        }
	</style>
</head>
<body>
    <?php include('cabecera.php') ?>
  	<!-- Empieza la Slider -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h1>Modern Business - A Bootstrap 3 Template</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h1>Ready to Style &amp; Add Content</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h1>Additional Layout Options at <a href="http://startbootstrap.com">http://startbootstrap.com</a>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>


    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-check-circle"></i>Create your own events</h3>
                    <p>Create and knows the events scheduled in your city. Attends to meet people. You thrill to see how many people go to your events.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-pencil"></i> Register</h3>
                    <p>Create your own profile and you can track of all your Events. You get see how many people attend, who to like, what they say, statistics... And more!</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-folder-open"></i> All about events</h3>
                    <p> Read our news about events to find out where they are and see all the information about future and pasta events.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->



<!-- Comienza la columna con un texto principal -->
    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Modern Business: A Clean &amp; Simple Full Website Template by Start Bootstrap</h2>
                    <p>A complete website design featuring various single page templates from Start Bootstraps library of free HTML starter templates.</p>
                    <hr>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section-colored -->


<!-- Empieza la sección de eventos -->
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Upcoming Events</h2>
                    <hr>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-home-portfolio" src="http://placehold.it/700x450">
                    </a>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->

<!-- Aqui irá el mapa -->
    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc">
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section-colored -->

<!-- Aquí estará un calendario. -->
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section -->


<!-- Se podría eleminnar, o dar opción a crear un evento. -->
    <div class="container">

        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>'Modern Business' is a ready-to-use, Bootstrap 3 updated, multi-purpose HTML theme!</h4>
                <p>For more templates and more page options that you can integrate into this website template, visit Start Bootstrap!</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="http://startbootstrap.com">See More Templates!</a>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
	<!-- Modal -->
	  <!-- CONTENIDO REGISTRO EMERGENTE INICIO -->
		<div class="modal fade" id="miRegistro" tabindex="-1" role="dialog" aria-labelledby="miRegistroLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="miRegistroLabe">User Form</h4>
			  </div>
			  <div class="modal-body">
			  <!-- CONTENIDO VENTANA EMERGENTE REGISTRAR INICIO -->
				<form name="formularioUsuario" action="register.php" method="post" >
					<table cellspacing="5" id="tblFormulario">
						<tr>
							<td><label for="nombre">Enter Name </label></td>
							<td><input type="text" placeholder="nombre" name="nombre"/></td>
						</tr>

						<tr>
							<td>	<label for="email">Enter Email </label></td>
							<td> <input type="text" placeholder="e-mail" name="email"/></td>
						</tr>

						<tr>
							<td> <label for="password">Enter Password </label></td>
							<td> <input type="password" placeholder="password" name="password"/></td>
						</tr>

						<tr>
							<td> <button class="btn " type="submit"  name="btnRegister">Register</button></td>
							<td> <button class="btn " type="button" onclick="formularioUsuario.reset()">Reset</button></td>
						</tr>
					</table>
					</form>
					 <!-- CONTENIDO VENTANA EMERGENTE REGISTRAR FIN -->
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
			  </div>
			   <!-- CONTENIDO EMERGENTE FIN -->
			</div>
		  </div>
		</div>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
	<script>
        
        $(document).ready(function(){
           /* $("#frmLogin").submit(function(e){
                e.preventDefault();
                console.log("bieen");
                $.ajax({
                      url:  $(this).attr("action"),
                      data: $(this).serialize(),
                      type: "post",
                      success: function(data) {
                      $("body").append(data);
                      },
                      error:function (xhr, ajaxOptions, thrownError) {
                        alert('se produjo un error');
                      }
                    });
                
            });*/
            
        })

	</script>
</body>

</html>
