<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_390
{
    #[Get('/admin/controller_390')]
    public function index_390(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_390/show/{?id}')]
    public function show_390(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_390/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_390/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_390/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_390/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_390/{id}/delete')]
    public function delete($id)
    {

    }
}