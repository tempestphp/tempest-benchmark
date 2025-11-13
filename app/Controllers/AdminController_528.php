<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_528
{
    #[Get('/admin/controller_528')]
    public function index_528(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_528/show/{id}')]
    public function show_528(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_528/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_528/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_528/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_528/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_528/{id}/delete')]
    public function delete($id)
    {

    }
}