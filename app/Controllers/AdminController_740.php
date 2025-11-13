<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_740
{
    #[Get('/admin/controller_740')]
    public function index_740(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_740/show/{id}')]
    public function show_740(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_740/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_740/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_740/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_740/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_740/{id}/delete')]
    public function delete($id)
    {

    }
}