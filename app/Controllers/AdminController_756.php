<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_756
{
    #[Get('/admin/controller_756')]
    public function index_756()
    {

    }

    #[Get('/admin/controller_756/show/{?id}')]
    public function show_756(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_756/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_756/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_756/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_756/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_756/{id}/delete')]
    public function delete($id)
    {

    }
}