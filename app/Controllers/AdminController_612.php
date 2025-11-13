<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_612
{
    #[Get('/admin/controller_612')]
    public function index_612(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_612/show/{?id}')]
    public function show_612(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_612/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_612/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_612/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_612/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_612/{id}/delete')]
    public function delete($id)
    {

    }
}