<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_980
{
    #[Get('/admin/controller_980')]
    public function index_980(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_980/show/{id}')]
    public function show_980(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_980/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_980/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_980/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_980/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_980/{id}/delete')]
    public function delete($id)
    {

    }
}