<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_325
{
    #[Get('/admin/controller_325')]
    public function index_325(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_325/show/{id}')]
    public function show_325(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_325/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_325/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_325/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_325/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_325/{id}/delete')]
    public function delete($id)
    {

    }
}