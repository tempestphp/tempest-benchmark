<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_393
{
    #[Get('/admin/controller_393')]
    public function index_393(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_393/show/{id}')]
    public function show_393(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_393/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_393/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_393/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_393/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_393/{id}/delete')]
    public function delete($id)
    {

    }
}