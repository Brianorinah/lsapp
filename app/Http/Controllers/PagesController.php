<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class PagesController extends Controller
{
    public function index(){
        $title = 'Index Page';
    return view('pages.index' , compact('title'));
   // return view('pages.index') -> with('title' , $title);

    }
    public function about(){
        $title = 'About Page!';        
        return view('pages.about')-> with('title',$title);
        
            }
    public function services(){
         /*       $title = 'Services Page!';
              //return view('pages.services' , compact('title'));
              return view('pages.services')-> with('title',$title);
            */
            $data= array(
                'title' => 'Services',
                'services' => ['Web design','Programming','SEO']
            )  ;  
            return view('pages.services')-> with($data);
        
        }
}
