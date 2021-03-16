<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    // METODO PER HOME PAGE
    public function home(){
        $data= [
            'NomeShop' => 'Work_shop_on-line',
            'marche' => ['Nike','Asos','Diadora','Adidas'],
            'prodotti' => ['T-shirt','Jeans','Cappotti','Tute','Bermuda','Felpe']
        ];
        return view('home',$data);
    }
    //END METODO PER HOME PAGE
    
    // METODO PER PRODOTTI PAGE
    public function prodotti(){
        
        $prodotti = Dress::all();

        $collection = collect($prodotti);
        
        $nike = $collection->where('marca','Nike');
        $adidas = $collection->where('marca','Adidas');
        $diadora = $collection->where('marca','Diadora');
        $asos = $collection->where('marca','Asos');

        $marca = [
            'marca' =>[
                'nike' => $nike,
                'adidas' => $adidas,
                'diadora' => $diadora,
                'asos' => $asos
            ]
        ];

        return view('prodotti',$marca);
        
    }
    //END METODO PER PRODOTTI PAGE

    // METODO PER CONTATTI PAGE 
    public function contatti(){
        $data = [
            'email' => 'Email@.cgmail.com',
            'tel' => '372382738',
            'sede' => 'Milano'
        ];
        return view('contatti',$data);
    }
    //END METODO PER CONTATTI PAGE 

}
