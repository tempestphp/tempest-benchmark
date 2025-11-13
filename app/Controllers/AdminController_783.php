<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_783
{
    #[Get('/admin/controller_783')]
    public function index_783(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_783/show/{?id}')]
    public function show_783(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_783/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_783/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_783/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_783/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_783/{id}/delete')]
    public function delete($id)
    {

    }
}