<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//this is what i used to call the model maincontent
use App\maincontent as maincontent;

//this is what i used to call the model maincontent
use App\othercontent as othercontent;

class sportController extends Controller
{
    //this is the controller for the sport home page....

    public function mainContent(){
    	 $maincontent = maincontent::select()->orderBy('updated_at','desc')->take(1)->get();

         //for other content.
         $othercontent = othercontent::select()->orderBy('updated_at','desc')->take(7)->get();
         //collect values from array
         $maincontent_header0 = $maincontent[0]->header;
         $maincontent_mainstory0 = $maincontent[0]->main_content;
             /*this is the string breaking*/ 
             echo $maincontent_mainsubstory0 = substr($maincontent_mainstory0, 0, 20);
             /*end*/
         $maincontent_imagename0 = $maincontent[0]->image_name;

         $othercontent_header1 = $othercontent[1]->header;
         $othercontent_mainstory1 = $othercontent[1]->main_content;
         $othercontent_imagename1 = $othercontent[1]->image_name;

          $othercontent_header2 = $othercontent[2]->header;
         $othercontent_mainstory2 = $othercontent[2]->main_content;
         $othercontent_imagename2 = $othercontent[2]->image_name;

          $othercontent_header3 = $othercontent[3]->header;
         $othercontent_mainstory3 = $othercontent[3]->main_content;
         $othercontent_imagename3 = $othercontent[3]->image_name;

          $othercontent_header4 = $othercontent[4]->header;
         $othercontent_mainstory4 = $othercontent[4]->main_content;
         $othercontent_imagename4 = $othercontent[4]->image_name;

          $othercontent_header5 = $othercontent[5]->header;
         $othercontent_mainstory5 = $othercontent[5]->main_content;
         $othercontent_imagename5 = $othercontent[5]->image_name;

          $othercontent_header6 = $othercontent[6]->header;
         $othercontent_mainstory6 = $othercontent[6]->main_content;
         $othercontent_imagename6 = $othercontent[6]->image_name;
         //pass everything into a data
         $data = array(
                    'maincontent_header0' =>  $maincontent_header0,
                    'maincontent_mainstory0' => $maincontent_mainstory0,
                    'maincontent_mainsubstory0' =>$maincontent_mainsubstory0,
                    'maincontent_imagename0' => $maincontent_imagename0,
                    'othercontent_header1' => $othercontent_header1,
                    'othercontent_mainstory1' => $othercontent_mainstory1,
                    'othercontent_imagename1' => $othercontent_imagename1,
                    'othercontent_header2' => $othercontent_header2,
                    'othercontent_mainstory2' => $othercontent_mainstory2,
                    'othercontent_imagename2' => $othercontent_imagename2,
                    'othercontent_header3' => $othercontent_header3,
                    'othercontent_mainstory3' => $othercontent_mainstory3,
                    'othercontent_imagename3' => $othercontent_imagename3,
                    'othercontent_header4' => $othercontent_header4,
                    'othercontent_mainstory4' => $othercontent_mainstory4,
                    'othercontent_imagename4' => $othercontent_imagename4,
                    'othercontent_header5' => $othercontent_header5,
                    'othercontent_mainstory5' => $othercontent_mainstory5,
                    'othercontent_imagename5' => $othercontent_imagename5,
                    'othercontent_header6' => $othercontent_header6,
                    'othercontent_mainstory6' => $othercontent_mainstory6,
                    'othercontent_imagename6' => $othercontent_imagename6,
            );

        /* echo $maincontent[0]->header.'<br>';
         echo $othercontent[0]->main_content.'<br>';*/
         

            return view ('layouts.sport', $data);


           /* foreach ($othercontent as $othercontent) {
                echo $othercontent->header.'<br>';
            }*/   
    }
    

    public function main_article(){
        echo 'this is the main article';
    }

    public function article1(){
        echo '<h1>this is article 1</h1>';
    }	

    public function article2(){
        echo '<h1>this is article 2</h1>';
    }

     public function article3(){
        echo '<h1>this is article 3</h1>';
    }

     public function article4(){
        echo '<h1>this is article 4</h1>';
    }

     public function article5(){
        echo '<h1>this is article 5</h1>';
    }

     public function article6(){
        echo '<h1>this is article 6</h1>';
    }

}
