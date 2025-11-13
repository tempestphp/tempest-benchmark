<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_916
{
    #[Get('/admin/controller_916')]
    public function index_916(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_916/show/{id}')]
    public function show_916(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_916/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_916/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_916/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_916/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_916/{id}/delete')]
    public function delete($id)
    {

    }
}