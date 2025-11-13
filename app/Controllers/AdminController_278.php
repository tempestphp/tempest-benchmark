<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_278
{
    #[Get('/admin/controller_278')]
    public function index_278(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_278/show/{?id}')]
    public function show_278(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_278/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_278/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_278/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_278/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_278/{id}/delete')]
    public function delete($id)
    {

    }
}