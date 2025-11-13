<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_698
{
    #[Get('/admin/controller_698')]
    public function index_698(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_698/show/{?id}')]
    public function show_698(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_698/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_698/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_698/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_698/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_698/{id}/delete')]
    public function delete($id)
    {

    }
}