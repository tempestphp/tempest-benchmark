<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_850
{
    #[Get('/admin/controller_850')]
    public function index_850(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_850/show/{id}')]
    public function show_850(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_850/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_850/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_850/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_850/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_850/{id}/delete')]
    public function delete($id)
    {

    }
}