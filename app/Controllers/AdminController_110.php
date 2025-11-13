<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_110
{
    #[Get('/admin/controller_110')]
    public function index_110(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_110/show/{id}')]
    public function show_110(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_110/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_110/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_110/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_110/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_110/{id}/delete')]
    public function delete($id)
    {

    }
}