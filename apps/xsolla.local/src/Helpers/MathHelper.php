<?php

namespace App\Helpers;

class MathHelper
{

    public function __construct(int $bcscale = 24)
    {
        bcscale($bcscale);
    }

    public function add($a, $b)
    {
        return rtrim(rtrim(bcadd($a, $b), 0), ".");
    }

    public function sub($a, $b)
    {
        return rtrim(rtrim(bcsub($a, $b), 0), ".");
    }

    public function mult($a, $b)
    {
        return rtrim(rtrim(bcmul($a, $b), 0), ".");
    }
}
