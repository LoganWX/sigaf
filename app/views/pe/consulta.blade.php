<!DOCTYPE html>
<html lang="es">
	<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/estiloPrincipal.css">
<link rel="stylesheet" type="text/css" href="../css/estilosnav.css">
<link rel="stylesheet" type="text/css" href="../css/estilodrag.css">
<link rel="stylesheet" type="text/css" href="../css/component.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.dragsort-0.5.1.min.js"></script>
<!-- funcion de Impresion -->
<script language="Javascript"> 
function imprSelec(nombre) 
{ 
var articulo = document.getElementById(nombre); 
var ventimp = window.open(' ','cuadros','no','no','50','no','no','no','no','no','no','no','no','500'); 
ventimp.document.write(articulo.innerHTML ); 
ventimp.document.close(); 
ventimp.print( ); 
ventimp.close(); 
} 
</script> 
<!-- Fin funcion de impresion-->

<div> 

<!--SCRIPT PARA FECHA Y HORA-->

<script type="text/javascript">
		$(function(){
			$('.eliminarBloquecito').on('click',function()
			{
				$(this).parent().parent().remove();	
			});
		});
	</script>
<!---------------------------------------------------------------------------------------->
<title>Plan de estudios</title>
</head>
<body>
<header>
<figure id="logo">
<img src="../imagenes/logo.png" alt="">
</figure>
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
			Usuario: Iván Avila
		</div>
		<div id="fecha" class="texto_body">
			<script>document.write(day);document.write(myweekday+" de "+month+ " de " +myyear+",");</script>
			<label id="reloj"></label>
		</div>
	</div>
	<div id="ubicacion" class="texto_body">
		Plan de estudios: Consulta, modificación y eliminación
	</div>
	<div id="loginmanual">
		<div id="login" class="texto_body">
			<img src="../imagenes/login.png" alt="">&nbsp;login y usuarios
		</div>
		<div id="manual" class="texto_body">
			<img src="../imagenes/manual.png" alt="">&nbsp;manual y ayuda
		</div>
	</div>
</div>
<section>

	
	
<div id="Consultas">
	<fieldset id="consultaPlan">
		<legend>Consultar por:</legend>
		<div id="consultax">
			<div id="consul_noPlan">
				<label>No.Plan: </label>
				<input class="estilo_text" type="text" name="noPlan" id="noPlan" list="datalist_noPlan" size=1 onkeypress="ValidaSoloNumeros()"/>
				<datalist id="datalist_noPlan">
				<option value="2013-2">
				<option value="2013-4">
				<option value="2014-1">
				</datalist>
			</div>
			<div id="consul_nivel">
				<label>Nivel: </label>
				<select class="con_estilo" name="nivel" size=1>
					<option value="LIC">LIC.</option>
					<option value="POSTGRADO">POSTGRADO</option>
					<option value="TECNICO">TECNICO</option>
				</select>
			</div>
			<div id="consul_carrera">
				<label>Carrera: </label>
				<select class="con_estilo" name="carrera" size=1>
					<option value="TC">TRONCO COMUN</option>
					<option value="ADMON">ADMON.</option>
					<option value="CONTAB">CONTAB.</option>
					<option value="INFORMATICA">INFORMATICA</option>
					<option value="NEGOCIOS">NEGOCIOS</option>
				</select>
			</div>
			<div id="consul_clave">
				<label>Clave: </label>
				<input class="estilo_text" type="text" name="clave" id="clave" list="datalist_clave" size=1 onkeypress="ValidaSoloNumeros()">
				<datalist id="datalist_clave">
				<option value="10450">
				<option value="13230">
				<option value="10384">
				</datalist>
			</div>
			<div id="consul_materia">
				<label>Materia: </label>
				<input type="text" name="materia" id="materiaCon" list="datalist_materia" size="1"/>
				<datalist id="datalist_materia">
				<option value="PROGRAMACION ORIENTADA A OBJETOS">
				<option value="PROGRAMACION AVANZADA">
				<option value="INFORMATICA">
				</datalist>
			</div>
		</div>
		<div id="consultay">
			<div id="consul_etapa">
				<label>Etapa:</label>
				<select class="con_estilo" name="etapa" size=1>
					<option value="BASICA">BASICA</option>
					<option value="INTERMEDIA">DISCIPLINARIA</option>
					<option value="TERMINAL">TERMINAL</option>
				</select>
			</div>
			<div id="consul_tipo">
				<label>Tipo: </label>
				<select class="con_estilo" name="tipo" size=1>
					<option value="OBLIGATORIA">OBLIGATORIA</option>
					<option value="OPTATIVA">OPTATIVA</option>
				</select>
			</div>
			<div id="consul_serie">
				<label>Seriación: </label>
				<select class="con_estilo" name="seriacion" size=1>
					<option value="SINSERIACION">SIN SERIACION</option>
					<option value="OBLIGADA">OBLIGATORIA</option>

					<option value="SUGERIDA">SUGERIDA</option>
				</select>
			</div>
			<div id="consul_coor">
				<label>Coord: </label>
				<input type="text" id="coordinacion" style="width:150px" size=1 list="datalist_coord">
				<datalist id="datalist_coord">
				<option value="INFORMATICA">
				<option value="MATEMATICAS">
				<option value="CIENCIAS COMPUTACIONALES">
				<option value="SISTEMAS DE INFORMACION">
				<option value="PROGRAMACION">
				</datalist>
			</div>

		</div>
		
	</fieldset>

	<div id="consultaboton">
		<input class="estilo_button2" type="button" value="Buscar">
	</div>
