<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_641
{
    #[Get('/admin/controller_641')]
    public function index_641(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_641/show/{?id}')]
    public function show_641(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_641/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_641/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_641/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_641/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_641/{id}/delete')]
    public function delete($id)
    {

    }
}