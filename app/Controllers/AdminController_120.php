<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_120
{
    #[Get('/admin/controller_120')]
    public function index_120(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_120/show/{id}')]
    public function show_120(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_120/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_120/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_120/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_120/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_120/{id}/delete')]
    public function delete($id)
    {

    }
}