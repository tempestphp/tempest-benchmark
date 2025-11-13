<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_786
{
    #[Get('/admin/controller_786')]
    public function index_786(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_786/show/{?id}')]
    public function show_786(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_786/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_786/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_786/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_786/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_786/{id}/delete')]
    public function delete($id)
    {

    }
}