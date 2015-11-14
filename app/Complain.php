<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model {

	//
	public function getComplainsPoints()
	{

		$complains = \DB::table('complains')->select('id','log', 'lat')->get();
        return $complains;
	}
}
