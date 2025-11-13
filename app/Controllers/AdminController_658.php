<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_658
{
    #[Get('/admin/controller_658')]
    public function index_658(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_658/show/{?id}')]
    public function show_658(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_658/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_658/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_658/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_658/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_658/{id}/delete')]
    public function delete($id)
    {

    }
}