<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_653
{
    #[Get('/admin/controller_653')]
    public function index_653(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_653/show/{?id}')]
    public function show_653(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_653/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_653/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_653/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_653/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_653/{id}/delete')]
    public function delete($id)
    {

    }
}