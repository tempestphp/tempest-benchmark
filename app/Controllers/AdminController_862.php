<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_862
{
    #[Get('/admin/controller_862')]
    public function index_862(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_862/show/{?id}')]
    public function show_862(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_862/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_862/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_862/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_862/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_862/{id}/delete')]
    public function delete($id)
    {

    }
}