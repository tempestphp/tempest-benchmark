<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_642
{
    #[Get('/admin/controller_642')]
    public function index_642(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_642/show/{?id}')]
    public function show_642(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_642/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_642/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_642/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_642/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_642/{id}/delete')]
    public function delete($id)
    {

    }
}