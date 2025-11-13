<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_133
{
    #[Get('/admin/controller_133')]
    public function index_133(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_133/show/{?id}')]
    public function show_133(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_133/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_133/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_133/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_133/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_133/{id}/delete')]
    public function delete($id)
    {

    }
}