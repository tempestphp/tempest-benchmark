<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_289
{
    #[Get('/admin/controller_289')]
    public function index_289(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_289/show/{?id}')]
    public function show_289(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_289/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_289/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_289/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_289/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_289/{id}/delete')]
    public function delete($id)
    {

    }
}