<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_572
{
    #[Get('/admin/controller_572')]
    public function index_572(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_572/show/{id}')]
    public function show_572(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_572/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_572/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_572/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_572/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_572/{id}/delete')]
    public function delete($id)
    {

    }
}