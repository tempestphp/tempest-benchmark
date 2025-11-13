<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_419
{
    #[Get('/admin/controller_419')]
    public function index_419(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_419/show/{id}')]
    public function show_419(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_419/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_419/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_419/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_419/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_419/{id}/delete')]
    public function delete($id)
    {

    }
}