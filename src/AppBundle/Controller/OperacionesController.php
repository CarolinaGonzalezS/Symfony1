<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class OperacionesController extends Controller
{
    /**
     * @Route("/operaciones/suma/{valor}", name="sumaNum", requirements={"valor": "\d+"})
     */
    public function sumaAction($valor)
    {
        $number1=$valor;
        $number2=mt_rand(0,100);
        $result=$number1/$number2;
        return $this->render('operaciones/suma.html.twig', array('resultadoSuma'=>$result));
    }

    /**
     * @Route("/operaciones/resta/{ingresado}", name="restaNum")
     */
    public function restaAction($ingresado)
    {
        $number1=$ingresado;
        $number2=mt_rand(0,100);
        if ($number2>$number1)
        {
            $result="No puede ser mayor el valor 2";
            return $this->render('operaciones/resta.html.twig', array('resultadoResta'=>$result));
        }else
        {
            $result=$number1-$number2;
            return $this->render('operaciones/resta.html.twig', array('resultadoResta'=>$result));
        }

    }

    /**
     * @Route("/operaciones/multiplicacion")
     */
    public function multiplicacionAction()
    {
        $number1=mt_rand(0,100);
        $number2=mt_rand(0,100);
        $result=$number1*$number2;
        return $this->render('operaciones/multiplicacion.html.twig', array('resultadoMultiplicacion'=>$result));
    }

    /**
     * @Route("/operaciones/division")
     */
    public function divisionAction()
    {
        $number1=mt_rand(0,100);
        $number2=mt_rand(1,100);
        $result=$number1/$number2;
        return $this->render('operaciones/division.html.twig', array('resultadoDivision'=>$result));
    }


    /**
     * @Route("/operaciones/url/{slug}", name="blog_show")
     */
    public function urlAction($slug)
    {
        $url=$this->generateUrl(
            'blog_show',array('slug'=>'my-blog-post')
        );
    }


}
