<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_545
{
    #[Get('/admin/controller_545')]
    public function index_545(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_545/show/{id}')]
    public function show_545(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_545/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_545/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_545/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_545/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_545/{id}/delete')]
    public function delete($id)
    {

    }
}