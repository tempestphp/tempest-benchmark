<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_497
{
    #[Get('/admin/controller_497')]
    public function index_497(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_497/show/{?id}')]
    public function show_497(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_497/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_497/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_497/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_497/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_497/{id}/delete')]
    public function delete($id)
    {

    }
}