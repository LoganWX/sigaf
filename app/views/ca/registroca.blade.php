<!doctype html>
<html lang="es">
	
	<head>
		<meta charset="utf-8"/>
		<!-- -------------------------------- Estilos CSS -------------------------------- -->
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">
		<link rel="stylesheet" type="text/css" href="../css/estilosnav.css">
		<link rel="stylesheet" type="text/css" href="../css/component.css"/>

		<!---------------------------------- Para combobox multiple new ---------------------->
		<link rel="stylesheet" href="../css/bootstrap-3.1.1.min.css" type="text/css">
		<link rel="stylesheet" href="../css/bootstrap-multiselect.css" type="text/css">
		<link rel="stylesheet" href="../css/prettify.css" type="text/css">
		<!---------------------------------------------------------------------------------------->

		<!---------------------------------- Checkboxlist -------------------------------------->
		
		<link rel="stylesheet" href="../css/jqx.base.css" type="text/css" />
   		<link rel="stylesheet" href="../css/jqx.orange.css" type="text/css" />

   		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
        
		
								<script type="text/javascript">
						            $(document).ready(function () {
						                var source = [
						                    "Affogato",
						                    "Americano",
						                    "Bicerin",
						                    "Breve",
						                    "Café Bombón",
						                    "Café au lait",
						                    "Caffé Corretto",
						                    "Café Crema",
						                    "Caffé Latte",
						                    "Caffé macchiato",
						                    "Café mélange",
						                    "Coffee milk",
						                    "Cafe mocha",
						                    "Cappuccino",
						                    "Carajillo",
						                    "Cortado",
						                    "Cuban espresso",
						                    "Espresso",
						                    "Eiskaffee",
						                    "The Flat White",
						                    "Frappuccino",
						                    "Galao",
						                    "Greek frappé coffee",
						                    "Iced Coffee﻿",
						                    "Indian filter coffee",
						                    "Instant coffee",
						                    "Irish coffee",
						                    "Liqueur coffee"
								        ];

						                // Create a jqxListBox
						                $(".listbox").jqxListBox({width: 450, source: source, checkboxes: true, height: 530, theme: 'orange'});
						                // Check several items.
						                $(".listbox").jqxListBox('checkIndex', 0);
						                $(".listbox").jqxListBox('checkIndex', 1);
						                $(".listbox").jqxListBox('checkIndex', 2);
						                $(".listbox").jqxListBox('checkIndex', 5);

						                $(".listbox").on('checkChange', function (event) {
						                    var args = event.args;
						                    if (args.checked) {
						                        $("#Events").text("Checked: " + args.label);
						                    }
						                    else {
						                        $("#Events").text("Unchecked: " + args.label);
						                    }

						                    var items = $(".listbox").jqxListBox('getCheckedItems');
						                    var checkedItems = "";
						                    $.each(items, function (index) {
						                        if (index < items.length - 1) {
						                            checkedItems += this.label + ", ";
						                        }
						                        else checkedItems += this.label;
						                    });
						                    $("#CheckedItems").text(checkedItems);
						                });
						            });
						        </script>	

					    
		<!------------------------------------------------------------------------------------->
	        


		<!--AQUI VA HORA Y FECHA-->
		<script src="../js/tiempoactual.js"></script>
		<script>$(function(){startWatch(); return false;});</script>
		<!-- Script tiempo -->

		<!---------------------------------- Para combo multiple scripts ---------------------------->
		<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap-multiselect.js"></script>
		<script type="text/javascript" src="../js/prettify.js"></script>

							<div class="containerMultiple">
								<script type="text/javascript">
							    	$(document).ready(function() {
							        window.prettyPrint() && prettyPrint();

				                    $('.example41').multiselect({
							        	includeSelectAllOption: true
							        });

							    });
								</script>
			            	</div>


		<!-------------------------------------------------------------------------------------------->
       

		<!-------------------------------------- MODAL CATALOGO PERIODOS -------------------------------------->
	<div class="md-modal md-effect-11" id="btnCatalogoPeriodo"> 
		<form  action="<?=URL::to('planestudio/registraretapa'); ?>" class="md-content" method="post">
			<h3>Agregar Etapa</h3>
			<div class="tblCatalogos">
				<table class="tblCatPlan">
					<tr>
						<th></th>
						<th></th>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtNombrePeriodo" size=1 /></td>
					</tr>
					<tr>
						<td>Fecha inicio:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtFechaIniPeriodo" name='txtFechaIniPeriodo' size=1 /></td>
					</tr>
					<tr>
						<td>Fecha fin:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtFechaFinPeriodo" name='txtFechaFinPeriodo' size=1 /></td>
					</tr>
				</table>
			</div>
			<div class="CatBotones">
				<input type="submit" class="estilo_button2" value="Guardar"/>
				<input type="button" value="Salir" class="md-close" />
			</div>
		</form>
	</div>

	<!-------------------------------------- MODAL CATALOGO GRUPOS -------------------------------------->
	<div class="md-modal md-effect-11" id="btnCatalogoGrupo"> 
		<form  action="<?=URL::to('planestudio/registraretapa'); ?>" class="md-content" method="post">
			<h3>Agregar Etapa</h3>
			<div class="tblCatalogos">
				<table class="tblCatPlan">
					<tr>
						<th></th>
						<th></th>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtNombreGpo" size=1 /></td>
					</tr>
					<tr>
						<td>Semestre:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtSemestreGpo" name='txtSemestreGpo' size=1 /></td>
					</tr>
					<tr>
						<td>Turno:</td>
						<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtTurnoGpo" name='txtTurnoGpo' size=1 /></td>
					</tr>
				</table>
			</div>
			<div class="CatBotones">
				<input type="submit" class="estilo_button2" value="Guardar"/>
				<input type="button" value="Salir" class="md-close" />
			</div>
		</form>
	</div>

	<!------------------------------------------------------------------------------>

	</head>

	<body>
		
		<header>
			<figure id="logo"><img src="../imagenes/logo.png" alt=""></figure>
			<div id="titulo">
				<h1>SISTEMA DE GESTIÓN ACADÉMICA (SIGAF)</h1>
				<h3>Facultad de Contaduría y Administración</h3>
			</div>
			<figure id="cimarron"><img src="../imagenes/cimarron.png" alt=""></figure>
		</header>
 		@include('includes.menu')
		<div id="indicadores">
			<div id="usuariofecha">
				<div id="usuario" class="texto_body">
					Usuario: {{Auth::user()->username}}
				</div>
				<div id="fecha" class="texto_body">
					Fecha Actualizada
				</div>
			</div>
			<div id="ubicacion" class="texto_body">
				Carga Académica: Registro
			</div>
			<div id="loginmanual">
				<div id="login" class="texto_body">
					<img src="../imagenes/login.png" alt="">&nbsp;<a href="<?=URL::to('login/logout');?>"style="text-decoration:none; color:#004000;">Logout</a>
				</div>
				<div id="manual" class="texto_body">
					<img src="../imagenes/manual.png" alt="">&nbsp;Manual
				</div>
			</div>
		</div>

		<section>

			<div class="contenedorCa">
				<div class="nombre_coordinacion">Lic. en Informática</div>

			<!--------------------- CONTROLES SUPERIOR DERECHO ------------------>

				<div id="periodoCa">
					<div id="btnNuevaCaDiv"><input type="button" style="width:200px;" class="estilo_button2" value="Nueva CA" name="btnNuevaCa" id="btnNuevaCa" /></div>

					<div id="divPeriodo">Periódo: <input type="text" class="con_estilo" name="txtPeriodoCa" id="txtPeriodoCa"/>
					<input type="button" class="md-trigger" value="+" data-modal="btnCatalogoPeriodo" id="btnCatalogoPeriodo" /></div>

				</div>

			<!----------------------- LISTA PLAN VIGENTE ------------------------>

				<div id="planVigente">
					<fieldset id="planV"><legend>Plan vigente</legend>
						<div class="nombrePlan">Plan 2014-1</div>

							<div class="listasCa">
								
					            <div class="listbox"></div>
				           
				        	</div>
							
						<div class="controlesListasCa">
							Grupos:
							
					            
					              	<select name="example" multiple="multiple" class="example41">
						                <option value="cheese" selected>Cheese</option>
						                <option value="tomatoes" selected>Tomatoes</option>
						                <option value="mozarella" selected>Mozzarella</option>
						                <option value="mushrooms" selected>Mushrooms</option>
						                <option value="pepperoni" selected>Pepperoni</option>
						                <option value="onions" selected>Onions</option>
					                </select>
					             

							<input type="button" class="md-trigger" value="+" data-modal="btnCatalogoGrupo" id="btnCatalogoGrupo" />
							<input type="button" style="width:180px" value="Guardar Carga"  class="estilo_button2" name="btnGuardarCa" id="btnGuardarCa" />
						</div>

					</fieldset>	
				</div>	

			<!----------------------- BOTON PLAN ANTERIOR ------------------------>

				<div id="btnPlanA">
					<input type="button" style="width:200px;" class="estilo_button2" value="PlanAnterior" name="planAntCa" id="planAntCa" />

				</div>


			<!----------------------- LISTA PLAN ANTERIOR ------------------------>

				<div id="planAnterior"		>
					<fieldset id="planA"><legend>Plan anterior </legend>
						<div class="nombrePlan">Plan 2009-2</div>
						<div class="listasCa">
							 <div class="listbox"></div>           
						</div>

						<div class="controlesListasCa">
							Grupos:
							
					            
					              	<select name="example" multiple="multiple" class="example41">
						                <option value="cheese" selected>Cheese</option>
						                <option value="tomatoes" selected>Tomatoes</option>
						                <option value="mozarella" selected>Mozzarella</option>
						                <option value="mushrooms" selected>Mushrooms</option>
						                <option value="pepperoni" selected>Pepperoni</option>
						                <option value="onions" selected>Onions</option>
					                </select>
					             

							<input type="button" class="md-trigger" value="+" data-modal="btnCatalogoGrupo" id="btnCatalogoGrupo" />
							<input type="button" style="width:180px" value="Guardar Carga"  class="estilo_button2" name="btnGuardarCa" id="btnGuardarCa" />
						</div>

					</fieldset>

				</div>


			</div>
				
		</section>
		<script type="text/javascript" src="../js/jqxcore.js"></script>
	    <script type="text/javascript" src="../js/jqxbuttons.js"></script>
	    <script type="text/javascript" src="../js/jqxscrollbar.js"></script>
	    <script type="text/javascript" src="../js/jqxlistbox.js"></script>
	    <script type="text/javascript" src="../js/jqxcheckbox.js"></script>


		<footer></footer>
	</body>



</html>