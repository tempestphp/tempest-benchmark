<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_269
{
    #[Get('/admin/controller_269')]
    public function index_269(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_269/show/{?id}')]
    public function show_269(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_269/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_269/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_269/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_269/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_269/{id}/delete')]
    public function delete($id)
    {

    }
}