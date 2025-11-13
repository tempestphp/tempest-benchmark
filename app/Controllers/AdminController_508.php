<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_508
{
    #[Get('/admin/controller_508')]
    public function index_508(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_508/show/{?id}')]
    public function show_508(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_508/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_508/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_508/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_508/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_508/{id}/delete')]
    public function delete($id)
    {

    }
}