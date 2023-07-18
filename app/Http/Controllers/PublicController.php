<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//!ci mettiamo le pagine facilmente fruibili dall'utente
class PublicController extends Controller{

    
    public $recipes=[
        ['id'=>1,'name'=>"Riso patate e cozze",
        'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"primo",'region'=>"Puglia",'image'=>"https://www.giallozafferano.it/images/20-2021/Riso-patate-e-cozze_780x520_wm.jpg"],
        ['id'=>2,'name'=>"Carbonara",'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"primo",'region'=>"Lazio",'image'=>"https://www.giallozafferano.it/images/244-24489/Spaghetti-alla-Carbonara_450x300_sp.jpg"],
        ['id'=>3,'name'=>"Focaccia",'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"antipasto",'region'=>"Puglia",'image'=>"https://www.giallozafferano.it/images/238-23888/Focaccia-barese_450x300.jpg"],
        ['id'=>4,'name'=>"Scialatielli ai frutti di mare",'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"primo",'region'=>"Emilia Romagna",'image'=>"https://www.giallozafferano.it/images/229-22909/Scialatielli-ai-frutti-di-mare_360x300.jpg"],
        ['id'=>5,'name'=>"Fiorentina",'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"secondo",'region'=>"Toscana",'image'=>"https://www.giallozafferano.it/images/257-25714/Bistecca-alla-fiorentina_450x300.jpg"],
        ['id'=>6,'name'=>"Tagliata",'description'=>"  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum dolores in recusandae maxime, cum quibusdam tempora ab commodi iste beatae odio, neque dolorem quidem quis veniam perferendis. Aliquam, dolor illum!",'category'=>"secondo",'region'=>"Campagna",'image'=>"https://www.giallozafferano.it/images/215-21544/Tagliata-di-manzo-con-rucola-e-pomodorini_450x300.jpg"],
      
    ];



    public function index (){

 


    return view('homepage',['recipes'=>$this->recipes]);
   }


   public function show($id){
    
    foreach($this->recipes as $recipe){
        if($id==$recipe['id']){
            return view('dettaglio-ricetta',['recipe'=>$recipe]);
        }
    }
   }

   
   
}
