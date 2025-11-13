<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_623
{
    #[Get('/admin/controller_623')]
    public function index_623(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_623/show/{id}')]
    public function show_623(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_623/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_623/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_623/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_623/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_623/{id}/delete')]
    public function delete($id)
    {

    }
}