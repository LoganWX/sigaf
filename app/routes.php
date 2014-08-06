<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
// RUTA PRINCIPAL
Route::get('/', function()
{
	return View::make('login');
});

Route::get('main',array('before'=>'auth',function()
{
	return View::make('main.index');
}));

// RUTAS DEL LOGIN
Route::controller('login','UserLoginController');


Route::controller('planestudio','PlanEstudioController');
Route::controller('cargaacademica','CargaAcademicaController');

Route::get('pruebas',function(){

	//$uaprendizaje = UnidadAprendizaje::where('uaprendizaje','=','11236')->where('plan','=','20092')->first();

	//$plan = PlanEstudio::find('20101')->nivelD;
	//$periodosPrograma = Periodo::select('periodo','periodo_pedu','descripcion')->where('fin','>=',date_format(new DateTime("now"),'Y-m-d'))->get();
	$semestre = 3;
	$grupos = DB::table('grupos')
					->where('grupo','LIKE',"_".$semestre."_")
					->get();

	$plan = PlanEstudio::select('plan')->orderBy('plan','desc')->take(1)->get();
		$UAS = UnidadAprendizaje::select('uaprendizaje','descripcionmat')
				->where('plan','=',$plan[0]->plan)
				->orderBy('uaprendizaje','asc')
				->get();
	$queries = DB::getQueryLog();
	$last_query = end($queries);

	//$u->lastQuery = $last_query;

	return $last_query;
});