<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_969
{
    #[Get('/admin/controller_969')]
    public function index_969(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_969/show/{id}')]
    public function show_969(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_969/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_969/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_969/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_969/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_969/{id}/delete')]
    public function delete($id)
    {

    }
}