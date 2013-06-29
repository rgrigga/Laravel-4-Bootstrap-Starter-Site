<?php

class AdminBlogsController extends AdminController {

    /**
     * Post Model
     * @var Post
     */
    protected $post;

    /**
     * Inject the models.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    /**
     * Show a list of all the blog posts.
     *
     * @return View
     */
    public function getIndex($tag="")
    {


        if($tag){
            $tag='%'.$tag.'%';
            $posts = $this->post->where('meta_keywords', 'LIKE', "$tag")->paginate(5);      
            
            $tags=array();

            foreach ($posts as $post) {

                foreach ($post->tags() as $mytag) {
                    if(!in_array($mytag, $tags)){
                        array_push($tags, trim($mytag));
                    }
                }

            }           
            
            // die(var_dump(count($posts)));

            if(count($posts)==0){

            return View::make('admin/blogs/index', compact('posts'),compact('tags'));

            }

            return View::make('admin/blogs/index', compact('posts'),compact('tags'))->with('error', 'There was a problem!');
        }

        //else tag was empty

        // Grab all the blog posts
        
        $posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);

        // Show the page
        return View::make('admin/blogs/index', compact('posts'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
        // Show the page
        return View::make('admin/blogs/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
        // Declare the rules for the form validation
        $rules = array(
            'title'   => 'required|min:3',
<<<<<<< HEAD
            'content' => 'required|min:3'
            // ,
            // 'image' => 'required|min:3'
=======
            'content' => 'required|min:3',
            'image' => 'required|min:3'
>>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Create a new blog post
            $user = Auth::user();

            // Update the blog post data
            $this->post->title            = Input::get('title');
            $this->post->slug             = Str::slug(Input::get('title'));
            $this->post->content          = Input::get('content');
            // var_dump(Input::get('image'));
<<<<<<< HEAD

            if(!Input::get('image')){
                $this->post->image='brand.png';
            }
            else{
                $this->post->image            = Input::get('image');    
            }
            
// Changed this from meta-title to make the title seo stuff work! --->
            $this->post->meta_title       = Input::get('title');
=======
            $this->post->image            = Input::get('image');
            $this->post->meta_title       = Input::get('meta-title');
>>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
            $this->post->meta_description = Input::get('meta-description');
            $this->post->meta_keywords    = Input::get('meta-keywords');
            $this->post->user_id          = $user->id;

            // Was the blog post created?
            if($this->post->save())
            {
                // Redirect to the new blog post page
                return Redirect::to('admin/blogs/' . $this->post->id . '/edit')->with('success', Lang::get('admin/blogs/messages.create.success'));
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/blogs/create')->with('error', Lang::get('admin/blogs/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/blogs/create')->withInput()->withErrors($validator);
	}

    /**
     * Display the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function getShow($post)
	{
        // redirect to the frontend
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param $post
     * @return Response
     */
	public function getEdit($post)
	{
        // Show the page
        return View::make('admin/blogs/edit', compact('post'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $post
     * @return Response
     */
	public function postEdit($post)
	{

        // Declare the rules for the form validation
        $rules = array(
            'title'   => 'required|min:3',
            'content' => 'required|min:3',
            'image' => 'required|min:3'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Update the blog post data
            $post->title            = Input::get('title');
            $post->slug             = Str::slug(Input::get('title'));
            $post->content          = Input::get('content');
            $post->image            = Input::get('image');
            $post->meta_title       = Input::get('meta-title');
            $post->meta_description = Input::get('meta-description');
            $post->meta_keywords    = Input::get('meta-keywords');

            // Was the blog post updated?
            if($post->save())
            {
                // Redirect to the new blog post page
                return Redirect::to('admin/blogs/' . $post->id . '/edit')->with('success', Lang::get('admin/blogs/messages.update.success'));
            }

            // Redirect to the blogs post management page
            return Redirect::to('admin/blogs/' . $post->id . '/edit')->with('error', Lang::get('admin/blogs/messages.update.error'));
        }

        // Form validation failed
        return Redirect::to('admin/blogs/' . $post->id . '/edit')->withInput()->withErrors($validator);
	}


    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function getDelete($post)
    {
        // Show the page
        return View::make('admin/blogs/delete', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $post
     * @return Response
     */
    public function postDelete($post)
    {
        // Declare the rules for the form validation
        $rules = array(
            'id' => 'required|integer'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $id = $post->id;
            $post->delete();

            // Was the blog post deleted?
            $post = Post::find($id);
            if(empty($post))
            {
                // Redirect to the blog posts management page
                return Redirect::to('admin/blogs')->with('success', Lang::get('admin/blogs/messages.delete.success'));
            }


        }
        // There was a problem deleting the blog post
        return Redirect::to('admin/blogs')->with('error', Lang::get('admin/blogs/messages.delete.error'));
    }

}