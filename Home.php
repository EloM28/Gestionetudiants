<?php

namespace App\Controllers;

use App\Models\Promotionmodel;

class Home extends BaseController
{
    public function index()
    {
        $model_promotion=new Promotionmodel();
        //insert
        $donne=['intitule'=>"month"];
          $model_promotion->insert($donne);

        //read
       /*  $promotion=$model_promotion->findAll();
        var_dump($promotion);
        //modify
        $donne=['intitule'=>'mode'];
        $model_promotion->update(4,$donne);*/
        //delete
       /* $model_promotion->delete(6);
       $promotion=$model_promotion->findAll();
       var_dump($promotion);*/
        return view('test');
    }

}
