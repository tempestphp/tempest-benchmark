<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_555
{
    #[Get('/admin/controller_555')]
    public function index_555(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_555/show/{?id}')]
    public function show_555(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_555/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_555/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_555/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_555/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_555/{id}/delete')]
    public function delete($id)
    {

    }
}