<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_770
{
    #[Get('/admin/controller_770')]
    public function index_770(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_770/show/{?id}')]
    public function show_770(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_770/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_770/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_770/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_770/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_770/{id}/delete')]
    public function delete($id)
    {

    }
}