<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_045
{
    #[Get('/admin/controller_045')]
    public function index_045(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_045/show/{?id}')]
    public function show_045(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_045/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_045/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_045/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_045/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_045/{id}/delete')]
    public function delete($id)
    {

    }
}