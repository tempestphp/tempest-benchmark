<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_117
{
    #[Get('/admin/controller_117')]
    public function index_117(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_117/show/{?id}')]
    public function show_117(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_117/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_117/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_117/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_117/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_117/{id}/delete')]
    public function delete($id)
    {

    }
}