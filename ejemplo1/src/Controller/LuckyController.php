<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{


    public function number()
    {
     	$number = rand(1, 99);
     	$numberSerie = rand(1, 999);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,'numberSerie' => $numberSerie,
        ]);
        /*
        return new Response(
            '<html><body> <h2>Lucky number : </h2> <h1>'.$number.'</h1> </body></html>
            <br>
            <html><body> <h2> Lucky number Serie: </h2> <h1>'.$numberSerie.'</h1> </body></html>'
        );*/
    }

    /**
    public function numberSerie()
    {
        $numberSerie = random_int(0, 999);

        return $this->render('lucky/number.html.twig', [
            'numberSerie' => $numberSerie,
        ]);
        /*return new Response(
            '<html><body>Lucky number Serie: '.$numberSerie.'</body></html>'
        //);*/
    //}
}