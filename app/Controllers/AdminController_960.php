<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_960
{
    #[Get('/admin/controller_960')]
    public function index_960(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_960/show/{?id}')]
    public function show_960(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_960/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_960/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_960/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_960/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_960/{id}/delete')]
    public function delete($id)
    {

    }
}