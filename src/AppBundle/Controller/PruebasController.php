<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
   
    public function indexAction(Request $request,$name,$page)
    {
        // return $this->redirect($this->generaeUrl("helloWorld"));
        $productos = array( 
                            array("producto"=>"Consola", "precio"=>2),
                            array("producto"=>"Consola", "precio"=>4),
                            array("producto"=>"Consola", "precio"=>5),
                            array("producto"=>"Consola", "precio"=>6),
                          );
        $fruta = array("manzana"=>"golden","pera"=>"rica");
        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig', array(
                'texto' => $name." - ".$page,
                'productos' => $productos,
                'fruta' => $fruta
            ));
    }
    
    
}
