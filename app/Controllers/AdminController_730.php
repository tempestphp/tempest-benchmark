<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_730
{
    #[Get('/admin/controller_730')]
    public function index_730(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_730/show/{?id}')]
    public function show_730(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_730/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_730/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_730/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_730/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_730/{id}/delete')]
    public function delete($id)
    {

    }
}