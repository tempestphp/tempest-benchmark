<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_937
{
    #[Get('/admin/controller_937')]
    public function index_937(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_937/show/{?id}')]
    public function show_937(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_937/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_937/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_937/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_937/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_937/{id}/delete')]
    public function delete($id)
    {

    }
}