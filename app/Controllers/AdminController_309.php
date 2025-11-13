<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_309
{
    #[Get('/admin/controller_309')]
    public function index_309(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_309/show/{id}')]
    public function show_309(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_309/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_309/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_309/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_309/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_309/{id}/delete')]
    public function delete($id)
    {

    }
}