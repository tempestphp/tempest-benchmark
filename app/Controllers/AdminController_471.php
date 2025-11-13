<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_471
{
    #[Get('/admin/controller_471')]
    public function index_471(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_471/show/{id}')]
    public function show_471(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_471/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_471/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_471/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_471/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_471/{id}/delete')]
    public function delete($id)
    {

    }
}