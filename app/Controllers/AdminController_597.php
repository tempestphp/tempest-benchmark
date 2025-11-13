<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_597
{
    #[Get('/admin/controller_597')]
    public function index_597(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_597/show/{?id}')]
    public function show_597(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_597/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_597/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_597/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_597/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_597/{id}/delete')]
    public function delete($id)
    {

    }
}