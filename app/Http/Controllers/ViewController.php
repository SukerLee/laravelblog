<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller {

    public function index() {

//        $data = array(
//            'name' => "電影網",
//            'show' => "最新最快",
//        );
//
//        $title = "電影上映時間表44556";
//        $show = '小白';


        $data = array(
            'score' => 50,
            'tt' => "最新最快",
            'num' => 10,
            'article' => [
                'new 1',
                'new 2',
                'new 3',
                'new 4',
                'new 5',
                'new 6',
            ],
            'news' => array(),
        );

        return view('my_laravel', compact('data'));
    }

    public function test() {

        $data = array(
            'name' => "電影網",
            'show' => "最新最快",
        );

        $title = "電影上映時間表";

        return view('my_laravel2', $data);
    }

    public function test2() {

        $name = "電影網3";
        $show = "最新最快3";

        return view('my_laravel3')->with('name', $name)->with('show', $show);
    }

}
