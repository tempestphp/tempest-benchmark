<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_901
{
    #[Get('/admin/controller_901')]
    public function index_901()
    {

    }

    #[Get('/admin/controller_901/show/{?id}')]
    public function show_901(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_901/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_901/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_901/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_901/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_901/{id}/delete')]
    public function delete($id)
    {

    }
}