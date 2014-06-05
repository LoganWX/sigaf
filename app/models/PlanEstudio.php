<?php

class PlanEstudio extends Eloquent
{
	protected $table = "planestudiodesc";
	protected $primaryKey = "plan";
	public $timestamps = false;

	public function unidades()
	{
		return $this->hasMany('UnidadAprendizaje','plan');
	}
}