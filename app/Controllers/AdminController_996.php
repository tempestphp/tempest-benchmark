<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_996
{
    #[Get('/admin/controller_996')]
    public function index_996(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_996/show/{id}')]
    public function show_996(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_996/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_996/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_996/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_996/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_996/{id}/delete')]
    public function delete($id)
    {

    }
}