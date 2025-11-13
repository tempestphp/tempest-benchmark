<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_516
{
    #[Get('/admin/controller_516')]
    public function index_516(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_516/show/{id}')]
    public function show_516(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_516/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_516/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_516/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_516/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_516/{id}/delete')]
    public function delete($id)
    {

    }
}