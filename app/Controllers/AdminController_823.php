<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_823
{
    #[Get('/admin/controller_823')]
    public function index_823(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_823/show/{?id}')]
    public function show_823(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_823/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_823/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_823/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_823/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_823/{id}/delete')]
    public function delete($id)
    {

    }
}