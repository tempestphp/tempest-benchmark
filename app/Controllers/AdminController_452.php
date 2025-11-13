<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_452
{
    #[Get('/admin/controller_452')]
    public function index_452(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_452/show/{?id}')]
    public function show_452(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_452/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_452/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_452/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_452/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_452/{id}/delete')]
    public function delete($id)
    {

    }
}