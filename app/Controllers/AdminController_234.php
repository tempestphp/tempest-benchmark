<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_234
{
    #[Get('/admin/controller_234')]
    public function index_234(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_234/show/{?id}')]
    public function show_234(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_234/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_234/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_234/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_234/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_234/{id}/delete')]
    public function delete($id)
    {

    }
}