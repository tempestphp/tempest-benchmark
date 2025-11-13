<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_677
{
    #[Get('/admin/controller_677')]
    public function index_677()
    {

    }

    #[Get('/admin/controller_677/show/{?id}')]
    public function show_677(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_677/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_677/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_677/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_677/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_677/{id}/delete')]
    public function delete($id)
    {

    }
}