<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_738
{
    #[Get('/admin/controller_738')]
    public function index_738(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_738/show/{id}')]
    public function show_738(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_738/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_738/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_738/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_738/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_738/{id}/delete')]
    public function delete($id)
    {

    }
}