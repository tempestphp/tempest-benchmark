<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_591
{
    #[Get('/admin/controller_591')]
    public function index_591(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_591/show/{?id}')]
    public function show_591(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_591/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_591/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_591/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_591/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_591/{id}/delete')]
    public function delete($id)
    {

    }
}