<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_017
{
    #[Get('/admin/controller_017')]
    public function index_017(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_017/show/{id}')]
    public function show_017(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_017/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_017/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_017/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_017/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_017/{id}/delete')]
    public function delete($id)
    {

    }
}