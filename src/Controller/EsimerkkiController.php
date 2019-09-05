<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class EsimerkkiController{
    //Kontrollerit tulee tänne
    
    public function laskePalkka(){
        $nettopalkka = 4500 * 0.7;
        
        //pyydetään restonse oliota näyttämään tulos
        return new Response('<h2> Bruttopalkkasi on 4500 ja nettopalkkasi 
        on <strong>' . $nettopalkka .'</strong></h2>');
    }
    public function laskePH(){
        $x = 2.13*pow(10,-5);
        $ph = -log10($x);

        return new Response('<strong>Kun vesiliuoksen 
        vetyionikonsentraatio on </strong>' . $x .'mol/l sen pH on ' . number_format($ph,1) );
    }

}

?>