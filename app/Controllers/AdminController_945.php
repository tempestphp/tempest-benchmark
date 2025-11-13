<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_945
{
    #[Get('/admin/controller_945')]
    public function index_945(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_945/show/{id}')]
    public function show_945(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_945/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_945/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_945/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_945/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_945/{id}/delete')]
    public function delete($id)
    {

    }
}