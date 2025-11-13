<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_602
{
    #[Get('/admin/controller_602')]
    public function index_602(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_602/show/{?id}')]
    public function show_602(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_602/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_602/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_602/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_602/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_602/{id}/delete')]
    public function delete($id)
    {

    }
}