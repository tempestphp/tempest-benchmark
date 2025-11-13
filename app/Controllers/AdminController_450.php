<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_450
{
    #[Get('/admin/controller_450')]
    public function index_450(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_450/show/{?id}')]
    public function show_450(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_450/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_450/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_450/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_450/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_450/{id}/delete')]
    public function delete($id)
    {

    }
}