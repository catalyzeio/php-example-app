<?php namespace App\Http\Controllers;

use App\Visitor;
use Log;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Logging Example
		Log::info('This is some useful information.');

		Log::warning('Something could be going wrong.');

		Log::error('Something is really going wrong.');

		Log::debug('This is debig information');

		Log::notice('This is a notice.');

		Log::critical('Something has gone critical within the application!');

		Log::alert('this is an alert.');

		return view('welcome');
	}

	/**
	 * Show the database connection demo to the user.
	 *
	 * @return Response
	 */
	public function database()
	{
		// Add new Visitor to the db
		$visitor = new Visitor();
		$visitor->addVisitor();

		// Lets get the recent Visitors
		$visitors = $visitor->listLastVisitors();
		$data = array();
		$data['visitors'] = $visitors;

		return view('database', $data);
	}

}
