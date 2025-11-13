<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_776
{
    #[Get('/admin/controller_776')]
    public function index_776(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_776/show/{?id}')]
    public function show_776(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_776/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_776/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_776/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_776/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_776/{id}/delete')]
    public function delete($id)
    {

    }
}