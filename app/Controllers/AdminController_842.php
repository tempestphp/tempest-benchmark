<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_842
{
    #[Get('/admin/controller_842')]
    public function index_842(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_842/show/{?id}')]
    public function show_842(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_842/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_842/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_842/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_842/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_842/{id}/delete')]
    public function delete($id)
    {

    }
}