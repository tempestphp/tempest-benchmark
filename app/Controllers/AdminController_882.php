<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_882
{
    #[Get('/admin/controller_882')]
    public function index_882(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_882/show/{?id}')]
    public function show_882(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_882/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_882/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_882/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_882/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_882/{id}/delete')]
    public function delete($id)
    {

    }
}