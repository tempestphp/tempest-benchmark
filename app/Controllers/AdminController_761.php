<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_761
{
    #[Get('/admin/controller_761')]
    public function index_761(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_761/show/{?id}')]
    public function show_761(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_761/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_761/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_761/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_761/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_761/{id}/delete')]
    public function delete($id)
    {

    }
}