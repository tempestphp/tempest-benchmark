<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_268
{
    #[Get('/admin/controller_268')]
    public function index_268(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_268/show/{?id}')]
    public function show_268(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_268/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_268/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_268/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_268/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_268/{id}/delete')]
    public function delete($id)
    {

    }
}