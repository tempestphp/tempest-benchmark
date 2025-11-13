<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_689
{
    #[Get('/admin/controller_689')]
    public function index_689(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_689/show/{?id}')]
    public function show_689(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_689/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_689/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_689/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_689/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_689/{id}/delete')]
    public function delete($id)
    {

    }
}