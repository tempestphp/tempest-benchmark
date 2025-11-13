<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_747
{
    #[Get('/admin/controller_747')]
    public function index_747(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_747/show/{?id}')]
    public function show_747(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_747/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_747/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_747/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_747/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_747/{id}/delete')]
    public function delete($id)
    {

    }
}