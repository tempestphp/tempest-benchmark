<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_299
{
    #[Get('/admin/controller_299')]
    public function index_299(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_299/show/{id}')]
    public function show_299(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_299/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_299/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_299/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_299/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_299/{id}/delete')]
    public function delete($id)
    {

    }
}