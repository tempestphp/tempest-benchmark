<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_717
{
    #[Get('/admin/controller_717')]
    public function index_717(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_717/show/{id}')]
    public function show_717(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_717/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_717/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_717/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_717/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_717/{id}/delete')]
    public function delete($id)
    {

    }
}