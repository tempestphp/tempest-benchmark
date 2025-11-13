<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_533
{
    #[Get('/admin/controller_533')]
    public function index_533()
    {

    }

    #[Get('/admin/controller_533/show/{?id}')]
    public function show_533(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_533/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_533/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_533/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_533/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_533/{id}/delete')]
    public function delete($id)
    {

    }
}