<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


//this is what i used to call the model maincontent
use App\maincontent as maincontent;
//this is what i used to call the model othercontent
use App\othercontent as othercontent;


class HomeController extends Controller
{

    private $verify = [
                        'header'=>'required|max:30',
                        'main_story' => 'required',
                        'image' => 'required|mimes:jpeg,jpg,png',
                        ];
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myviews/dashboard/home');
    }

    public function main_content()
    {
        //this is where the pages editor (main Content)is 
        return view('myviews/dashboard/main_content');
    }

        public function other_content()
    {
        //this is where the pages editor (other Contents) is 
        return view('myviews/dashboard/other_content');
    }

    public function mainContent_PB(Request $request)
    {

        //to validate
        $this->validate($request, $this->verify);
        
        //this function was used to just preview the new page
        $user_id = $request->input('user_id');
        $header = $request->input('header');
        $main_story = $request->input('main_story');

        //this is where i am collecting the image
        $image_name = $request->file('image')->getClientOriginalName();
        
         //saving the image itself.
        $destination = base_path().'/public/pageImages/mainImages';
        $request->file('image')->move($destination,$image_name);

        //here am going to pass the data into an array and send it to the view
        $data = array(
                    'User_id' => $user_id,
                    'header' => $header,
                    'main_story' => $main_story,
                    'image_name' => $image_name, 
                );


            return view('myviews/dashboard/main_content_preview', $data);

       
    }

       public function otherContent_PB(Request $request)
    {
        //to validate
        $this->validate($request, $this->verify);

        //this function was used to just preview the new page
        $user_id = $request->input('user_id');
        $header = $request->input('header');
        $main_story = $request->input('main_story');

        //this is where i am collecting the image
        $image_name = $request->file('image')->getClientOriginalName();

        //saving the image itself.
        $destination = base_path().'/public/pageImages/otherImages';
        $request->file('image')->move($destination,$image_name);

        //here am going to pass the data into an array and send it to the view
        $data = array(
                    'User_id' => $user_id,
                    'header' => $header,
                    'main_story' => $main_story,
                    'image_name' => $image_name, 
                );


            return view('myviews/dashboard/other_content_preview', $data);

       
    }
    public function mainPreview(Request $request)
    {
        
        //this function is used to moved the data to the database proper after saving
        $user_id = $request->input('user_id');
        $header = $request->input('header');
        $main_story = $request->input('main_story');

        //this is where i am collecting the image
        $image_name = $request->input('image_name');

        //Now, passing it into the database.
        maincontent::insert(
                    ['User_id' => $user_id,'header' => $header, 'main_content' => $main_story, 'image_name' => $image_name]
                );
                
        return redirect()->route('sport_home');      
    }

     public function otherPreview(Request $request)
    {
        
        //this function is used to moved the data to the database proper after saving
        $user_id = $request->input('user_id');
        $header = $request->input('header');
        $main_story = $request->input('main_story');

        //this is where i am collecting the image
        $image_name = $request->input('image_name');        
        
        //Now, passing it into the database.
       othercontent::insert(
                    ['User_id' => $user_id,'header' => $header, 'main_content' => $main_story, 'image_name' => $image_name]
                );
                
        return redirect()->route('sport_home');      
    }
}
