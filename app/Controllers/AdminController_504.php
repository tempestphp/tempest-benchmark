<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_504
{
    #[Get('/admin/controller_504')]
    public function index_504(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_504/show/{?id}')]
    public function show_504(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_504/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_504/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_504/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_504/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_504/{id}/delete')]
    public function delete($id)
    {

    }
}