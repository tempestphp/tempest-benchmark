<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_410
{
    #[Get('/admin/controller_410')]
    public function index_410(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_410/show/{?id}')]
    public function show_410(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_410/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_410/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_410/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_410/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_410/{id}/delete')]
    public function delete($id)
    {

    }
}