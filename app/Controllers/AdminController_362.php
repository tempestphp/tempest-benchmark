<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_362
{
    #[Get('/admin/controller_362')]
    public function index_362(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_362/show/{?id}')]
    public function show_362(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_362/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_362/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_362/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_362/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_362/{id}/delete')]
    public function delete($id)
    {

    }
}