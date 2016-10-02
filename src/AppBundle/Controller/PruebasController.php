<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;

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
    
    public function createAction() {
        
        $curso = new Curso();
        $curso->setTitulo("Curso de Symfony3");
        $curso->setDescripcion("Curso de SymfonyCurso completo de Symfony");
        $curso->setPrecio(80);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush=$em->flush();
        
        if($flush != null) {
            echo "El curso no se ha creado bien";
        }else{
            echo "El curso se ha creado correctamente";
        }
        die();
    }
    
    public function readAction(){
        $em = $this->getDoctrine()->getManager();
        $cursos_repo =$em->getRepository("AppBundle:Curso");
        $cursos = $cursos_repo->findAll();
        
        foreach($cursos as $curso){
            echo $curso->getTitulo()."<br/>";
            echo $curso->getDescription()."<br/>";
            echo $curso->getPrecio()."<br/>";
        }
        die();
    }
    
}
