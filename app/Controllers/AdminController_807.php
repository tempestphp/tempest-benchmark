<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_807
{
    #[Get('/admin/controller_807')]
    public function index_807(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_807/show/{?id}')]
    public function show_807(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_807/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_807/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_807/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_807/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_807/{id}/delete')]
    public function delete($id)
    {

    }
}