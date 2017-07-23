<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EstudianteController extends Controller
{
    /**
     * @Route("/estudiante/lista/{carrera}", name="listaEstudiante",
     *     Requirements={"carrera":"ASI|ASA|ET|EM|todas"})
     */
    public function listaAction($carrera)
    {
        $estudiantes=[
        'ASI' =>
        [
            'Andrea','Pablo','Diana'
        ],
        'ASA'=>
        [
            'Diego','Pamela','Tatiana'
        ],
         'ET'=>
             [
                 'Leonardo','Daniela','Luisa'
             ],
         'EM'=>
             [
                 'Gustavo','Raul','Elena'
             ]
            ];

        if ($carrera=='todas')
        {
            $listaSeleccionada=$estudiantes;
        }else
        {
            $listaSeleccionada=$estudiantes[$carrera];
        }

        return $this->render('AppBundle:Estudiante:lista.html.twig', array('listaSelec'=>$listaSeleccionada,'carrera'=>$carrera));
    }

}
