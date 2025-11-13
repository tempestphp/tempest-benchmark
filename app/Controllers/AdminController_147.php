<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_147
{
    #[Get('/admin/controller_147')]
    public function index_147(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_147/show/{?id}')]
    public function show_147(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_147/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_147/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_147/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_147/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_147/{id}/delete')]
    public function delete($id)
    {

    }
}