<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_925
{
    #[Get('/admin/controller_925')]
    public function index_925(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_925/show/{?id}')]
    public function show_925(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_925/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_925/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_925/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_925/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_925/{id}/delete')]
    public function delete($id)
    {

    }
}