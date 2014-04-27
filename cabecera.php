<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="index.php">Proyecto Eventos</a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
					   <form class="navbar-form navbar-left" role="search">
					        <div class="form-group">
				          <input type="text" class="form-control" placeholder="">
				        </div>
				        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				      </form>
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li class="dropdown"><a href="events.html" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-calendar"></span> Events<b class="caret"></b></a>
					 <ul class="dropdown-menu">
                            <li><a href="portfolio-1-col.html">Sports</a>
                            </li>
                            <li><a href="portfolio-2-col.html">Cultural</a>
                            </li>
                            <li><a href="portfolio-3-col.html">Music</a>
                            </li>
                            <li><a href="portfolio-4-col.html">Promotions</a>
                            </li>
							<li><a href="portfolio-1-col.html">Academic</a>
                            </li>
                            <li><a href="portfolio-2-col.html">Fashion</a>
                            </li>
                            <li><a href="portfolio-3-col.html">Social</a>
                            </li>
                            <li><a href="portfolio-4-col.html">Other</a>
                            </li>
					  </ul>
                    </li>
                    <li><a href="news.php"><span class="glyphicon glyphicon-globe"></span> News</a>
                    <?php if(!isset($_SESSION['usuario'])){ ?>
                                    <li><a href="registrar.php" data-toggle="modal" data-target="#miRegistro"><span class="glyphicon glyphicon-pencil"></span> Register</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> Login<b class="caret"></b></a>
                    				  <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                    					<!-- LOGIN INICIO -->
                    					 <form class="navbar-form navbar-left" method="POST" id="frmLogin" action="login.php">
                    					  <div class="form-group">
                    						 <label for="email">Email : </label>
                    						 <input type="text" placeholder="" name="email" />
                    						 <label for="pass">Password : </label>
                    						 <input type="password" placeholder="" name="pass" />
                    					  </div>
                    						  <button class="btn btn-primary" type="submit" name="btnLogin">Enviar</button>
                    						  <button class="btn" type="button">Reset</button>
                    					</form>
                    					<!-- LOGIN FIN -->
                    					</div>
                                    </li>
                    <?php }else{ ?>
                    <li><a href="">Mi Perfil (<?php echo $_SESSION['usuario']?>)</a></li>
                    <li><a href="./includes/cerrarSesion.inc.php">Log Out</a></li>
                   <?php } ?>
                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>