<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_926
{
    #[Get('/admin/controller_926')]
    public function index_926(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_926/show/{id}')]
    public function show_926(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_926/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_926/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_926/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_926/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_926/{id}/delete')]
    public function delete($id)
    {

    }
}