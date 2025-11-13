<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_267
{
    #[Get('/admin/controller_267')]
    public function index_267(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_267/show/{?id}')]
    public function show_267(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_267/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_267/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_267/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_267/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_267/{id}/delete')]
    public function delete($id)
    {

    }
}