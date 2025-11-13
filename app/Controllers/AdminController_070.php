<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_070
{
    #[Get('/admin/controller_070')]
    public function index_070()
    {

    }

    #[Get('/admin/controller_070/show/{?id}')]
    public function show_070(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_070/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_070/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_070/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_070/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_070/{id}/delete')]
    public function delete($id)
    {

    }
}