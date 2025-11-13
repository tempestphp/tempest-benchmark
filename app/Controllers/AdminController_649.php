<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_649
{
    #[Get('/admin/controller_649')]
    public function index_649(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_649/show/{id}')]
    public function show_649(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_649/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_649/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_649/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_649/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_649/{id}/delete')]
    public function delete($id)
    {

    }
}