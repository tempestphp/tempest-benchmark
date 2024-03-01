<?php

declare(strict_types=1);

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
