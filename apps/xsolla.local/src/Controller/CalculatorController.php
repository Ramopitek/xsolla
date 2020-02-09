<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\MathHelper;

class CalculatorController extends AbstractController
{

    protected $math;

    public function __construct()
    {
        $this->math = new MathHelper(24);
    }

    /**
     * @Route("/add/{a}/{b}/{c}", requirements={"a"="\d+(\.\d+)?","b"="\d+(\.\d+)?","c"="\d+(\.\d+)?"})
     */
    public function add(string $a, string $b, string $c = null)
    {
        $response = $this->math->add($a, $b);
        if ($c) {
            $response =  $this->math->add($response, $c);
        }
        return new Response($response);
    }

    /**
     * @Route("/sub/{a}/{b}")
     */
    public function sub(string $a, string $b)
    {
        $response =  $this->math->sub($a, $b);
        return new Response($response);
    }

    /**
     * @Route("/mult/{a}/{b}")
     */
    public function mult(string $a, string $b)
    {
        $response =  $this->math->mult($a, $b);
        return new Response($response);
    }
}
