<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_798
{
    #[Get('/admin/controller_798')]
    public function index_798(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_798/show/{id}')]
    public function show_798(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_798/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_798/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_798/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_798/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_798/{id}/delete')]
    public function delete($id)
    {

    }
}