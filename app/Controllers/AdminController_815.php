<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_815
{
    #[Get('/admin/controller_815')]
    public function index_815()
    {

    }

    #[Get('/admin/controller_815/show/{?id}')]
    public function show_815(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_815/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_815/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_815/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_815/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_815/{id}/delete')]
    public function delete($id)
    {

    }
}