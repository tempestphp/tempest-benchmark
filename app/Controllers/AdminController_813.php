<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_813
{
    #[Get('/admin/controller_813')]
    public function index_813(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_813/show/{id}')]
    public function show_813(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_813/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_813/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_813/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_813/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_813/{id}/delete')]
    public function delete($id)
    {

    }
}