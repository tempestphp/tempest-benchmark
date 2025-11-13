<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_437
{
    #[Get('/admin/controller_437')]
    public function index_437(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_437/show/{id}')]
    public function show_437(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_437/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_437/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_437/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_437/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_437/{id}/delete')]
    public function delete($id)
    {

    }
}