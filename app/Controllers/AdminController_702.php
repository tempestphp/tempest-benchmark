<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_702
{
    #[Get('/admin/controller_702')]
    public function index_702(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_702/show/{id}')]
    public function show_702(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_702/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_702/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_702/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_702/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_702/{id}/delete')]
    public function delete($id)
    {

    }
}