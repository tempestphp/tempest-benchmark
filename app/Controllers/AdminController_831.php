<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_831
{
    #[Get('/admin/controller_831')]
    public function index_831()
    {

    }

    #[Get('/admin/controller_831/show/{?id}')]
    public function show_831(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_831/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_831/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_831/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_831/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_831/{id}/delete')]
    public function delete($id)
    {

    }
}