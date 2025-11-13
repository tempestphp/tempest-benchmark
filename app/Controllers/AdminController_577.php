<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_577
{
    #[Get('/admin/controller_577')]
    public function index_577(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_577/show/{id}')]
    public function show_577(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_577/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_577/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_577/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_577/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_577/{id}/delete')]
    public function delete($id)
    {

    }
}