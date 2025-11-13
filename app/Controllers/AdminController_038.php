<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_038
{
    #[Get('/admin/controller_038')]
    public function index_038(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_038/show/{id}')]
    public function show_038(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_038/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_038/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_038/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_038/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_038/{id}/delete')]
    public function delete($id)
    {

    }
}