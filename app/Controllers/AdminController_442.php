<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_442
{
    #[Get('/admin/controller_442')]
    public function index_442(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_442/show/{?id}')]
    public function show_442(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_442/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_442/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_442/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_442/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_442/{id}/delete')]
    public function delete($id)
    {

    }
}