<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_855
{
    #[Get('/admin/controller_855')]
    public function index_855(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_855/show/{id}')]
    public function show_855(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_855/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_855/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_855/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_855/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_855/{id}/delete')]
    public function delete($id)
    {

    }
}