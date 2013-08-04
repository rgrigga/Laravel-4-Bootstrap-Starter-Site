<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name or HTTP host that matches a
| given environment, then we will automatically detect it for you.
|
*/

// http://programmers.stackexchange.com/questions/40373/so-singletons-are-bad-then-what

//insert image button
//redactor

$env = $app->detectEnvironment(array(

//this is case-sensitive
	'advantage' => array('domain'=>'advantage.gristech.com'),
	// 'sewcute' => array('*/sewcute','sewcute.dev'),
	'megacorp' => array('domain' => 'megacorp.dev'),
		'megacorp' => array('domain' => 'myapp.dev'),


	// 'advantage' => array('prefix'=>'advantage'),
	'local' => array('Grisbuntu'),
	// 'megacorp' => 
	// 'dev' => array('Grisbuntu'),
	
	'buckeye' => array('domain' => 'buckeyemower.com'),
	'gristech' => array('domain' => 'myapp.gristech.com'),



));


/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/

$app->bindInstallPaths(require __DIR__.'/paths.php');

/*
|--------------------------------------------------------------------------
| Load The Application
|--------------------------------------------------------------------------
|
| Here we will load the Illuminate application. We'll keep this is in a
| separate location so we can isolate the creation of an application
| from the actual running of the application with a given request.
|
*/

$framework = $app['path.base'].'/vendor/laravel/framework/src';

require $framework.'/Illuminate/Foundation/start.php';

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
