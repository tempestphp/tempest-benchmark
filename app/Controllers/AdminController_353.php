<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_353
{
    #[Get('/admin/controller_353')]
    public function index_353(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_353/show/{?id}')]
    public function show_353(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_353/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_353/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_353/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_353/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_353/{id}/delete')]
    public function delete($id)
    {

    }
}