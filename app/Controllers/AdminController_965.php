<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_965
{
    #[Get('/admin/controller_965')]
    public function index_965()
    {

    }

    #[Get('/admin/controller_965/show/{?id}')]
    public function show_965(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_965/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_965/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_965/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_965/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_965/{id}/delete')]
    public function delete($id)
    {

    }
}