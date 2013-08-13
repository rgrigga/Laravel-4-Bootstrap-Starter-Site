<?php
// die("ROUTES");
// $foo="bar"; //fails here: scope does not apply within routes.

// https://github.com/laravel/laravel/issues/2164 - laravel multisite discussion
// http://www.slideshare.net/go_oh/singletons-in-php-why-they-are-bad-and-how-you-can-eliminate-them-from-your-applications
//http://stackoverflow.com/questions/7770728/group-vs-role-any-real-difference
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

// Use this funciton for debugging
// Route::any('/',function(){
//     die('bam');
//     return View::make('site.pages.debug');
// });

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');
Route::model('company','Company');

// Calling Route::model here means "user->username" should
// work.

//Route::resource('companies', 'CompaniesController');
Route::resource('tweets', 'TweetsController');

// This is interesting, but needs further exploration
// View::composer('*.home',function($view){
View::composer('*.megacorp.*',function($view){
    $view->nest('searchbar','site.partials.search');
    $view->nest('social','site.partials.social');
});


// Route::model('company','Company',function(){
//     // return Company::where('brand',"LIKE",'gristech')->first();
// });
// View::share('company', $company);

// ??? Could not get this to work, nor do I want to?
// Nervous about misuse of globals

// App::bind('company', function($app)
// {
//     return new Company;
// });

// $env=App::environment();
    
    // Route::get('foo', array('as' => 'bar/foo'),function(){
    //     return Route::currentRouteName();
    // });

    // Route::get('dev',function(){
    //     return View::make('site.pages.dev');
    //     // make new site

    // Route::get('bar/foo',function(){
    //     return Route::currentRouteName();

    //     // compile tags from all of these sources, then search the other resources
    //     // for those tags.
    //     // log this path and every action.
    //     // search for keywords in content & analyze them

    //     // http://tools.seobook.com/general/keyword-density/
    // });

///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
////// Redactor Blog Upload (redactor currently de-implemented)
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////

    // Route::post('redactorUpload', function(){
    //     $file = Input::file('file');
    //     $fileName = $file->getClientOriginalName();

    //     $file->move(public_path().'/img', $fileName);
    //     return Response::json(array('filelink' => '/img/' . $fileName));
    // });

// Redactor Blog Upload (incomplete)
// Deimplementing redactor at this time, It's a great tool, but i don't to be dependent on it
///////////////////////////////////////////////////////////////////////

//here is a demo for the current WYSIWYG editor:
    Route::get('bootstrap-wysiwyg',function(){
        return Redirect::to('/assets/js/bootstrap-wysiwyg/index.html');
    });

/**
    
    advantage

*/

// Route::group(array(''),)
// Route::get('/advantage',function(){

///////////////////////////////////////
///////ADMIN ROUTES
///////////////////////////////////////

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

    # Comment Management
    Route::get('comments/{comment}/edit', 'AdminCommentsController@getEdit')
        ->where('comment', '[0-9]+');
    Route::post('comments/{comment}/edit', 'AdminCommentsController@postEdit')
        ->where('comment', '[0-9]+');
    Route::get('comments/{comment}/delete', 'AdminCommentsController@getDelete')
        ->where('comment', '[0-9]+');
    Route::post('comments/{comment}/delete', 'AdminCommentsController@postDelete')
        ->where('comment', '[0-9]+');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{post}/show', 'AdminBlogsController@getShow')
        ->where('post', '[0-9]+');
    Route::get('blogs/{post}/edit', 'AdminBlogsController@getEdit')
        ->where('post', '[0-9]+');
    Route::post('blogs/{post}/edit', 'AdminBlogsController@postEdit')
        ->where('post', '[0-9]+');
    Route::get('blogs/{post}/delete', 'AdminBlogsController@getDelete')
        ->where('post', '[0-9]+');
    Route::post('blogs/{post}/delete', 'AdminBlogsController@postDelete')
        ->where('post', '[0-9]+');

    Route::get('blogs/tag/{tag}', 'AdminBlogsController@getIndex');
    // ???
        // ->where('post', '[0-9]+');

    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow')
        ->where('user', '[0-9]+');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit')
        ->where('user', '[0-9]+');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit')
        ->where('user', '[0-9]+');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete')
        ->where('user', '[0-9]+');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete')
        ->where('user', '[0-9]+');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow')
        ->where('role', '[0-9]+');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit')
        ->where('role', '[0-9]+');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit')
        ->where('role', '[0-9]+');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete')
        ->where('role', '[0-9]+');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete')
        ->where('role', '[0-9]+');
    Route::controller('roles', 'AdminRolesController');

    //     # Company Management
    // Route::get('companies/create','AdminCompaniesController@getCreate');
    // Route::get('companies/{company}/show', 'AdminCompaniesController@show')
    //     ->where('company', '[0-9]+');
    // Route::get('companies/{company}/edit', 'AdminCompaniesController@edit')
    //     ->where('company', '[0-9]+');
    // Route::post('companies/{company}/edit', 'AdminCompaniesController@postEdit')
    //     ->where('company', '[0-9]+');
    // Route::get('companies/{company}/delete', 'AdminCompaniesController@getDelete')
    //     ->where('company', '[0-9]+');
    // Route::post('companies/{company}/delete', 'AdminCompaniesController@destroy')
    //     ->where('company', '[0-9]+');
    // Route::controller('companies', 'AdminCompaniesController');

    Route::controller('companies', 'AdminCompaniesController');

    # Admin Dashboard
    // Route::controller('{page?}', 'AdminDashboardController');

    Route::controller('/', 'AdminBlogsController');

});

