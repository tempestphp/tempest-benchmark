<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_750
{
    #[Get('/admin/controller_750')]
    public function index_750(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_750/show/{?id}')]
    public function show_750(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_750/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_750/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_750/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_750/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_750/{id}/delete')]
    public function delete($id)
    {

    }
}