<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_891
{
    #[Get('/admin/controller_891')]
    public function index_891(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_891/show/{id}')]
    public function show_891(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_891/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_891/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_891/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_891/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_891/{id}/delete')]
    public function delete($id)
    {

    }
}