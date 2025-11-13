<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_310
{
    #[Get('/admin/controller_310')]
    public function index_310(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_310/show/{id}')]
    public function show_310(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_310/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_310/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_310/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_310/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_310/{id}/delete')]
    public function delete($id)
    {

    }
}