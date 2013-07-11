<?php
// die("ROUTES");

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
 // bam!
/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');
// now, calls to "user->username" should work.  effectively a singleton representing the session data or database info.

// Route::get('/', array('before' => 'guest', function(){
//     // echo "You're not logged in!";
//     return Redirect::to('user/login/');
// }));

// Route::any('/', array('before' => 'auth', function(){
    
// }));

$env=App::environment();
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

Route::group(array('domain' => 'buckeyemower.com'),function()
{
    // die("BAM!");

    
    // Route::get('/{tag}', 'CompanyController@getIndex');

    Route::get('/', function(){
        $name='buckeye';
        return View::make('site/'.$name.'/index',array(
//return View::make('site/'.$name.'/home',array(
            'brand'=>'Buckeye Mower',
            'description'=>'Mobile Mower and Small Engine Repair',
            'menus'=>array('about ','rates','map','schedule')
            ));
    
    });

    Route::get('login',function(){
        // die("BAM");
        return Redirect::to('user/login');
    });
    
    Route::get('/{tag}',function($tag){

        $allowed=array('schedule','map','login');

        if(!in_array($tag, $allowed)){
            App::abort(404);
        }

        $name='buckeye';
        return View::make('site/'.$name.'/home/'.$tag,array(
            'request'=>'$tag',
            'menus'=>array('services','contact','about')
        ));
        //try to make page
        //if page not in allowed array, show home
    });
    
    // Route::controller('russ','RussController');

    //Set group to 
});

// Redactor Blog Upload
Route::post('redactorUpload', function()
{
    $file = Input::file('file');
    $fileName = $file->getClientOriginalName();

    $file->move(public_path().'/img', $fileName);
    return Response::json(array('filelink' => '/img/' . $fileName));
});

Route::get('/advantage',function()
{
    // die("BAM!");

    $name='advantage';
    $description=array('Painting, Other Home Services');
    return View::make('site/'.$name.'/index',array(
        'brand'=>'Advantage',
        'description'=>'Painting & More',
        'menus'=>array('about ','services','map','schedule')))->nest('mynav','site.partials.nav-top',array(
        'brand'=>'Advantage',
        'description'=>'Painting & More',
        'menus'=>array('about ','services','map','schedule')));

// class Company extends User{
//     public $name="Advantage Services";
// }


// $obj = new Company;
// $company = $obj->name;
// $company = $obj->name;
// $posts = array("foo","bar");

    
    // Route::get('advantage/{tag}', 'CompanyController@getIndex')->with($company);
    // Route::get('/advantage/', 'CompanyController@getIndex');
    
    // Route::controller('russ','RussController');

    //Set group to 
});

        Route::get('/advantage/foo/{name?}', function($name = 'John')
        {
            return "hi ".$name;
        });

        Route::get('/advantage/{slug?}', function($slug = 'John')
        {
            $description="Painting & Other Services";
            $company=array(
//return View::make('site/'.$name.'/home',array(
            'name'=>'Advantage Services',
            'description'=>'Painting, Other Home Services',
            // 'menus'=>array('about ','services','map','schedule')
            'pages'=>array('about','schedule','services'=>array('painting','roofing','concrete','blacktop','power washing','heating & cooling','windows')),
            'slogan'=>"We Paint & More");

            // $pages=
            // $company=array('name'=>'Advantage Services','slogan'=>'We Paint & More!');
            
            return View::make('site/advantage/'.$slug,array('company'=>$company,'description'=>'Painting & other services','menus'=>array('about','schedule'
                // ,'services'=>array('painting','roofing','concrete','blacktop','power washing','heating & cooling','windows'
                //     )
                ),
            'slogan'=>"We Paint & More"))->nest('mynav','site.partials.nav2',array(
        'brand'=>'Advantage',
        'description'=>'Painting & More',
        'menus'=>array('about ','services','map','schedule')));

            // return View::make('site/'.$name.'/home/'.$tag,array(
            // 'request'=>'$tag',
            // 'menus'=>array('services','contact','about')

        });

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('post', 'Post');
Route::model('role', 'Role');
//Company?
//http://stackoverflow.com/questions/7770728/group-vs-role-any-real-difference



