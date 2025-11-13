<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_651
{
    #[Get('/admin/controller_651')]
    public function index_651()
    {

    }

    #[Get('/admin/controller_651/show/{?id}')]
    public function show_651(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_651/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_651/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_651/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_651/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_651/{id}/delete')]
    public function delete($id)
    {

    }
}