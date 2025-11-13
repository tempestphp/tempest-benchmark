<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_913
{
    #[Get('/admin/controller_913')]
    public function index_913(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_913/show/{id}')]
    public function show_913(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_913/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_913/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_913/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_913/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_913/{id}/delete')]
    public function delete($id)
    {

    }
}