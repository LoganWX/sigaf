﻿<!doctype html>
<html lang="es">
	
	<head>
		<meta charset="utf-8"/>
		<!-- -------------------------------- Estilos CSS -------------------------------- -->
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">
		<link rel="stylesheet" type="text/css" href="../css/estilosnav.css">
		<link rel="stylesheet" type="text/css" href="../css/component.css"/>

		   
        <!-- Estilos del dataTable-->
		<link rel="stylesheet" type="text/css" href="../css/demo_table.css">
        <!--Aqui termina estilo del dataTable-->
        
		<!-- ------------------------------ Scripts Generales -------------------------------->
		<script type="text/javascript" src="../js/jquery.js"></script>

		<!--AQUI VA HORA Y FECHA-->
		<script src="../js/tiempoactual.js"></script>
		<script>$(function(){startWatch(); return false;});</script>
		<!-- Script tiempo -->
		
		<!-- Creación de Ventanas Modales -->
		<script src="../js/ventanamodal.js"></script>

       <!-- Script dataTable -->
		<script type="text/javascript" src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#tblUA').dataTable();
			} );
		</script><!-- Termina script dataTable -->
	</head>

	<body>
		

		<div class="md-modal md-effect-11" id="plan"> 
			<form  action="<?=URL::to('planestudio/registrarplan'); ?>" class="md-content" method="post">
				<h3>Agregar Plan</h3>

				<div class="tblCatalogos">
					<table class="tblCatPlan">
						<tr>
							<th></th>
							<th></th>
						</tr>

						<tr>		

							<td>No. Plan:</td>
							<td><input style="width: 100px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatPlan" size=1 />&nbsp;-&nbsp;<input style="width: 80px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatPlan2" size=1 /></td>

						</tr>

						<tr>
							<td>Descripción:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcion" name="planestudio_descripcion" size=1 /></td>
						</tr>

						<tr>
							<td>Créditos Prácticas:</td>
							<td><input style="width: 100px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="number" id="txtCatCredPract"size=1 /></td>
						</tr>

						<tr>
							<td>Fecha Inicio:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtCatFechaIni" name='planestudio_feciniciovig' size=1 /></td>
						</tr>

						<tr>
							<td>Fecha Final:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="date" id="txtCatFechaFin" name="planestudio_fecfinvig" size=1 /></td>
						</tr>

						<tr>
							<td>Carreras:</td>
							<td><select class="con_estilo" style="width: 200px;" name="txtCatCarreraPlan" type="text" id="txtCatCarreraPlan" size=1 />
									<option value="INFORMATICA">INFORMATICA</option>
								</select>
							</td>
						</tr>


					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>

			</form>
		</div>
		


		<div class="md-modal md-effect-11" id="carrera"> 
			<form  action="<?=URL::to('planestudio/registrarprogramaeducativo'); ?>" class="md-content" method="post">
				<h3>Agregar Carrera</h3>
				

				<div class="tblCatalogos">
					<table class="tblCatPlan">

							<td>Nombre:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcionCarrera" size=1 /></td>
						</tr>

						<tr>		
							<td>Status:</td>
							<td><input style="width: 20px; height: 20px; border-radius: 5px; border-color: #DBDBEA;" type="checkbox" id="txtCatCodigoCarrera" size=1 />Activado</td>
						</tr>


						<tr>
							<td>Nivel:</td>
							<td>
							<select class="con_estilo" style="width: 200px;" name="txtCatNivel" type="text" id="txtCatNivel" size=1 />
								<option value="LICENCIATURA">LICENCIATURA</option>
							</select>
							</td>
						</tr>

						<tr>
							<td>Especialidad:</td>
							<td>
							<select class="con_estilo" style="width: 200px;" name="txtCatEspecialidad" type="text" id="txtCatEspecialidad" size=1 />
								<option value="MTIC">MTIC</option>
							</select>
							</td>
							
						</tr>

						<tr>
							<td>Tipo Programa:</td>
							<td>
							<select class="con_estilo" style="width: 200px;" name="txtCatTipoProgr" type="text" id="txtCatTipoProgr" size=1 />
								<option value="SEMESTRAL">SEMESTRAL</option>
							</select>
							</td>	
						</tr>

						<tr>
							<td>Coordinador:</td>
							<td><select class="con_estilo" style="width: 200px;" name="txtCatCoordinadorCarrera" type="text" id="txtCatCoordinadorCarrera" size=1 />
									<option value="COORDINADOR INFORMATICA">COORDINADOR INFORMATICA</option>
								</select>
							</td>
						</tr>

					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>

			</form>
		</div>

		<div class="md-modal md-effect-11" id="etapa"> 
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
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcionEtapa" size=1 /></td>

						</tr>


					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>

			</form>
		</div>

		<div class="md-modal md-effect-11" id="seriacion"> 
			<form  action="<?=URL::to('planestudio/registrarseriacion'); ?>" class="md-content" method="post">
				<h3>Agregar Seriación</h3>

				<div class="tblCatalogos">
					<table class="tblCatPlan">
						<tr>
							<th></th>
							<th></th>
						</tr>

						<tr>

							<td>Nombre:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcionSeriacion" size=1 /></td>

						</tr>

					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>

			</form>
		</div>

		<div class="md-modal md-effect-11" id="tipo"> 
			<form  action="<?=URL::to('planestudio/registrarcaracter'); ?>" class="md-content" method="post">
				<h3>Agregar Tipo</h3>

				<div class="tblCatalogos">
					<table class="tblCatPlan">
						<tr>
							<th></th>
							<th></th>
						</tr>

						<tr>

							<td>Nombre:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcionTipo" size=1 /></td>

						</tr>

					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>


			</form>
		</div>


		<div class="md-modal md-effect-11" id="coordina"> 
			<form  action="<?=URL::to('planestudio/registrarprogramaeducativo'); ?>" class="md-content" method="post">
				<h3>Agregar Coordinación</h3>
				<div class="lblCatalogosDependencias"></div>

				<div class="tblCatalogos">
					<table class="tblCatPlan">
						<tr>
							<th></th>
							<th></th>
						</tr>

						<tr>
							<td>Nombre:</td>
							<td><input style="width: 200px; height: 30px; border-radius: 5px; border-color: #DBDBEA;" type="text" id="txtCatDescripcionCoordinacion" size=1 /></td>
						</tr>

						<tr>
							<td>Programa Educativo:</td> 
							<td>
							<select class="con_estilo" style="width: 200px;" name="txtCatDescripcionCoordinacion" type="text" id="txtCatDescripcionCoordinacion" size=1 />
								<option value="CONTABILIDAD">LIC. EN CONTADURIA</option>
							</select>
							</td>
							
						</tr>
					</table>
				</div>
					<div class="CatBotones">
						<input type="submit" class="estilo_button2" value="Guardar"/>
						<input type="button" value="Salir" class="md-close" />
					</div>

			</form>
		</div>
		<div class="md-overlay"></div>



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
				Plan de estudios: Registro
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

			<form id="formularioPlanEstudio" method="post" action="<?=URL::to('planestudio/registrarua');  ?>">



			
				<div id="primerBloque">
					<!-- ----------------------------------- NO PLAN DIV ----------------------------------- -->
					<div id="noPlanDiv">
						<label>No.Plan:</label>
						<select class="con_estilo" type="text" name="noPlan" id="noPlan">
						@foreach ($codigosPE as $codigo )
						<option value="{{$codigo['codigo']}}">{{$codigo['formato']}}</option>
						@endforeach
						</select>
						<!-- TABLA MODAL NRO. PLAN-->
						<input class="md-trigger" data-modal="plan" type="button" value="+"></a>
						<!--             -->

					</div>
					

					<!-- ----------------------------------- CAMPUS  DIV ----------------------------------- -->

					<!--<div id="campusDiv">
						<label>Campus: </label>
						<label style="color:#ECA22E">{{Auth::user()->campus}}</label>
					</div>-->

					<!-- ----------------------------------- UNIDAD  DIV ----------------------------------- -->

					<div id="unidadDiv">
						<label>Unidad: </label>
						<label style="color:#ECA22E">{{Auth::user()->unidad}}</label>
						<!-- TABLA MODAL CAMPUS-->
						<!--<input class="md-trigger" data-modal="campus" type="button" value="+">-->
						<!--             -->
					</div>
					


					<!-- ----------------------------------- UNIDAD ACADEMICA DIV ----------------------------------- -->
					<div id="unidadAcademicaDiv">
						<label>U.Acad:</label>
						<label style="color:#ECA22E">{{Auth::user()->ua}}</label>
							
						<!-- TABLA MODAL UNIDAD-->
						<!--<input class="md-trigger" data-modal="unidad" type="button" value="+">-->
						<!--             -->
					</div>

					

					<!-- ----------------------------------- CARRERA  DIV ----------------------------------- -->

						<div id="carreraDiv">
							<label>Carrera:</label>
							<div id="p">
								<select name="example-optgroup" multiple="multiple" size="5">
								<optgroup label="Group One">
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
								</optgroup>
								<optgroup label="Group Two">
									<option value="option4">Option 4</option>
									<option value="option5">Option 5</option>
									<option value="option6">Option 6</option>
									<option value="option7">Option 7</option>
								</optgroup>
								</select>
							</div>
								<!--<select style="font-weight:normal; width:143px;" class="con_estilo" id="control_3" name="carreras" multiple="carrera" size="5">
									@foreach ($programasEducativos as $carrera)
									<option value="{{$carrera->programaedu}}">{{$carrera->descripcion}}</option>
									@endforeach
								</select>-->


								<!-- TABLA MODAL CARRERA-->
								<input class="md-trigger" data-modal="carrera" type="button" value="+">
								<!--             -->
						</div>

						
					<!-- ----------------------------------- NIVEL ----------------------------------- -->
					<div id="nivelDiv">
						<label>Nivel: </label>
						<label style="color:#ECA22E; padding-left:5px;">LICENCIATURA</label>
						
					</div>


					<!-- ----------------------------------- CLAVE  DIV ----------------------------------- -->
				</div>
				
				<fieldset id="unidadaprendizaje">
					
					<div id="segundoBloque">
						
						<div id="claveDiv">
							 &nbsp;<label>Clave: </label>
							<input class="estilo_text" type="text" name="clave1F" id="clave1F" size="1" >
							<br>
							<input type="checkbox" id="generarClave" name="generarClave" value="Generar">Generar clave
						</div>

					<!-- ----------------------------------- MATERIA  DIV ----------------------------------- -->
						
						<div id="materiaDiv">
							<label>Materia: </label>
							<input style="width: 375px; height: 25px; border-radius: 5px; border-color: #DBDBEA; text-transform:uppercase" type="text" name="materia" id="materia" size=1/>
						
						</div>

			
					<!-- ----------------------------------- ETAPA  DIV ----------------------------------- -->

						<div id="etapaDiv">
							<label>Etapa: </label>

							<select style="width:143px;" class="con_estilo" name="etapaF" id="etapaF" size=1 type="text">
								@foreach ($etapas as $etapa)
								<option value="{{$etapa->etapa}}">{{$etapa->descripcion}}</option>
								@endforeach
							</select>
							<!-- TABLA MODAL ETAPA-->
							<input class="md-trigger" data-modal="etapa" type="button" value="+">
							<!--             -->
						</div>

					<!-- ----------------------------------- TIPO MATERIA  DIV ----------------------------------- -->

						<div id="tipoDiv">
							<label>Tipo: </label>
							<select style="width:143px;" class="con_estilo" name="tipoF" id="tipoF" size=1 type="text">
								@foreach ($tiposCaracter as $caracter)
								<option value="{{$caracter->caracter}}">{{$caracter->descripcion}}</option>
								@endforeach
							</select>
							<!-- TABLA MODAL NIVEL-->
							<input class="md-trigger" data-modal="tipo" type="button" value="+">
							<!--             -->
						</div>
					</div>


					<!-- ----------------------------------- SEMESTRE  DIV ----------------------------------- -->

					<div id="tercerBloque">
						<div id="semestreDiv">
							<label>Sem:</label>
							<input class="estilo_numeric" type="number" name="semestr" id="semestre" min="1" max="9" onkeypress="ValidaSoloNumeros()">
						</div>


						<fieldset id="group_seriacion">
							<legend>Seriación</legend>

					<!-- ----------------------------------- TIPO SERIACION  DIV ----------------------------------- -->

							<div id="seriacionDivTipo">
								<label>Tipo Seriación: </label>
									<select style="width: 143px" class="con_estilo" name="serie" id="serie" size=1 type="text">
										@foreach ($seriaciones as $seriacion)
										<option value="{{$seriacion->reqseriacion}}">{{$seriacion->descripcion}}</option>
										@endforeach
											
									</select>
									<!-- TABLA MODAL NIVEL-->
									<input class="md-trigger" data-modal="seriacion" type="button" value="+">
									<!--             -->
							</div>	

					<!-- ----------------------------------- CLAVE SERIACION  DIV ----------------------------------- -->
											
							<div id="claveSerDiv">
								<label>Clave: </label>
								<input class="estilo_text" type="text" name="clave2F" id="clave2F" list="datalist_clave2F" size=1 onkeypress="ValidaSoloNumeros()">
								<datalist id="datalist_clave2F">
								@foreach ($unidadesAprendizaje as $materia)
								<option value="{{$materia->uaprendizaje}}">
								@endforeach
								</datalist>
							</div>
					<!-- ----------------------------------- MATERIA SERIACION  DIV ----------------------------------- -->

							<div id="seriacionDivMateria">
								<input class="con_estilo" style="height: 25px; width: 280px" text-transform:"uppercase" type="text" name="materiaSeriada" id="materiaSeriada" size="1" disabled/>	
							</div>

					
						</fieldset>

					<!-- ----------------------------------- COORDINACION  DIV ----------------------------------- -->


							<div id="coordDiv">
							<label>Coord: </label><input style="width:143px; text-transform:uppercase" class="coordina" type="text" name="coord" id="coord" size="1"  list="datalist_coord">
							<datalist id="datalist_coord">
								@foreach ($coordinaciones as $coordinacion)
								<option value="{{$coordinacion->descripcion}}" data="{{$coordinacion->coordinaciona}}">
								@endforeach
							</datalist>
							<!-- TABLA MODAL COORDINACIÓN-->
							<input class="md-trigger" data-modal="coordina" type="button" value="+">
							<!--             -->
						</div>

					</div>

					<!-- ----------------------------------- HORAS  DIV ----------------------------------- -->
		
					<div id="cuartoBloque">
						<div id="hcDiv">
							<label>HC: </label>
							<input class="estilo_numeric" type="number" name="hc" id="hc" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<div id="hlDiv">
							<label>HL: </label>
							<input class="estilo_numeric" type="number" name="hl" id="hl" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<div id="htDiv">
							<label>HT: </label>
							<input class="estilo_numeric" type="number" name="ht" id="ht" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<br>
						<br>
						<div id="heDiv">
							<label>HE: </label>
							<input class="estilo_numeric" type="number" name="he" id="he" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<div id="hpcDiv">
							<label>HPC: </label>
							<input class="estilo_numeric" type="number" name="hpc" id="hpc" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<div id="hclDiv">
							<label>HCL: </label>
							<input class="estilo_numeric" type="number" name="hcl" id="hcl" min="1" max="20" onkeypress="ValidaSoloNumeros()">
						</div>
						<br>
						<br>

					<!-- ----------------------------------- CREDITOS  DIV ----------------------------------- -->
						
						<div id="creditosDiv">
							<label>Créditos: </label><input class="estilo_numeric" type="number" name="creditosF" id="creditosF" min="1" onkeypress="ValidaSoloNumeros()">
						</div>

					<!-- ----------------------------------- OBSERVACIONES  DIV ----------------------------------- -->
						
						<div id="observacionesDiv">
							<label>Observaciones:</label><br>
							<textarea rows=3 cols="60" style=" border-radius:5px; border-color:#DBDBEA; text-transform:uppercase; resize:none" id="observaciones" placeholder="Observaciones"></textarea>
						</div>


					<!---------------------------------------------------------------------------------------------------->


						<div id="botones">
							<input type="submit" style="width:120px"class="estilo_button2" type="button" value="Guardar" name="guarda" id="guardar">
						</div>
					</div>
				</fieldset>
			</form>

			
					<!---------------------------------------------------------------------------------------------------->


			<div id="GridPlanEstudio">
				<div id="planTerminado"><input style="width:20px; height:20px;" type="checkbox" name="planTerminado" value="Generar"><label style="font-size:18px;">Plan de estudios terminado</label>
			</div>		
				<br>

