<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_906
{
    #[Get('/admin/controller_906')]
    public function index_906(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_906/show/{?id}')]
    public function show_906(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_906/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_906/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_906/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_906/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_906/{id}/delete')]
    public function delete($id)
    {

    }
}