// Route::filter('company',function($route,$request,$value){
// Route::filter('company',function($route,$request){
//     if($request){
        
//         // die(var_dump($value));
        
//         $company=Company::where('brand','like','gristech')->first();

//         if($company){
//             App::bind('company',$company);
//             // return Redirect::to('company/'.$sub);
//         }

//         else return "Company $sub does not exist!";
//     }
// });

// Route::group(array('domain'=>'{sub}.gristech.com'),function(){
//     Route::get('/',array('before'=>'company'),function ($sub){
//         // $param='company';
//         return Route::controller('/','CompanyController@getIndex',compact($company));
//     });
// });


/**
    
    MYAPP.DEV

*/
Route::group(array('domain' => 'myapp.devfoo'),function(){

    // Route::get('/', function(){
    //    return "Howdy!";
    // });

    Route::group(array('prefix' => 'foo'), function()
    {

        Route::group(array('prefix' => 'bar'),function(){
            return "bar";
        });
        
        Route::get('/', function(){
            return "Foo!!";
        });
    });


// die("MYAPP");

});

// http://codehappy.daylerees.com/ioc-container
//////////////////////////////////////////////////////////////////
///////////////// IOC CONTAINER //////////////////////////////////
//////////////////////////////////////////////////////////////////
    
    // Route::any('mytest',function(){
    //     return "myapp.dev mytest $foo";
    // });

