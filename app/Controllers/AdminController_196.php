<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_196
{
    #[Get('/admin/controller_196')]
    public function index_196(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_196/show/{?id}')]
    public function show_196(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_196/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_196/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_196/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_196/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_196/{id}/delete')]
    public function delete($id)
    {

    }
}