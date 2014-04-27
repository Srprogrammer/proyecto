<!DOCTYPE html>
<?php require_once('../includes/functions.php'); ?>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>

    <link href="../css/bootstrap.css" rel="stylesheet"/>
    
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
    <style>.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}</style>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
	
				<div class="tabs">
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1>Panel de Administracion</h1>
						<table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Descripcion</th>
                                    <th>Numero</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Numero de Eventos</td>
                                    <td><?php echo numeroDeEventos(); ?></td>
                                </tr>
                                <tr>
                                    <td>Numero de Usuarios</td>
                                    <td><?php echo numeroDeUsuarios(); ?></td>
                                </tr>
                                <tr>
                                    <td>Numero de Comentarios</td>
                                    <td><?php echo numeroDeComentarios(); ?></td>
                                </tr>
                                <tr>
                                    <td>Numero de Categorias</td>
                                    <td><?php echo numeroDeCategorias(); ?></td>
                                </tr>
                            </tbody>
                        </table>
							</div>

						</article>
					</div>
					<div id="tab-2" class="tab">
						<article>
							<div class="text-section">
							
							 <div class="row">
                                <div class="panel panel-primary filterable">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Eventos</h3>
                                        <div class="pull-right">
                                            <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                        </div>
                                    </div>
                                    <table class="table table-condensed table-hover" id="tablaEventos">
                                    <thead>
                                        <tr class="filters">
                                            <th><input type="text" class="form-control" placeholder="#" disabled="" /></th>
                                            <th><input type="text" class="form-control" placeholder="Nombre" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Fecha Inicio" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Fecha Fin" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Hora Inicio" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Hora Fin" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Descripcion" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Localizacion" disabled=""/></th>
                                            <th><input type="text" class="form-control" placeholder="Precio" disabled=""/></th>
                                        </tr>
        
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            
                                            foreach($eventos = informacionEventos() as $evento){
                                                echo "<tr>";
                                                echo "<td>".$evento['ideventos']."</td>";
                                                echo "<td>".$evento['nombrevento']."</td>";
                                                echo "<td>".$evento['fechainicio']."</td>";
                                                echo "<td>".$evento['fechafin']."</td>";
                                                echo "<td>".$evento['horainicio']."</td>";
                                                echo "<td>".$evento['horafin']."</td>";
                                                echo "<td>".$evento['descripcion']."</td>";
                                                echo "<td>".$evento['localizacion']."</td>";
                                                echo "<td>".$evento['precio']."</td>";
                                                echo "</tr>";
                                            }
                                            
                                        
                                        ?>
                                           
                                    
                                    </tbody>
                                    </table>
                                    </div>
                                    </div>
                            </div>
						</article>
					</div>
                    	<div id="tab-3" class="tab">
						<article>
							<div class="text-section">
							
                        <div class="row">
                                <div class="panel panel-primary filterable">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Usuarios</h3>
                                        <div class="pull-right">
                                            <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                        </div>
                                    </div>
						<table class="table table-condensed table-hover">
                            <thead>
                                    <tr class="filters">
                                            <th><input type="text" class="form-control" placeholder="Email" disabled="" /></th>
                                            <th><input type="text" class="form-control" placeholder="Nombre Usuario" disabled="" /></th>
                                             <th>Edit</th>
                                           <th>Delete</th>
                                        </tr>
                            </thead>
                            <tbody>
                                        <?php 
                                            
                                            foreach($usuarios = informacionUsuarios() as $usuario){
                                                echo "<tr>";
                                                echo "<td>".$usuario['email']."</td>";
                                                echo "<td>".$usuario['nombreusuario']."</td>";
                                                 echo "<td><p><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' data-placement='top' rel='tooltip'><span class='glyphicon glyphicon-pencil'></span></button></p></td>
                                                 <td><p><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' data-placement='top' rel='tooltip'><span class='glyphicon glyphicon-trash'></span></button></p></td>";
 
                                                echo "</tr>";
                                            }
                                            
                                        
                                        ?>
                            </tbody>
                        </table>
							</div>
                            </div></div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<aside id="sidebar">
			<strong class="logo"><a href="#">lg</a></strong>
			<ul class="tabset buttons">
				<li class="active">
					<a href="#tab-1" class="ico1"><span>Dashboard</span><em></em></a>
					<span class="tooltip"><span>Dashboard</span></span>
				</li>
				<li>
					<a href="#tab-2" class="ico2"><span>Eventos</span><em></em></a>
					<span class="tooltip"><span>Eventos</span></span>
				</li>
				<li>
					<a href="#tab-3" class="ico3"><span>Usuarios</span><em></em></a>
					<span class="tooltip"><span>Usuarios</span></span>
				</li>
			
			</ul>
			<span class="shadow"></span>
		</aside>
	</div>
    
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
     <script src="../js/bootstrap.js"></script>
     <script type="text/javascript" src="tablesorter.js"></script> 
     <script>
     /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
 $(function () {
            $("[rel='tooltip']").tooltip();
        });
     </script>
</body>
</html>