<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_674
{
    #[Get('/admin/controller_674')]
    public function index_674(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_674/show/{id}')]
    public function show_674(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_674/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_674/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_674/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_674/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_674/{id}/delete')]
    public function delete($id)
    {

    }
}