Route::group(array('domain' => 'myapp.dev'),function()
{
	 App::bind('company', function($app)
		{
		    return Company::where('brand','like','gristech')->first();
		});
		
		$company=App::make('company');

    // App::singleton('mycompany', function($app)
    // {
    //     return Company::where('brand','like','advantage')->first();
    // });

    // $company=App::make('mycompany');

    // Javascript?
    // capture hash tag route.
    // if it's on the page, go there.
    // if not, send get request to server.
    // $value = App::make('company','gristech');

//////////////////////////////////////////////////////////////////////
//////////////////////// ROUTE MODEL /////////////////////////////////
//////////////////////////////////////////////////////////////////////
    // Route::model('company','Company',function(){
    //     $company=  Company::where('brand',"LIKE",'gristech')->first();
    //     $company=App::make('company');
    //     // die(var_dump($company);
    //     return $company;
    // });

    // http://laravel.com/docs/ioc#basic-usage

    // App::singleton('company', function()
    // {
    //     return new Company::where('brand',"LIKE",'company')->first();
    // });
    // App::instance('foo', $foo);

    // $company=Company::where('brand','like','gristech')->first();

    // Route::get('register', function()
    // {
    //     return View::make('user.register');
    // });

    // Route::post('register', function()
    // {
    //     $rules = array(...);

    //     $validator = Validator::make(Input::all(), $rules);

    //     if ($validator->fails())
    //     {
    //         return Redirect::to('register')->withErrors($validator);
    //     }
    // });

    Route::get('cookietest',function(){
        $cookie = Cookie::make('name', 'value');
        $content="Hello.</br>";
        return Response::make($content)->withCookie($cookie);

    });

    // $data=array(compact('company'));
	// ->with('warning',$message);
    // View::composer('home', function($view)
    //     {
    //         $view->with('company', $company);
    //     });

    Route::get('mytest',function(){
        // die("BAM");
        // $success="You did it!";
       return View::make('site.gristech.mytest')
            ->with('success','You did it!');
            // ->withInput(Input::except('password'))
            
            // ->with( 'success', $success )
            // ->with( 'error', $error )
            // ->with( 'warning', $warning )
            // ->with( 'info', $info )
            ;
    });

    Route::get('parallax',function(){
        // die("BAM");
        // $success="You did it!";
       return View::make('site.gristech.parallax')
            ->with('success','You did it!');
            // ->withInput(Input::except('password'))
    //         ->with( 'success', 'yes!' )
    //         ->with( 'error', 'uh-oh' )
    //         ->with( 'warning', 'warning' )
    //         ->with( 'info', 'info' );
    });
    
    Route::get('mytest/{brand?}',function($brand){
        //http://gristech.com/mytest/1
        // var_dump($company);
        $company=  Company::where('brand','LIKE','gristech')->first();
        // return "Your company is ".$company->brand;
        // $company=
        // $brand = strtolower($company->brand);
        // $company
        return View::make('site.'.$brand.'.home')
         ->with(compact('company'));
    });


    Route::get('datatest',function(){
        $company=Company::where('brand','like','gristech')->first();
        return View::make('site.gristech.home')
        ->with(compact('company'));
    });

    // Route::get('admin','AdminDashboardController@getIndex');
    // Route::get('/{tag}','BlogController@getIndex');
    
    // Route::get('/', 'BlogController@getIndex');

// *KEEP    
// This is very interesting
// Regarding User Authorization
    Route::get('/foo',function(){
        return $user = Sentry::getUser();
        View::share('user', $user);

        return View::make('site.user.index');
    });

    Route::get('company','CompaniesController@getIndex');
    Route::get('company/mylist','CompanyController@mylist');
    Route::get('company/{name}','CompanyController@getIndex')
        ->where('name', '[a-zA-Z_]+');
    Route::get('company/{id}','CompanyController@show')
        ->where('id', '[0-9]+');

// idea: display "featured" set of posts?

    Route::get('login',function(){
        return Redirect::to('user/login');
    });

    Route::controller('admin','AdminBlogsController');

    Route::get('bootstrap',function(){
        return View::make('site.pages.bootstrap');
    });

    Route::post('search', 'BlogController@postSearch');
    Route::get('search', 'BlogController@search');
    // Route::get('/search', 'BlogController@search');
    Route::get('search/{tag}','BlogController@search');
    // Route::post('search/{tag}','BlogController@postSearch');

    //each domain has its own method available in CompanyController.
    Route::get('/{tag}','BlogController@getIndex');
    Route::get('/', 'BlogController@getIndex');


// Route::get('/', function(){
        // echo "HI THERE";
        // $company=Company::where('brand','like','gristech')->first();
        // die(var_dump($company));
        
    // });
    // Route::get('/', 'CompanyController@gristech');

});
/**

    BUCKEYE

*/
// ********************************************************************************
// ****************************----------******************************************
// *************************-----*******----***************************************
// ************************-****************-**************************************
// ***********************--**BUCKEYE********-*************************************
// **********************-     ***************-************************************
// *********************-      ******MOWER****-************************************
// *********************-      ***************-************************************
// *********************-      **************-*************************************
// **********************-----*************---*************************************
// ************************-----********-----**************************************
// **************************--------------****************************************
// ********************************************************************************
Route::group(array('domain' => 'buckeyemower.com'),function(){
    Route::any('mytest',function(){
        return "buckeyemower mytest";
    });
    // die("routes/buckeye");

// random notes:
// http://www.jsticker.com/
// http://programmers.stackexchange.com/questions/160947/should-session-variables-be-avoided

//////////////////////////////////////////////////////////////////
///////////////// IOC CONTAINER //////////////////////////////////
//////////////////////////////////////////////////////////////////
    // http://codebright.daylerees.com/architecture (l4)
    // http://codehappy.daylerees.com/ioc-container (l3)
    App::bind('company', function($app)
    {
        return Company::where('brand','like','buckeye')->first();
    });
    
    $company=App::make('company');

//////////////////////////////////////////////////////////////////////
//////////////////////// ROUTE MODEL /////////////////////////////////
//////////////////////////////////////////////////////////////////////
    // Route::model('company','Company',function(){
    //     $company=  Company::where('brand',"LIKE",'buckeye')->first();
    //     return $company;
    // });


    Route::filter('buckeye', function()
    {
        if (! Entrust::can('buckeye') ) // Checks the current user
        {
            die("buckeye filter");
            $message="Sorry. You are not authorized to view that.  Would you like to log in?";

            return Redirect::to('user/login')
                ->with('error',$message);
                // ->with('howdy',$message);
        }
        // die("BAM");
        // Route::controller('admin', 'AdminDashboardController');
    });

    Route::group(array('before' => 'buckeye'), function(){

        Route::get('login',function(){
            // die("BAM");
            // $company=  Company::where('brand',"LIKE",'buckeye')->first();
            return Redirect::to('user/login')

                // ->withInput(Input::except('password'))
                ->with( 'info', 'Please login.  Thank You.' );
        });

        Route::get('protected',function(){
            return "To see this, you must be a memeber of the buckeye group.";
            die(var_dump($company));
        });

        Route::get('fail',function(){
            return "This failed as expected!";
            die(var_dump($company));
        });

    });

    // Route::get('admin','AdminDashboardController@getIndex');
    // Route::get('admin',array('before'=>'buckeye'));

    # User RESTful Routes (Login, Logout, Register, etc)
    Route::controller('user', 'UserController');
    Route::get('blog/{postSlug}', 'BlogController@getView');
    // Route::get('blog', 'BlogController@buckeyeIndex');

    // Here are several Routing techniques:
    // 
    // Controller:
    Route::controller('admin','AdminBlogsController');
	
	// pass data from url
	// Route::get('/{tag}', 'BlogController@getIndex');
	// getIndex receives $tag    

	// closure:
	Route::get('login',function(){
        return Redirect::to('user/login');
    });
    
	// group:
    Route::group(array('before' => 'buckeye'), function(){

        Route::get('protected',function(){
            return "To see this, you must be a memeber of the buckeye group.";
            // die(var_dump($company));
        });

        Route::get('tags', 'BlogController@getIndex');
        Route::post('tags', 'BlogController@getIndex');

        Route::post('search', 'BlogController@postSearch');
        Route::get('search', 'BlogController@search');
        // Route::get('/search', 'BlogController@search');
        Route::get('search/{tag}','BlogController@search');

        Route::get('tags/{tag}', 'BlogController@getIndex');
        Route::get('/{tag}','CompanyController@buckeye');

        // Route::get('/','BlogController@getIndex',array('public',array(1,2,3)));

    });

    // View::make('buckeye');
    
    // Use a custom method.
    Route::get('/', 'BlogController@getIndex');

    // Only users with roles that have the 'buckeye' permission will
    // be able to access any admin/post route.
    // Route::when('admin', 'buckeye'); 

    //Route::get('/', 'CompanyController@getIndex');
});
/**

    THE END OF BUCKEYE

*/

