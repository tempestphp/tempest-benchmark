<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_818
{
    #[Get('/admin/controller_818')]
    public function index_818(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_818/show/{?id}')]
    public function show_818(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_818/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_818/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_818/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_818/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_818/{id}/delete')]
    public function delete($id)
    {

    }
}