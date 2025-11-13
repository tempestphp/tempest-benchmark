<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_380
{
    #[Get('/admin/controller_380')]
    public function index_380(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_380/show/{id}')]
    public function show_380(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_380/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_380/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_380/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_380/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_380/{id}/delete')]
    public function delete($id)
    {

    }
}