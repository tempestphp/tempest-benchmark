<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_879
{
    #[Get('/admin/controller_879')]
    public function index_879()
    {

    }

    #[Get('/admin/controller_879/show/{?id}')]
    public function show_879(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_879/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_879/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_879/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_879/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_879/{id}/delete')]
    public function delete($id)
    {

    }
}