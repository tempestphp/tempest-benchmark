<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_456
{
    #[Get('/admin/controller_456')]
    public function index_456(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_456/show/{?id}')]
    public function show_456(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_456/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_456/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_456/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_456/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_456/{id}/delete')]
    public function delete($id)
    {

    }
}