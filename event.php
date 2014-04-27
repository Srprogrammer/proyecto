<!DOCTYPE html>
<html lang="en">
<?php session_start();
require_once('includes/functions.php');
?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Form </title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/modern-business.css" rel="stylesheet"/>
     <link href="css/jquery-ui.css" rel="stylesheet"/>
       <link href="css/comentarios.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    
    <style>
    @import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700);
        .contenedorInformacion span{  
        	display: inline-block;
        	outline: none;
        	cursor: pointer;
        	text-align: center;
        	text-decoration: none;
        	font: 14px/100% Arial, Helvetica, sans-serif;
        	padding: .5em 2em .55em;
        	text-shadow: 0 1px 1px rgba(0,0,0,.3);
        	-webkit-border-radius: .5em; 
        	-moz-border-radius: .5em;
        	border-radius: .5em;
        	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
        	box-shadow: 0 1px 2px rgba(0,0,0,.2);
            width:75%;
            margin-top:20px;
        }
        .contenedorInformacion span:hover{
            text-decoration: none;
            
        }
        .orange {
        	color: #fef4e9;
        	border: solid 1px #da7c0c;
        	background: #f78d1d;
        	background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
        	background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
        	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
        }
        .orange:hover {
        	background: #f47c20;
        	background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
        	background: -moz-linear-gradient(top,  #f88e11,  #f06015);
        	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
        }
        .jumbotron{
            background:url('http://assets4.kedin.es/uploads/event/image/2013/12/12/12/237132/Fiesta_de_Nochebuena_en_la_sala_Marco_Aldany_de_Madrid.jpg');
            background-size:cover;
            min-height:200px;
             box-shadow: 5px 5px 0 #ffc;
             -webkit-box-shadow: 5px 5px 0 #ffc;
            -moz-box-shadow: 5px 5px 0 #ffc;
        }
        #home h2{
            font-family: 'Yanone Kaffeesatz', 'sans-serif';
            font-size:39px;
           border-bottom: 1px solid #ddd;
           margin-left:20px;
           margin-top:0;
        }
        #home p{
            font-family: 'Yanone Kaffeesatz', 'sans-serif';
            font-size:24px;
            padding:20px;
        }
        .fotoMismaCategoria{
            width:95%;
            
        }
        .thumbnail {
            position:relative;
            overflow:hidden;
        }
         
        .caption {
            position:absolute;
            top:0;
            right:0;
            background:rgba(66, 139, 202, 0.75);
            width:100%;
            height:100%;
            padding:2%;
            display: none;
            text-align:center;
            color:#fff !important;
            z-index:2;
        }
        .thumbnail{
            padding:0;
            margin-bottom:0;
            background-color:transparent;
            border:0;
            
        }
        .desc {
        margin: 7px 3px;
        }
        .desc div {
float: left;
font-family: Arial;
width: 70px;
margin-right: 65px;
font-size: 13px;
font-weight: bold;
color: #000;
}
    </style>
