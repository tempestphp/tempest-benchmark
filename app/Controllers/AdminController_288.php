<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_288
{
    #[Get('/admin/controller_288')]
    public function index_288(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_288/show/{?id}')]
    public function show_288(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_288/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_288/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_288/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_288/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_288/{id}/delete')]
    public function delete($id)
    {

    }
}