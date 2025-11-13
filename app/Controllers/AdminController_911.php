<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_911
{
    #[Get('/admin/controller_911')]
    public function index_911()
    {

    }

    #[Get('/admin/controller_911/show/{?id}')]
    public function show_911(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_911/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_911/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_911/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_911/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_911/{id}/delete')]
    public function delete($id)
    {

    }
}