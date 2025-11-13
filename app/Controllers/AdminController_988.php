<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_988
{
    #[Get('/admin/controller_988')]
    public function index_988(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_988/show/{?id}')]
    public function show_988(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_988/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_988/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_988/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_988/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_988/{id}/delete')]
    public function delete($id)
    {

    }
}