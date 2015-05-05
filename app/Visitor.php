<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'visitors';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_ip', 'user_agent'];


	public function addVisitor() {
		$visitor = new Visitor;
		$visitor->user_ip = $_SERVER['REMOTE_ADDR'];
		$visitor->user_agent = $_SERVER['HTTP_USER_AGENT'];
		return $visitor->save();
	}

	public function listLastVisitors() {
		return Visitor::orderBy('id', 'desc')->take(10)->get();
	}
}
