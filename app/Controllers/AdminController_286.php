<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_286
{
    #[Get('/admin/controller_286')]
    public function index_286(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_286/show/{?id}')]
    public function show_286(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_286/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_286/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_286/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_286/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_286/{id}/delete')]
    public function delete($id)
    {

    }
}