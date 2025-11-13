<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_932
{
    #[Get('/admin/controller_932')]
    public function index_932()
    {

    }

    #[Get('/admin/controller_932/show/{?id}')]
    public function show_932(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_932/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_932/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_932/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_932/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_932/{id}/delete')]
    public function delete($id)
    {

    }
}