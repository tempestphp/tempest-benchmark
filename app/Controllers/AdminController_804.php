<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_804
{
    #[Get('/admin/controller_804')]
    public function index_804(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_804/show/{?id}')]
    public function show_804(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_804/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_804/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_804/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_804/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_804/{id}/delete')]
    public function delete($id)
    {

    }
}