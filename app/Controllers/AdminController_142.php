<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_142
{
    #[Get('/admin/controller_142')]
    public function index_142(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_142/show/{id}')]
    public function show_142(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_142/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_142/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_142/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_142/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_142/{id}/delete')]
    public function delete($id)
    {

    }
}