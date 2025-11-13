<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_590
{
    #[Get('/admin/controller_590')]
    public function index_590(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_590/show/{id}')]
    public function show_590(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_590/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_590/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_590/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_590/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_590/{id}/delete')]
    public function delete($id)
    {

    }
}