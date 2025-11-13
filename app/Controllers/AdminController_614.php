<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_614
{
    #[Get('/admin/controller_614')]
    public function index_614(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_614/show/{?id}')]
    public function show_614(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_614/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_614/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_614/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_614/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_614/{id}/delete')]
    public function delete($id)
    {

    }
}