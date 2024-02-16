<?php

namespace App\Controllers;

use Tempest\Http\Get;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke()
    {
        dd('hi');
    }
}