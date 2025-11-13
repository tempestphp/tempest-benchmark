<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_859
{
    #[Get('/admin/controller_859')]
    public function index_859()
    {

    }

    #[Get('/admin/controller_859/show/{?id}')]
    public function show_859(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_859/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_859/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_859/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_859/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_859/{id}/delete')]
    public function delete($id)
    {

    }
}