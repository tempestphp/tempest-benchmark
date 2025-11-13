<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_732
{
    #[Get('/admin/controller_732')]
    public function index_732(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_732/show/{id}')]
    public function show_732(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_732/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_732/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_732/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_732/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_732/{id}/delete')]
    public function delete($id)
    {

    }
}