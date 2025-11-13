<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_718
{
    #[Get('/admin/controller_718')]
    public function index_718(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_718/show/{?id}')]
    public function show_718(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_718/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_718/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_718/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_718/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_718/{id}/delete')]
    public function delete($id)
    {

    }
}