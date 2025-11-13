<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_648
{
    #[Get('/admin/controller_648')]
    public function index_648(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_648/show/{id}')]
    public function show_648(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_648/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_648/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_648/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_648/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_648/{id}/delete')]
    public function delete($id)
    {

    }
}