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
        <link href="js/datetimepicker/datetimepicker.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/timepicker.css" rel="stylesheet"/>
    <style>
    /*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);
/*form styles*/
#msform {
	width: 600px;
	margin: 50px auto;
	text-align: center;
	position: relative;
    font-family: montserrat, arial, verdana;

}
#msform fieldset.step {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea,#msform select {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: black;
	text-transform: uppercase;
	font-size: 9px;
	width: 25%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
    border: 1px solid #ddd;
}
/*progressbar connectors*/
#progressbar li:after {
    border: 1px solid #ddd;    
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}.gllpMap	{ width: 400px; height: 250px; }
.bootstrap-timepicker-widget table td a i:before {
content: "\e113";
}
    </style>
</head>
<body>
    <?php include('cabecera.php') ?>
    <!-- multistep form -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
        <form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Basic Information</li>
		<li>More Information</li>
		<li>Multimedia</li>
        <li>Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset class="step">
		<h2 class="fs-title">Create your event</h2>
		<h3 class="fs-subtitle">BASIC INFORMATION</h3>
		<input type="text" name="titulo" placeholder="Event Name" required=""/>
		<textarea name="descripcionCorta" placeholder="Descripcion Corta (50 Caracteres maximo)" required=""></textarea>
        <select name="categoria" >
            <?php foreach($categorias = devuelveCategorias() as $categoria){
                echo "<option value='".$categoria['idcategoria']."'>".$categoria['categoria']."</option>";
            }
            ?>
        </select>
        <label for="imagenPrincipal" style="font-weight: normal; font-size: 13px; color: #666;">Foto Principal (Recomendado mas ancho que alto)</label>
        <input type="file" name="imagenPrincipal" placeholder="" />
        Location: <input type="text" id="us2-address" data-toggle="tooltip" data-placement="left" title="Introduce una ubicacion o Arrastra el marcador" autocomplete="yes" />
        <div id="mapa1" style="width: 400px; height: 250px;">
        
        </div>
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset class="step">
		<h2 class="fs-title">MORE INFORMATION</h2>
        
  
        <div id="datetimepicker1" class="input-append date">
            <input data-format="dd/MM/yyyy hh:mm:ss" type="text" name="fechaInicio" id="fechaInicio" placeholder="Fecha/Hora Inicio" style="width: 90%;" rel="tooltip" title="Selecciona la Fecha y Hora de inicio." />
            <span class="add-on">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        <div id="datetimepicker2" class="input-append date">
            <input data-format="dd/MM/yyyy hh:mm:ss" type="text" name="fechaFin" id="fechaFin" placeholder="Fecha/Hora Fin" style="width: 90%;" rel="tooltip" title="Selecciona la Fecha y Hora de finalizacion." />
            <span class="add-on">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
        
        
        
        <div class="input-group" style="margin-bottom: 10px;" >
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="precio">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="precio" class="form-control input-number" placeholder="Precio (€)" min="0" style="margin-bottom: 0;" max="500" />
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="precio">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
       	<textarea name="descripcionLarga" placeholder="Descripcion Larga (500 Caracteres maximo)" required=""></textarea>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
    	<fieldset class="step">
        <script>var contadorY=1;var contadorF=1;</script>
		<h2 class="fs-title">Multimedia Youtube ( MAX 5 )</h2>
		<div class="contenedorYoutube" style="border-bottom: 1px solid #ddd;margin-bottom:10px;">
            <input type="button"  class="action-button" value="Add" id="btnAddYou" onclick="addYou()"/>
            <input type="button"  class="action-button" value="Remove" id="btnRmvYou" onclick="rmvYou()"/>
            <input type="hidden" value="1" name="numeroVideos" id="numeroVideos"/>
            <input type="text" name="videos[0]" placeholder="Introduce la URL a Youtube"/>
        </div>
        <h2 class="fs-title">Multimedia Images ( MAX 5 )</h2>
        <div class="contenedorFotos" style="border-bottom: 1px solid #ddd;margin-bottom:10px;">
            <input type="button"  class="action-button" value="Add" id="btnAddFot" onclick="addFot()"/>
            <input type="button"  class="action-button" value="Remove" id="btnRmvFot" onclick="rmvFot()"/>
            <input type="hidden" value="1" name="numeroFotos" id="numeroFotos"/>
            <input type="file" name="fotos[0]" placeholder="" />
        </div>
        <h2 class="fs-title">Social</h2>
        <input type="text" name="twitter" placeholder="Enter Twitter if have. Example : @user1" />
        <input type="text" name="facebook" placeholder="Enter Facebook if have. Example : user1" />
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset class="step">
		<h2 class="fs-title">Details</h2>
            Permitir comentarios    
            <input type="checkbox" name="comentarios" checked=""/>
            Permitir valoraciones    
            <input type="checkbox" name="comentarios" checked=""/>
            Permitir mostrar email    
            <input type="checkbox" name="comentarios" checked=""/>         
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="Submit" />
	</fieldset>
    
</form>
        </div>
    </div>
</div>
    <div class="container">

        <hr/>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="js/latLnPicker.js"></script>
    <script src="js/locationpicker.js"></script>
    <script src="js/timepicker.js"></script>   
    <script src="js/datetimepicker/datetimepicker.js"></script>  
    
    <script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
function addYou(){
    if(contadorY!=5){
        $('.contenedorYoutube').append("<input type=\'text\' name=\'videos["+contadorY+"]\' placeholder=\'Introduce la URL a Youtube\'>");
        contadorY++;
        numeroVideos.value=contadorY;
    }
    
}
function rmvYou(){
    if(contadorY!=0){
        contadorY--;
        var objeto = $(".contenedorYoutube").find("input[name='videos["+contadorY+"]']");
        objeto.remove();
        numeroVideos.value=contadorY;
    }
}
function addFot(){
    if(contadorF!=5){
        $('.contenedorFotos').append("<input type=\'file\' name=\'fotos["+contadorF+"]\'/>");
        contadorF++;
        numeroVideos.value=contadorF;
    }
    
}
function rmvFot(){
    if(contadorF!=0){
        contadorF--;
        var objeto = $(".contenedorFotos").find("input[name='fotos["+contadorF+"]']");
        objeto.remove();
        numeroVideos.value=contadorF;
    }
}
$(document).ready(function(){
    $('#mapa1').locationpicker({
        location: {latitude: 40.46366700000001, longitude: -3.7492200000000366},	
    	radius: 100,
    	inputBinding: {
            locationNameInput: $('#us2-address')
        },
        enableAutocomplete:true
    });
    $("[rel='tooltip']").tooltip();
    $("#datetimepicker1").datetimepicker();
    $("#datetimepicker2").datetimepicker()
})

    </script>
</body>
</html>