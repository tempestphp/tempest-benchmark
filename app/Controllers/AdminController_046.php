<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_046
{
    #[Get('/admin/controller_046')]
    public function index_046(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_046/show/{id}')]
    public function show_046(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_046/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_046/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_046/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_046/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_046/{id}/delete')]
    public function delete($id)
    {

    }
}