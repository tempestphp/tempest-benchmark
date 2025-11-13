<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_151
{
    #[Get('/admin/controller_151')]
    public function index_151(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_151/show/{?id}')]
    public function show_151(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_151/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_151/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_151/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_151/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_151/{id}/delete')]
    public function delete($id)
    {

    }
}