// From here down, myapp routes:

// Route::group(array('domain' => '{sub}.myapp.dev'),function()
// {

//     Route::get('/', function(){
//         $name='buckeye';

//         return View::make('site/'.$name.'/index',array(
// //return View::make('site/'.$name.'/home',array(
//             'brand'=>'Buckeye Mower',
//             'description'=>'Mobile Mower and Small Engine Repair',
//             'menus'=>array('rates','map')
//             ));
//     });

// });
// Route::get('foo',array('as' => 'company/buckeye', 'uses' => 'CompanyController@getIndex'));
// 


    // App::bind('company', function($app)
    // {
    //     return Company::where('brand','like','gristech')->first();
    // });

    // $company=App::make('company');



    // Route::get('login',function(){
    // // die("BAM");
    // // $company=Company::where('brand','like','buckeye')->first();


    // // $company=App::make('company');
    // return Redirect::to('user/login')
    //     ->with(compact('company'))
    //     ->with( 'info', "Welcome to the jungle." );
    //     // ->with( 'notice', Lang::get('user/user.user_account_created') );

    // });

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{

//http://stackoverflow.com/questions/7770728/group-vs-role-any-real-difference
    // Route::get('admin','AdminDashboardController@getIndex');


    # Comment Management
    Route::get('comments/{comment}/edit', 'AdminCommentsController@getEdit')
        ->where('comment', '[0-9]+');
    Route::post('comments/{comment}/edit', 'AdminCommentsController@postEdit')
        ->where('comment', '[0-9]+');
    Route::get('comments/{comment}/delete', 'AdminCommentsController@getDelete')
        ->where('comment', '[0-9]+');
    Route::post('comments/{comment}/delete', 'AdminCommentsController@postDelete')
        ->where('comment', '[0-9]+');
    Route::controller('comments', 'AdminCommentsController');

    # Blog Management
    Route::get('blogs/{post}/show', 'AdminBlogsController@getShow')
        ->where('post', '[0-9]+');
    Route::get('blogs/{post}/edit', 'AdminBlogsController@getEdit')
        ->where('post', '[0-9]+');
    Route::post('blogs/{post}/edit', 'AdminBlogsController@postEdit')
        ->where('post', '[0-9]+');
    Route::get('blogs/{post}/delete', 'AdminBlogsController@getDelete')
        ->where('post', '[0-9]+');
    Route::post('blogs/{post}/delete', 'AdminBlogsController@postDelete')
        ->where('post', '[0-9]+');

    Route::get('blogs/tag/{tag}', 'AdminBlogsController@getIndex');
        // ->where('post', '[0-9]+');

    Route::controller('blogs', 'AdminBlogsController');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow')
        ->where('user', '[0-9]+');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit')
        ->where('user', '[0-9]+');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit')
        ->where('user', '[0-9]+');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete')
        ->where('user', '[0-9]+');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete')
        ->where('user', '[0-9]+');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow')
        ->where('role', '[0-9]+');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit')
        ->where('role', '[0-9]+');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit')
        ->where('role', '[0-9]+');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete')
        ->where('role', '[0-9]+');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete')
        ->where('role', '[0-9]+');
    Route::controller('roles', 'AdminRolesController');

        # Company Management
    Route::get('companies/{company}/show', 'AdminCompaniesController@getShow')
        ->where('company', '[0-9]+');
    Route::get('companies/{company}/edit', 'AdminCompaniesController@getEdit')
        ->where('company', '[0-9]+');
    Route::post('companies/{company}/edit', 'AdminCompaniesController@postEdit')
        ->where('company', '[0-9]+');
    Route::get('companies/{company}/delete', 'AdminCompaniesController@getDelete')
        ->where('company', '[0-9]+');
    Route::post('companies/{company}/delete', 'AdminCompaniesController@destroy')
        ->where('company', '[0-9]+');



    Route::controller('companies', 'CompaniesController');
// die(var_dump($companies));
    # Admin Dashboard
    // Route::controller('/{page}', 'AdminDashboardController');
    Route::get('/', 'AdminDashboardController');
});

