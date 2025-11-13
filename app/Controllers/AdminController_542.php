<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_542
{
    #[Get('/admin/controller_542')]
    public function index_542(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_542/show/{?id}')]
    public function show_542(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_542/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_542/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_542/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_542/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_542/{id}/delete')]
    public function delete($id)
    {

    }
}