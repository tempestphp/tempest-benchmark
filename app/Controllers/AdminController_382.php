<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_382
{
    #[Get('/admin/controller_382')]
    public function index_382(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_382/show/{?id}')]
    public function show_382(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_382/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_382/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_382/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_382/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_382/{id}/delete')]
    public function delete($id)
    {

    }
}