<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_968
{
    #[Get('/admin/controller_968')]
    public function index_968(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_968/show/{?id}')]
    public function show_968(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_968/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_968/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_968/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_968/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_968/{id}/delete')]
    public function delete($id)
    {

    }
}