<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_123
{
    #[Get('/admin/controller_123')]
    public function index_123(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_123/show/{?id}')]
    public function show_123(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_123/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_123/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_123/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_123/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_123/{id}/delete')]
    public function delete($id)
    {

    }
}