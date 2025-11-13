<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_209
{
    #[Get('/admin/controller_209')]
    public function index_209(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_209/show/{id}')]
    public function show_209(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_209/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_209/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_209/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_209/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_209/{id}/delete')]
    public function delete($id)
    {

    }
}