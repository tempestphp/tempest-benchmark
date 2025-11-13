<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_664
{
    #[Get('/admin/controller_664')]
    public function index_664(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_664/show/{?id}')]
    public function show_664(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_664/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_664/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_664/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_664/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_664/{id}/delete')]
    public function delete($id)
    {

    }
}