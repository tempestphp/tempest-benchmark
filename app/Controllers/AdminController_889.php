<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_889
{
    #[Get('/admin/controller_889')]
    public function index_889(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_889/show/{id}')]
    public function show_889(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_889/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_889/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_889/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_889/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_889/{id}/delete')]
    public function delete($id)
    {

    }
}