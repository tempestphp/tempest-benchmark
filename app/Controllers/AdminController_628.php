<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_628
{
    #[Get('/admin/controller_628')]
    public function index_628(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_628/show/{?id}')]
    public function show_628(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_628/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_628/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_628/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_628/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_628/{id}/delete')]
    public function delete($id)
    {

    }
}