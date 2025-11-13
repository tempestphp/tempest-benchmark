<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_018
{
    #[Get('/admin/controller_018')]
    public function index_018(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_018/show/{?id}')]
    public function show_018(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_018/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_018/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_018/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_018/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_018/{id}/delete')]
    public function delete($id)
    {

    }
}