<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_822
{
    #[Get('/admin/controller_822')]
    public function index_822(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_822/show/{?id}')]
    public function show_822(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_822/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_822/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_822/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_822/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_822/{id}/delete')]
    public function delete($id)
    {

    }
}