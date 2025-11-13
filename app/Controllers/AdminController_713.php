<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_713
{
    #[Get('/admin/controller_713')]
    public function index_713(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_713/show/{id}')]
    public function show_713(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_713/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_713/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_713/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_713/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_713/{id}/delete')]
    public function delete($id)
    {

    }
}