</head>
<body>
    <?php include('cabecera.php') ?>
    <!-- Empieza Evento -->
    <div class="row">
        <!-- Lado Izquierdo -->
        <div class="col-sm-8 col-md-8 col-lg-8">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                      <li><a href="#informacion" data-toggle="tab">Informacion</a></li>
                      <li><a href="#comentarios" data-toggle="tab">Comentarios (0)</a></li>
                      <li><a href="#mapa" data-toggle="tab">Mapa</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">
                          <div class="jumbotron">
                              <div class="container">
                              </div>
                          </div>
                          <h2>Nombre Evento</h2>
                          <p>
                            Este evento se celebra todos los añoss aqui por queu babalaabsbdbasdbasdbasd.............................................
                            
                            Se suele organizar en los montes ebreossaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaSe suele organizar en los montes ebreossaaaaaaaaaaa aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaSe suele organizar en los montes ebreossaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                            
                                
                          </p>
                      </div>
                      <div class="tab-pane fade" id="informacion">...</div>
                      <div class="tab-pane fade" id="comentarios">
                      <!-- Empieza Comentarios -->
                        
                        	<div class="row">
                        		<h2 style="margin-left: 40px;">Comments</h2>
                        	</div>
                            <div class="qa-message-list" id="wallmessages">
                            				<div class="message-item" id="m16">
                        						<div class="message-inner">
                        							<div class="message-head clearfix">
                        								<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
                        								<div class="user-detail">
                        									<h5 class="handle">Oleg Kolesnichenko</h5>
                        									<div class="post-meta">
                        										<div class="asker-meta">
                        											<span class="qa-message-what"></span>
                        											<span class="qa-message-when">
                        												<span class="qa-message-when-data">Jan 21</span>
                        											</span>
                        											<span class="qa-message-who">
                        												<span class="qa-message-who-pad">by </span>
                        												<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko">Oleg Kolesnichenko</a></span>
                        											</span>
                        										</div>
                        									</div>
                        								</div>
                        							</div>
                        							<div class="qa-message-content">
                        								Yo!
                        							</div>
                        					</div></div>
                        					
                        					<div class="message-item" id="m9">
                        						<div class="message-inner">
                        							<div class="message-head clearfix">
                        								<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=amiya"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
                        								<div class="user-detail">
                        									<h5 class="handle">amiya</h5>
                        									<div class="post-meta">
                        										<div class="asker-meta">
                        											<span class="qa-message-what"></span>
                        											<span class="qa-message-when">
                        												<span class="qa-message-when-data">Nov 24, 2013</span>
                        											</span>
                        											<span class="qa-message-who">
                        												<span class="qa-message-who-pad">by </span>
                        												<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=amiya">amiya</a></span>
                        											</span>
                        										</div>
                        									</div>
                        								</div>
                        							</div>
                        							<div class="qa-message-content">
                        								Nice theme . Excellent one .
                        							</div>
                        					</div></div>
                        					
                        					<div class="message-item" id="m7">
                        						<div class="message-inner">
                        							<div class="message-head clearfix">
                        								<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=russell"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
                        								<div class="user-detail">
                        									<h5 class="handle">russell</h5>
                        									<div class="post-meta">
                        										<div class="asker-meta">
                        											<span class="qa-message-what"></span>
                        											<span class="qa-message-when">
                        												<span class="qa-message-when-data">Oct 25, 2013</span>
                        											</span>
                        											<span class="qa-message-who">
                        												<span class="qa-message-who-pad">by </span>
                        												<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=russell">russell</a></span>
                        											</span>
                        										</div>
                        									</div>
                        								</div>
                        							</div>
                        							<div class="qa-message-content">
                        								Nullam porta leo vitae ipsum feugiat viverra. In sed placerat mi. Nullam euismod, quam in euismod rhoncus, tellus velit posuere tortor, non cursus nunc velit et lacus.
                        							</div>
                        					</div></div>
                        					
                        					<div class="message-item" id="m6">
                        						<div class="message-inner">
                        							<div class="message-head clearfix">
                        								<div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=juggornot"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
                        								<div class="user-detail">
                        									<h5 class="handle">juggornot</h5>
                        									<div class="post-meta">
                        										<div class="asker-meta">
                        											<span class="qa-message-what"></span>
                        											<span class="qa-message-when">
                        												<span class="qa-message-when-data">Oct 24, 2013</span>
                        											</span>
                        											<span class="qa-message-who">
                        												<span class="qa-message-who-pad">by </span>
                        												<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=juggornot">juggornot</a></span>
                        											</span>
                        										</div>
                        									</div>
                        								</div>
                        							</div>
                        							<div class="qa-message-content">
                        								Integer vitae arcu vitae ligula Cras vestibulum suscipit odio ac dapibus. In hac habitasse platea dictumst. Cras pulvinar erat et nunc fringilla, quis molestie
                        							</div>
                        					</div></div>
                        					
                        				
                        					
                        					
                        					
                        					
                        					
                        </div>
                      
                      
                      
                      </div>
                      <div class="tab-pane fade" id="mapa">...</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lado Derecho -->
            <div class="col-sm-4  col-md-4 col-lg-4">
            <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" >
                <div id="counter" style="height: 77px; overflow: hidden;"></div>
                <div class="desc">
                    <div>Días</div>
                    <div>Horas</div>
                    <div>Minutos</div>
                    
                  </div>
            </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 contenedorInformacion">
                    <span id="personasApuntadas" class="orange">44 Personas se apuntaron</span>
                    <span id="personasVieron" class="orange">122 Vieron este evento</span>
                 </div>
                 <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2>SAME CATEGORY</h2>

                    <div class="row "> 
                        <div class="col-lg-5 col-md-5 " style="padding-top: 10px;">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4>Thumbnail Headline</h4>
                                    
                                    <p><a href="" class="label label-default" rel="tooltip" title="Evento">Visitar</a></p>
                                </div>
                                <img class="fotoMismaCategoria" src="http://placehold.it/100x100"/>
                            </div> 
                        </div>
                       <div class="col-lg-5 col-md-5" style="padding-top: 10px;">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4>Thumbnail Headline</h4>
                                    
                                    <p><a href="" class="label label-default" rel="tooltip" title="Evento">Visitar</a></p>
                                </div>
                                <img class="fotoMismaCategoria" src="http://placehold.it/100x100"/>
                            </div> 
                        </div>
                        <div class="col-lg-5 col-md-5 " style="padding-top: 10px;">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4>Thumbnail Headline</h4>
                                    
                                    <p><a href="" class="label label-default" rel="tooltip" title="Evento">Visitar</a></p>
                                </div>
                                <img class="fotoMismaCategoria" src="http://placehold.it/100x100"/>
                            </div> 
                        </div>
                        <div class="col-lg-5 col-md-5 " style="padding-top: 10px;">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4>Thumbnail Headline</h4>
                                    
                                    <p><a href="" class="label label-default" rel="tooltip" title="Evento">Visitar</a></p>
                                </div>
                                <img class="fotoMismaCategoria" src="http://placehold.it/100x100"/>
                            </div> 
                        </div>
                    </div>
                    
            
                 </div>
            </div>
        </div>
    </div>
    <!-- Termina Evento -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/countdown.js"></script>
    <script>
    $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
    $("#counter").countdown({
        stepTime: 60,
        format: 'dd:hh:mm',
        startTime: "49:32:55",
        digitImages: 6,
        digitWidth: 53,
        digitHeight: 77,
        timerEnd: function() { alert('end!!'); }
       
      });
});
    
    </script>
</body>
</html>