// die(var_dump($user));
/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */
// Route::get('buckeye',function(){
//     Redirect::to('http://buckeyemower.com');
// });

// Route::get('companies',function(){
//     return Redirect::to('admin/companies')
//     // return Redirect::to('user/login')
//         // ->with( 'notice', Lang::get('user/user.user_account_created') );
//         ->with('notice', 'hello there.');
// });
// Route::get('advantage','CompanyController@getIndex',array('name'=>'advantage'));

Route::get('company/{id}','CompanyController@show')
    ->where('id', '[0-9]+');
Route::get('company/{name}','CompanyController@getIndex')
    ->where('name', '[a-zA-Z_]+');

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
///////// USER ///////////////////////////////////////////////
//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
// User reset routes
Route::post('user/reset/{id}', 'UserController@getReset')
    ->where('id', '[0-9a-zA-Z_]+');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit')
    ->where('user', '[0-9]+');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

Route::resource('companies', 'CompaniesController');
// die("bam");


// STATIC PAGES: ///////////////////////////////////////////////////
# Technical/Development Static Page

// how about:
// Route::get('pages','BlogController@getPages');

Route::get('pages',function(){
    $env=App::environment();
    $path='../app/views/site/'.$env.'/';
    // die($path);
    // $path='../app/views/site/pages/';

    $mypages = array();
    foreach (glob($path."*.blade.php") as $filename) {
        $filename=str_replace($path, "", $filename);
        $filename=str_replace(".blade.php", "", $filename);
        array_push($mypages,$filename);
        // echo "$filename" . "<br>";
        // die();
    }

    if(empty($mypages)){
        $msg="Could not find any pages in $path";
        Session::flash('message', $msg);
        App::abort('404',$msg);
    }
    else {
       return $mypages;
    }
});

