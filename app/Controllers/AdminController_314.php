<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_314
{
    #[Get('/admin/controller_314')]
    public function index_314(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_314/show/{?id}')]
    public function show_314(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_314/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_314/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_314/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_314/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_314/{id}/delete')]
    public function delete($id)
    {

    }
}