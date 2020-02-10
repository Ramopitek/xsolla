<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Swagger\Annotations as SWG;
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
     * Sumarize 3 numbers
     * 
     * @Route("/add/{a}/{b}/{c}", requirements={"a"="\d+(\.\d+)?","b"="\d+(\.\d+)?","c"="\d+(\.\d+)?"}, methods={"GET"})
     * @SWG\Parameter(
     *  in="path",
     *  name="a",
     *  type="string",
     *  description="First number"
     * )
     * @SWG\Parameter(
     *  in="path",
     *  name="b",
     *  type="string",
     *  description="Second number"
     * )
     * @SWG\Parameter(
     *  in="path",
     *  name="c",
     *  type="string",
     *  description="Third number"
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Returns sum of 3 numbers"
     * )
     * @SWG\Tag(name="Calculator")
     */
    public function addThree(string $a, string $b, string $c)
    {
        $response = $this->math->add($a, $b);
        $response =  $this->math->add($response, $c);
        return new Response($response);
    }

    /**
     * Sumarize 2 numbers
     * 
     * @Route("/add/{a}/{b}", requirements={"a"="\d+(\.\d+)?","b"="\d+(\.\d+)?"}, methods={"GET"})
     * @SWG\Parameter(
     *  in="path",
     *  name="a",
     *  type="string",
     *  description="First number"
     * )
     * @SWG\Parameter(
     *  in="path",
     *  name="b",
     *  type="string",
     *  description="Second number"
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Returns the sum of 2 numbers"
     * )
     * @SWG\Tag(name="Calculator")
     */
    public function addTwo(string $a, string $b)
    {
        $response = $this->math->add($a, $b);
        return new Response($response);
    }

    /**
     * Substract numbers
     * 
     * @Route("/sub/{a}/{b}", requirements={"a"="\d+(\.\d+)?","b"="\d+(\.\d+)?"}, methods={"GET"})
     * @SWG\Parameter(
     *  in="path",
     *  name="a",
     *  type="string",
     *  description="Minuend number"
     * )
     * @SWG\Parameter(
     *  in="path",
     *  name="b",
     *  type="string",
     *  description="Subtrahend number"
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Returns the subtraction of 2 numbers"
     * )
     * @SWG\Tag(name="Calculator")
     */
    public function sub(string $a, string $b)
    {
        $response =  $this->math->sub($a, $b);
        return new Response($response);
    }

    /**
     * Multiplies 2 numbers
     * 
     * @Route("/mult/{a}/{b}", requirements={"a"="\d+(\.\d+)?","b"="\d+(\.\d+)?"}, methods={"GET"})
     * @SWG\Parameter(
     *  in="path",
     *  name="a",
     *  type="string",
     *  description="First number"
     * )
     * @SWG\Parameter(
     *  in="path",
     *  name="b",
     *  type="string",
     *  description="Second number"
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Returns the multiplication of 2 numbers"
     * )
     * @SWG\Tag(name="Calculator")
     */
    public function mult(string $a, string $b)
    {
        $response =  $this->math->mult($a, $b);
        return new Response($response);
    }
}
