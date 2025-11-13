<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_958
{
    #[Get('/admin/controller_958')]
    public function index_958(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_958/show/{id}')]
    public function show_958(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_958/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_958/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_958/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_958/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_958/{id}/delete')]
    public function delete($id)
    {

    }
}