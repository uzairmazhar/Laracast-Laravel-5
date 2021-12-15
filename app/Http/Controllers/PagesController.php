<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public function about(){
        $name = 'Uzair Mazhar';
//        return view('pages.about')->with('name',$name);
//        return view('pages.about')->with([
//            'first'=>'Uzair',
//                'last'=>'Mazhar'
//            ]);
        $data = [];
        $data['first']='Uzair';
        $data['last']='Mazhar';
        return view('pages.about',$data);
    }
}
