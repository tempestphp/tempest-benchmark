<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_835
{
    #[Get('/admin/controller_835')]
    public function index_835(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_835/show/{?id}')]
    public function show_835(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_835/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_835/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_835/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_835/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_835/{id}/delete')]
    public function delete($id)
    {

    }
}