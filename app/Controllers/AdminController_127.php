<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_127
{
    #[Get('/admin/controller_127')]
    public function index_127(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_127/show/{?id}')]
    public function show_127(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_127/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_127/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_127/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_127/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_127/{id}/delete')]
    public function delete($id)
    {

    }
}