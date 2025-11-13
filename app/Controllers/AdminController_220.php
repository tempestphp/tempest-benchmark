<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_220
{
    #[Get('/admin/controller_220')]
    public function index_220()
    {

    }

    #[Get('/admin/controller_220/show/{?id}')]
    public function show_220(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_220/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_220/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_220/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_220/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_220/{id}/delete')]
    public function delete($id)
    {

    }
}