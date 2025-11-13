<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_199
{
    #[Get('/admin/controller_199')]
    public function index_199(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_199/show/{?id}')]
    public function show_199(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_199/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_199/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_199/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_199/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_199/{id}/delete')]
    public function delete($id)
    {

    }
}