<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_873
{
    #[Get('/admin/controller_873')]
    public function index_873(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_873/show/{?id}')]
    public function show_873(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_873/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_873/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_873/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_873/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_873/{id}/delete')]
    public function delete($id)
    {

    }
}