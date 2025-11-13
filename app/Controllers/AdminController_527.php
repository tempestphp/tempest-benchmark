<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_527
{
    #[Get('/admin/controller_527')]
    public function index_527(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_527/show/{?id}')]
    public function show_527(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_527/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_527/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_527/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_527/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_527/{id}/delete')]
    public function delete($id)
    {

    }
}