Route::get('pages/{page}','BlogController@getPage');

Route::get('pages/{page}',function($page){
        $env=App::environment();
            $path='../app/views/site/'.$env.'/';
            // die($path);
            // $path='../app/views/site/pages/';

            $mypages = array();
            foreach (glob($path."*.blade.php") as $filename) {
                $filename=str_replace($path, "", $filename);
                $filename=str_replace(".blade.php", "", $filename);
                array_push($mypages,$filename);
                // echo "$filename" . "<br>";
                // die();
            }

            if(empty($mypages)){
                $msg="Could not find any pages in $path";
                Session::flash('message', $msg);
                App::abort('404',$msg);
            }

            // if services.blade.php exists, it will be returned.  Otherwise, 
            // we'll send the user to the search page.
            if(in_array($page, $mypages)){
                // die("BAM");


                return View::make('site.'.$env.'.'.$page)
                // ->nest('nav','site.partials.nav-top-min',compact('company'))
                ->with(compact('company'))
                ->with(compact('tags'))
                ->with(compact('alltags'))
                ->with(compact('posts'));
                 // $view;
            }
            return("No page in $path by the name $page!");
});

Route::post('search', 'BlogController@postSearch');
Route::get('search', 'BlogController@search');
// Route::get('/search', 'BlogController@search');

// ???

Route::get('search/{tag}','BlogController@search');

Route::get('tags', 'BlogController@getIndex');
Route::post('tags', 'BlogController@getIndex');
Route::get('tags/{tag}', 'BlogController@getIndex');
// Route::post('tags/{tag}', 'BlogController@postIndex');

# Posts - Second to last set, match slug
Route::post('blog/{postSlug}', 'BlogController@postView');
Route::get('blog/{postSlug}', 'BlogController@getView');
Route::get('blog', 'BlogController@getIndex');


// Route::get('company/{company}',function(Company $company){
//     // var_dump($company);
// });

Route::get('mytest',function(){
    return View::make('site.gristech.test');
});

// $company=Company::where('brand','like','buckeye')->first();
// die(var_dump($company));

Route::get('/{tag}', 'BlogController@getIndex');


// $company=Company::where('brand','like','gristech')->first();
Route::get('/', 'BlogController@getIndex');

    // ->with($company)
    // ->where(array('id','=',3));

/**
GET vs POST Basics
Rule #1: Use GET for safe actions and POST for unsafe actions.
Rule #2: Use POST when dealing with sensitive data.
Rule #3: Use POST when dealing with long requests.
Rule #4: Use GET in AJAX environments.

why shouldn’t we use POST for safe ones?


Simply put, because GET requests are more useable:
GET requests can be cached
GET requests can remain in the browser history
GET requests can be bookmarked
GET requests can be distributed & shared
GET requests can be hacked 

all unsafe actions should be made idempotent as nothing can stop users from ignoring warnings.

also:
http://www.sublimetext.com/forum/viewtopic.php?f=3&t=12382
*/

//////////////////////////////////////////////////////////////
// Route::get('features', function()
// {
//     // Return about us page
//     return View::make('site/features');
// });

