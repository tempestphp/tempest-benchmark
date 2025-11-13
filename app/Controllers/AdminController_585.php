<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_585
{
    #[Get('/admin/controller_585')]
    public function index_585(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_585/show/{?id}')]
    public function show_585(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_585/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_585/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_585/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_585/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_585/{id}/delete')]
    public function delete($id)
    {

    }
}