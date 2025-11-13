<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_253
{
    #[Get('/admin/controller_253')]
    public function index_253()
    {

    }

    #[Get('/admin/controller_253/show/{?id}')]
    public function show_253(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_253/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_253/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_253/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_253/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_253/{id}/delete')]
    public function delete($id)
    {

    }
}