// Route::get('technical', function()
// {
//     // Return about us page
//     return View::make('site/tools');
// });

// Route::get('tools', function()
// {
//     // Return about us page
//     return View::make('site/tools');
// });

// Route::get('responsive', function()
// {
//     // Return about us page
//     return View::make('site/pages/responsive');
// });

// // Route::get('notes', function()
// // {
// //     // Return about us page
// //     return View::make('site/notes');
// // });

// Route::get('security', function()
// {
//     // Return about us page
//     return View::make('site/pages/security');
// });

// Route::get('pages/{page}', function($page)
// {
//     // Return about us page
//     if (empty($page)){
//         return View::make('site/buckeye/home');
//     }

//     if (file_exists('site/pages/'.$page)){
//         return View::make('site/pages/'.$page);
//     }

//     Redirect::to('tags/'.$page);

// });


// Route::get('http://buckeyemower.com',function()){
//     return 'russ';
// }

///////////////////////////////////////////////////////////////////////

// Route::get('/russ/','RussController@getIndex'); //this should not be happening
// =======
# Technical/Development Static Page

// Route::get('features', function()
// {
//     // Return about us page
//     return View::make('site/features');
// });

// Route::get('technical', function()
// {
//     // Return about us page
//     return View::make('site/technical');
// });

// Route::get('whyresponsive', function()
// {
//     // Return about us page
//     return View::make('site/whyresponsive');
// });

// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
// Route::get('russ', 'RussController@getIndex');
// Route::get('russ/{tag}', 'RussController@getIndex');
// Route::get('tags/{tag}', 'BlogController@getIndex');

// <<<<<<< HEAD
// Route::get('/advantage/','CompanyController@getIndex',array('name'=>'advantage'));
// Route::get('advantage', 'CompanyController@getIndex',array('name'=>'advantage'));


// =======
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
// Route::get('russ', function()
// {   // Get all the blog posts
//     $posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);

//     // Show the page
//     return View::make('site/blog/index', compact('posts'));
//     return View::make('site/russ', compact('posts'));
// });
// 

// Route::get('blog', 'BlogController@getTags');
// Route::post('blog/{postSlug}', 'BlogController@postView');

// Route::get('tags', 'BlogController@getTags');
// Route::post('tags', 'BlogController@getTags');
// Route::get('tags/{tag}', 'BlogController@getIndex');
// // Route::post('tags/{tag}', 'BlogController@postIndex');

// # Posts - Second to last set, match slug
// Route::get('blog/{postSlug}', 'BlogController@getView');
// Route::post('blog/{postSlug}', 'BlogController@postView');

// Route::get('show/{tag}','BlogController@show');
// Route::get('search/{tag}','BlogController@getIndex');

// Route::get('/{tag}', function($tag){

//     //e.g. myapp.gristech.com/notes
    
//     //try page
//     //try tag
//     //try search
//     //404


// //static pages can be turned on and off with this array:
//     $mypages=array(
//         "search",
//         "notes",
//         "backup",
//         "contact",
//         "licensing",
//         "responsive",
//         "notes3",
//         "advantage",
//         "");
// =======
// Route::get('/{tag}', 'BlogController@getIndex');
// Route::post('/{tag}', 'BlogController@postView');
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3




// Route::post('/{tag}', 'BlogController@postView');

// Route::get('/', 'BlogController@getIndex');
# Index Page - Last route, no matches

// Route::get('/', 'CompanyController@getIndex');
//         $name='buckeye';
//         return View::make('site/'.$name.'/index',array(
// //return View::make('site/'.$name.'/home',array(
//             'brand'=>'Buckeye Mower',
//             'description'=>'Mobile Mower and Small Engine Repair',
//             'menus'=>array('rates','map')
//             ));




// Route::bind('company',function($value,$route){
//     return Company::where('name','advantage')->first();
// });

// Route::get('advantage', function(){
//     return Route::to('CompanyController@getIndex');
//     return Route::to('company.advantage');

// });
// ,array('brand'=>'Advantage','id'=>'2'));

// Route::get('/advantage',function()
// {
//     die("BAM!");

