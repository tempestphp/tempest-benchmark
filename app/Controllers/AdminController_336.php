<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_336
{
    #[Get('/admin/controller_336')]
    public function index_336(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_336/show/{?id}')]
    public function show_336(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_336/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_336/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_336/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_336/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_336/{id}/delete')]
    public function delete($id)
    {

    }
}