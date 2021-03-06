<?php namespace App;

use Illuminate\Database\Eloquent\Model;

//use Carbon\Carbon;
//use Jenssegers\Date\Date;

class Footage extends Model {

	protected $table = 'footages';
	protected $primaryKey = 'id' ;

	public function mediaType()
	{
		return $this->hasOne('type');
	}
	public function getDates()
	{
		return array('created_at', 'updated_at');
	}

//	public function setDatetAttribute($value)
//	{
//	$this->attributes['date'] =	Date::createFromFormat('Y/m/d', $value);
//	$this->attributes['date'] =	Carbon::createFromFormat('Y/m/d', $value)->toDateTimeString();
//	}
	public static $rules = array(
			'typeid'=> 'required',
			'name' => 'required',
			'place' => 'required',
			'country' => 'required',
			'lat' => 'required',
			'lng' => 'required',
	);
}
