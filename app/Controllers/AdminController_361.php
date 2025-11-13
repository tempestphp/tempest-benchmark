<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_361
{
    #[Get('/admin/controller_361')]
    public function index_361(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_361/show/{?id}')]
    public function show_361(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_361/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_361/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_361/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_361/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_361/{id}/delete')]
    public function delete($id)
    {

    }
}