<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_317
{
    #[Get('/admin/controller_317')]
    public function index_317(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_317/show/{?id}')]
    public function show_317(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_317/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_317/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_317/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_317/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_317/{id}/delete')]
    public function delete($id)
    {

    }
}