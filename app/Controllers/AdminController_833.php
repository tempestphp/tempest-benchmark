<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_833
{
    #[Get('/admin/controller_833')]
    public function index_833(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_833/show/{id}')]
    public function show_833(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_833/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_833/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_833/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_833/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_833/{id}/delete')]
    public function delete($id)
    {

    }
}