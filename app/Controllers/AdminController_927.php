<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_927
{
    #[Get('/admin/controller_927')]
    public function index_927(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_927/show/{id}')]
    public function show_927(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_927/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_927/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_927/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_927/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_927/{id}/delete')]
    public function delete($id)
    {

    }
}