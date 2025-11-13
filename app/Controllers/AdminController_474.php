<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_474
{
    #[Get('/admin/controller_474')]
    public function index_474()
    {

    }

    #[Get('/admin/controller_474/show/{?id}')]
    public function show_474(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_474/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_474/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_474/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_474/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_474/{id}/delete')]
    public function delete($id)
    {

    }
}