</div>
<div id="consultaetapas">
	<div id="etapabasica">
		Etapa básica
	</div>
	<div id="etapadisciplinaria">
		Etapa disciplinaria
	</div>
	<div id="etapaterminal">
		Etapa terminal
	</div>
</div>
<script type="text/javascript">
        $("ul:first").dragsort();
    </script>
<div class="md-modal md-effect-11" id="modal-11">
	<div class="md-content">
		<h3>Modificar unidad de aprendizaje</h3>
		<div id="tablita2contenedor">
			<table cellpadding="4" id="tablita2">
			<tr>
				<td width="95">
					Clave:
				</td>
				<td width="301">
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Materia:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Nivel:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Carrera:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Etapa:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Tipo:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					Serie:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					TipoSer.:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td>
					 Coord.:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="25">
				</td>
			</tr>
			<tr>
				<td size="10">
					HC:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;">
				</td>
			</tr>
			<tr>
				<td size="10">
					HL:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;">
				</td>
			</tr>
			<tr>
				<td size="10">
					HT:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;">
				</td>
			</tr>
			<tr>
				<td>
					Cred.:
				</td>
				<td>
					<input type="text" style="height: 25px; text-transform:uppercase;" size="5">
				</tr>
				</table>
			</div>
			<input type="button" style="font-size:21px" value="Actualizar" class="estilo_button2">
			<input type="button" class="md-close" value="Salir">
		</div>
	</div>
	<!--<button class="md-trigger" data-modal="modal-11">+</button>-->
	<div class="md-overlay">
	</div>
	<div id="cuadros">
		<ul id="list3">
			<li>
			<div style="font-size:9px; position:relative;">
				POL. Y LEG. EN INFORMATICA C3 CR6<input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				MERCADOTECNIA C2 T2 CR6 <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				INGENIERIA DE SOFTWARE C3 L2 CR8 <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				ADMON. DE FUNCION INFO. II C2 T1 CR5 <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				AUDITORIA INFORMATICA I C2 T2 CR6 <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				DESARROLLO DE EMPRENDEDORES C1 T3 CR5 <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
			<li>
			<div style="font-size:9px; position:relative;">
				OPTATIVA <input type="image" class="eliminarBloquecito" src="../imagenes/deleteTachita.png" id="elimImg">
			</div>
			</li>
		</ul>
		<ul id="list2">
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				RECURSOS HUMANOS C4 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ESTRUCTURA DE DATOS II C3 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				SISTEMAS OPERATIVOS C3 L2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				MATEMATICAS FINANCIERAS C2 T2 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				METODOS CUANTITATIVOS I C2 T2 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				OPTATIVA			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				OPTATIVA			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				BASE DATOS I C3 L2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				PROGRAMACION ORIENTADA A OBJ. C2 L2 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ANALISIS DE SISTEMAS C3 T1 CR7			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ANALISIS FINANCIERO C3 T2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				REDES I C4 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				OPTATIVA			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				BASE DE DATOS II C3 L2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ADMINISTRACION DE PROYECTOS C2 T1 CR5			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				DISENO DE SISTEMAS C3 T1 CR7			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ADMON. DE LA FUNCION INFO. I C2 T1 CR5			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				REDES II C1 L4 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				OPTATIVA			</div>
			</li>
		</ul>
		<!-- <input style="margin-left:40px; margin-top:5px" class="eliminarBloquecito" type="button" value="-">-->
		<ul id="list1">
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
			  LENGUAJES ALGORITMICOS C2 T2 CR6 
			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				INTRODUCCION A LA INFORMATICA, C3 L2 CR8
			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				DESARROLLO DE HAB. DEL PENS. C1 T2 CR4			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				INTRODUCCION A LOS NEGOCIOS C3 T1 CR7			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				MATEMATICAS DISCRETAS C3 T2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				PROGRAMACION I C3 L2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				PROGRAMACION II C3 L2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ARQUITECTURA DE COMPUTADORAS I C2 T2 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				PROBABILIDAD Y ESTADISTICA C3 T2 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				CONTABILIDAD I C3 T3 CR9			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				PROCESO ADMINISTRATIVO C3 T1 CR7			</div>
			</li>
			<li>
			<div style="font-size:9px;" class="md-trigger" data-modal="modal-11">
				OPTATIVA			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				MARCOS LEGALES C4 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ESTRUCTURA DE DATOS C2 L2 CR6			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				SISTEMAS DE INFORMACION C4 CR8			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				CONTABILIDAD II C2 T2 CR6
			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				METODOLOGIA DE LA INVESTIGACION C2 T1 CR5
			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				CALCULO DIF. E INTEGRAL C3 T2 CR8
			</div>
			</li>
			<li>
			<div style="font-size:9px" class="md-trigger" data-modal="modal-11">
				ECONOMIA C3 T2 CR8
			</div>
			</li>
		</ul>
	</div>
	<script type="text/javascript">
        $("#list1, #list2, #list3").dragsort({ dragSelector: "div", dragBetween: true, dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });
        function saveOrder() {
            var data = $("#list1 li").map(function() { return $(this).children().html(); }).get();
            $("input[name=list1SortOrder]").val(data.join("|"));
        };
    </script>
	<div style="clear:both;">
	</div>
	<br>
	<div id="totalcreditos">
		 Materias obligatorias: Materias optativas: Total de creditos:
	</div>
    <div id="imprimir">
    
    </div>
	<div id="actualizaimprime">
		<input style="font-size:18px" class="estilo_button2" type="button" value="Actualizar">
		&nbsp;&nbsp;<a href="javascript:imprSelec('imprimir')"  target="_parent"><input style="font-size:19px" class="estilo_button2" type="button" value="Imprimir"></a></div>


	</div>
	</section>
	<footer></footer>
</div>
</body>
<!--SCRIPT PARA VENTANA MODAL-->
<script type="text/javascript">
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
<script src="../js/classie.js"></script>
<script src="../js/modalEffects.js"></script>
<script src="../js/css-filters-polyfill.js"></script>
<script type="text/javascript" src="../js/manipulacion.js"></script>
</html>