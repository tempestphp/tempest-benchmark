<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_518
{
    #[Get('/admin/controller_518')]
    public function index_518(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_518/show/{id}')]
    public function show_518(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_518/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_518/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_518/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_518/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_518/{id}/delete')]
    public function delete($id)
    {

    }
}