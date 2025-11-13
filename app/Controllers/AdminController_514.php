<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_514
{
    #[Get('/admin/controller_514')]
    public function index_514()
    {

    }

    #[Get('/admin/controller_514/show/{?id}')]
    public function show_514(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_514/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_514/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_514/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_514/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_514/{id}/delete')]
    public function delete($id)
    {

    }
}