<div id="demo">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="tblUA">
		<thead>
			<tr>
				<th>CLAVE</th>
				<th>MATERIA</th>
				<th>CARRERA</th>
				<th>ETAPA</th>
				<th>CLAVE_SERIACION</th>
				<th>TIPO</th>
				<th>COORDINACIÓN</th>
				<th>HC</th>
				<th>HL</th>
				<th>HT</th>
				<th>CRÉDITOS</th>
				<th>ELIMINAR</th>
			</tr>
		</thead>
		<tbody>
			<tr class="gradeX">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">2130</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeC">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">1249</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">9303</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">9309</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">3900</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">3907</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">3909</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeA">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">9023</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			
			
			<tr class="gradeX">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">3009</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeC">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">9023</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeC">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">2934</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
			<tr class="gradeU">
				<td>000453</td>
				<td>Programación Orientada a Objetos</td>
				<td>Informática</td>
				<td class="center">Básica</td>
				<td class="tooltip" title="Materia seriada: Programacion avanzada">8390</td> 
				<td class="center">Optativa</td>
				<td class="center">Ramon Bracho</td>
				<td class="center">20</td>
				<td class="center">50</td>
				<td class="center">15</td>
				<td class="center">50</td>
				<td><input type="button" value="-" class="clsEliminarFila"></td>
			</tr>
		</tbody>
	</table>
</div>
</div>
		</section>
		<footer></footer>
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="../js/classie.js"></script>
		<script src="../js/modalEffects.js"></script>

	</body>
<!----------------------------------------------------------->
<!--SCRIPT PARA VENTANA MODAL-->

<script type="text/javascript" src="../js/insertarua.js"></script>
<script>
			$(document).ready( function() {
				// Default options
				$("#control_3").multiSelect();

				$("#clave1F").on("focusout",function(){
					var idua = $(this).val();
					$.post("<?php echo URL::to('planestudio/obtenermateria'); ?>",{uaprendizaje:idua},function(materia)
						{
							$("#materia").val(materia);
						});
				});

				$("#clave2F").on("focusout",function(){
					var idua = $(this).val();
					$.post("<?php echo URL::to('planestudio/obtenermateria'); ?>",{uaprendizaje:idua},function(materia)
						{
							$("#materiaSeriada").val(materia);
						});
				});

				$("#generarClave").on("change",function(){
					if($(this).is(":checked"))
					{
						$.post("<?php echo URL::to('planestudio/obtenerclave'); ?>",{envio:true},function(clave)
						{
							alert(clave);
						});
					}
				});

			});
		</script>

<!----------------------------------------------------------->

</html>