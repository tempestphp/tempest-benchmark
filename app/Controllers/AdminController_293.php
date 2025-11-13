<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_293
{
    #[Get('/admin/controller_293')]
    public function index_293(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_293/show/{?id}')]
    public function show_293(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_293/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_293/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_293/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_293/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_293/{id}/delete')]
    public function delete($id)
    {

    }
}