//     $name='advantage';
//     $description=array('Painting, Other Home Services');
//     return View::make('site/'.$name.'/index',array(
//         'brand'=>'Advantage',
//         'description'=>'Painting & More',
//         'menus'=>array('about ','services','map','schedule')))->nest('mynav','site.partials.nav-top',array(
//         'brand'=>'Advantage',
//         'description'=>'Painting & More',
//         'menus'=>array('about ','services','map','schedule')));

// });



//         // Route::get('/advantage/foo/{name?}', function($name = 'John')
//         // {
//         //     return "hi ".$name;
//         // });

//         Route::get('/advantage/{slug?}', function($slug = 'John')
//         {
//             $description="Painting & Other Services";
//             $company=array(
// //return View::make('site/'.$name.'/home',array(
//             'name'=>'Advantage Services',
//             'description'=>'Painting, Other Home Services',
//             // 'menus'=>array('about ','services','map','schedule')
//             'pages'=>array('about','schedule','services'=>array('painting','roofing','concrete','blacktop','power washing','heating & cooling','windows')),
//             'slogan'=>"We Paint & More");

//             // $pages=
//             // $company=array('name'=>'Advantage Services','slogan'=>'We Paint & More!');
            
//             return View::make('site/advantage/'.$slug,array('company'=>$company,'description'=>'Painting & other services','menus'=>array('about','schedule'
//                 // ,'services'=>array('painting','roofing','concrete','blacktop','power washing','heating & cooling','windows'
//                 //     )
//                 ),
//             'slogan'=>"We Paint & More"))->nest('mynav','site.partials.nav2',array(
//         'brand'=>'Advantage',
//         'description'=>'Painting & More',
//         'menus'=>array('about ','services','map','schedule')));

//             // return View::make('site/'.$name.'/home/'.$tag,array(
//             // 'request'=>'$tag',
//             // 'menus'=>array('services','contact','about')

//         });

// if($env === 'local2'){
//     // Route::get('/buckeye')

//     Route::get('/', function(){
//         $name='buckeye';
//         return View::make('site/'.$name.'/index',array(
// //return View::make('site/'.$name.'/home',array(
//             'company'=>'Buckeye Mower',
//             'menus'=>array('about ','rates','schedule','map')
//             ));
//     });

//     Route::get('login',function(){
//         // die("BAM");
//         return Redirect::to('user/login');
//     });

//     Route::get('/{tag}',function($tag){
//         $name='buckeye';
//         return View::make('site/'.$name.'/home/'.$tag,array(
//             'request'=>'$tag',
//             'menus'=>array('services','contact','about')
//         ));
//         //try to make page
//         //if page not in allowed array, show home
//     });

// }

    // die("BAM!");

    
    // Route::get('/{tag}', 'CompanyController@getIndex');

    // Route::group(array(
    //     'prefix' => 'admin', 
    //     'before' => 'auth'
    //     ), function(){

    // };

    
    
    // Route::get('admin',function(){
    //     // die("BAM");
    //     return Redirect::to('admin/index');
    // });

    // Route::get('/{tag}',function($tag){



    //     $allowed=array('schedule','map','login','user','admin');

    //     if(!in_array($tag, $allowed)){
    //         // App::abort(404);
    //     }


    // });

// Route::controller('admin',function(){
//     return Redirect::to('http://gristech.com');
// });

// Route::get('/{name}','CompanyController@getIndex',array('name'=>'buckeye'))
//     ->where('name', '[a-zA-Z_]+')
//     ;




        //try to make page
        //if page not in allowed array, show home
    // });
    
    // Route::controller('russ','RussController');

    //Set group to 

    //     // http://laravel.com/api/class-Illuminate.Filesystem.Filesystem.html
    //     // http://stackoverflow.com/questions/3303691/php-check-file-exists-without-knowing-the-extension
    //     // move to github : http://stackoverflow.com/questions/10240125/working-with-readme-md-on-github-com

    //     // 1. check route
    //     // 2. check sub route
    //     // 3. check for file/document
    //     // 4. check for page
    //     // 5. check for image
    //     // 6. check for post
    //     // 7. check for tag* this is huge
    //     // 8. check for google
    //     // 9. check facebook
    //     // 10. check twitter
    //     // 11. check...