<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_703
{
    #[Get('/admin/controller_703')]
    public function index_703(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_703/show/{?id}')]
    public function show_703(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_703/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_703/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_703/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_703/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_703/{id}/delete')]
    public function delete($id)
    {

    }
}