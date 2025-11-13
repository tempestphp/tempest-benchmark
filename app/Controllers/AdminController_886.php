<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_886
{
    #[Get('/admin/controller_886')]
    public function index_886()
    {

    }

    #[Get('/admin/controller_886/show/{?id}')]
    public function show_886(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_886/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_886/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_886/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_886/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_886/{id}/delete')]
    public function delete($id)
    {

    }
}