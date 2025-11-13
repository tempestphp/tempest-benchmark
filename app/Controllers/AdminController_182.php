<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_182
{
    #[Get('/admin/controller_182')]
    public function index_182(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_182/show/{id}')]
    public function show_182(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_182/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_182/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_182/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_182/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_182/{id}/delete')]
    public function delete($id)
    {

    }
}