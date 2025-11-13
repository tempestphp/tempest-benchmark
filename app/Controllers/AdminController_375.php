<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_375
{
    #[Get('/admin/controller_375')]
    public function index_375(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_375/show/{?id}')]
    public function show_375(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_375/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_375/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_375/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_375/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_375/{id}/delete')]
    public function delete($id)
    {

    }
}