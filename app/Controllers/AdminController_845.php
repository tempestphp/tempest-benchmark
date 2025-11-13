<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_845
{
    #[Get('/admin/controller_845')]
    public function index_845()
    {

    }

    #[Get('/admin/controller_845/show/{?id}')]
    public function show_845(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_845/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_845/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_845/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_845/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_845/{id}/delete')]
    public function delete($id)
    {

    }
}