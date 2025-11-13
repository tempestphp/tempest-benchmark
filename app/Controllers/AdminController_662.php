<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_662
{
    #[Get('/admin/controller_662')]
    public function index_662(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_662/show/{?id}')]
    public function show_662(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_662/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_662/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_662/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_662/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_662/{id}/delete')]
    public function delete($id)
    {

    }
}