<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_305
{
    #[Get('/admin/controller_305')]
    public function index_305(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_305/show/{?id}')]
    public function show_305(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_305/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_305/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_305/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_305/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_305/{id}/delete')]
    public function delete($id)
    {

    }
}