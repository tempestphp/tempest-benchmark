<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_749
{
    #[Get('/admin/controller_749')]
    public function index_749(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_749/show/{?id}')]
    public function show_749(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_749/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_749/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_749/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_749/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_749/{id}/delete')]
    public function delete($id)
    {

    }
}