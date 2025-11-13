<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_657
{
    #[Get('/admin/controller_657')]
    public function index_657(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_657/show/{?id}')]
    public function show_657(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_657/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_657/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_657/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_657/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_657/{id}/delete')]
    public function delete($id)
    {

    }
}