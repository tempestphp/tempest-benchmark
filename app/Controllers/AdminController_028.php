<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_028
{
    #[Get('/admin/controller_028')]
    public function index_028(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_028/show/{?id}')]
    public function show_028(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_028/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_028/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_028/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_028/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_028/{id}/delete')]
    public function delete($id)
    {

    }
}