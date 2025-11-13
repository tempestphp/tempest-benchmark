<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_724
{
    #[Get('/admin/controller_724')]
    public function index_724(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_724/show/{?id}')]
    public function show_724(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_724/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_724/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_724/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_724/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_724/{id}/delete')]
    public function delete($id)
    {

    }
}