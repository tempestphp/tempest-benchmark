<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_573
{
    #[Get('/admin/controller_573')]
    public function index_573()
    {

    }

    #[Get('/admin/controller_573/show/{?id}')]
    public function show_573(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_573/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_573/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_573/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_573/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_573/{id}/delete')]
    public function delete($id)
    {

    }
}