/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */
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

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

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

//:: Application Routes ::

// <<<<<<< HEAD

// STATIC PAGES: ///////////////////////////////////////////////////
# Technical/Development Static Page

//TODO: regex routing here (DRY)

Route::get('features', function()
{
    // Return about us page
    return View::make('site/features');
});

Route::get('technical', function()
{
    // Return about us page
    return View::make('site/tools');
});

Route::get('tools', function()
{
    // Return about us page
    return View::make('site/tools');
});

Route::get('responsive', function()
{
    // Return about us page
    return View::make('site/pages/responsive');
});

// Route::get('notes', function()
// {
//     // Return about us page
//     return View::make('site/notes');
// });

Route::get('security', function()
{
    // Return about us page
    return View::make('site/pages/security');
});

Route::get('pages/{page}', function($page)
{
    // Return about us page
    if (empty($page)){
        return View::make('site/buckeye/home');
    }

    if (file_exists('site/pages/'.$page)){
        return View::make('site/pages/'.$page);
    }

    Redirect::to('tags/'.$page);

});


// Route::get('http://buckeyemower.com',function()){
//     return 'russ';
// }

///////////////////////////////////////////////////////////////////////

Route::get('/russ/','RussController@getIndex'); //this should not be happening
// =======
# Technical/Development Static Page

Route::get('features', function()
{
    // Return about us page
    return View::make('site/features');
});

Route::get('technical', function()
{
    // Return about us page
    return View::make('site/technical');
});

Route::get('whyresponsive', function()
{
    // Return about us page
    return View::make('site/whyresponsive');
});

// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
Route::get('russ', 'RussController@getIndex');
Route::get('russ/{tag}', 'RussController@getIndex');
// Route::get('tags/{tag}', 'BlogController@getIndex');

// <<<<<<< HEAD
// Route::get('/advantage/','CompanyController@getIndex',array('name'=>'advantage'));
// Route::get('advantage', 'CompanyController@getIndex',array('name'=>'advantage'));
Route::get('company/{name}', 'CompanyController@getIndex', array('name'=>'advantage'));

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

Route::get('blog', 'BlogController@getTags');
Route::post('blog/{postSlug}', 'BlogController@postView');

Route::get('tags', 'BlogController@getTags');
Route::post('tags', 'BlogController@getTags');
Route::get('tags/{tag}', 'BlogController@getIndex');
// Route::post('tags/{tag}', 'BlogController@postIndex');

# Posts - Second to last set, match slug
Route::get('blog/{postSlug}', 'BlogController@getView');
Route::post('blog/{postSlug}', 'BlogController@postView');

Route::get('show/{tag}','BlogController@show');
Route::get('search/{tag}','BlogController@getIndex');

Route::get('/{tag}', function($tag){

    //e.g. myapp.gristech.com/notes
    
    //try page
    //try tag
    //try search
    //404


//static pages can be turned on and off with this array:
    $mypages=array(
        "search",
        "notes",
        "backup",
        "contact",
        "licensing",
        "responsive",
        "notes3",
        "advantage",
        "");
// =======
Route::get('/{tag}', 'BlogController@getIndex');
// Route::post('/{tag}', 'BlogController@postView');
// >>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3

    if($tag==="russ"){
        die("RUSS!");
    }

    $path='/home/gristech/myapp/app/views/site/pages/';

    $mypages = array();
    foreach (glob($path."*.blade.php") as $filename) {
        $filename=str_replace($path, "", $filename);
        $filename=str_replace(".blade.php", "", $filename);
        array_push($mypages,$filename);
        // echo "$filename" . "<br>";
    }

    // die (var_dump($path));

        if(in_array($tag, $mypages)){
            $view = View::make('site/pages/'.$tag);
            return $view;
        }
        else{
            return Redirect::to('search/'.$tag);
        }

    });

// Route::post('/{tag}', 'BlogController@postView');

// Route::get('/', 'BlogController@getIndex');
# Index Page - Last route, no matches
Route::get('/', 'BlogController@getIndex');




Route::resource('companies', 'CompaniesController');