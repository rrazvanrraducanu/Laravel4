<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function about(){
        //return 'About page';
       // return view('pages.about');
        /*
        $name="Popescu Bogdan";
        return view('pages.about')->with('name',$name);

        $name='Popescu <span style="color:red">Bogdan</span>';
        return view('pages.about')->with('name',$name);

        $name='Popescu <span style="color:red">Bogdan</span>';
        return view('pages.about')->with([
            "nume"=>"Popescu",
            "prenume"=>"Bogdan"
            ]);

        $data=[];
        $data["nume"]="Popescu";
        $data["prenume"]="Bogdan";
        return view('pages.about', $data);
*/
        $nume="Popescu";
        $prenume="Bogdan";
        return view('pages.about', compact('nume', 'prenume'));

    }

}
