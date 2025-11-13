<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_881
{
    #[Get('/admin/controller_881')]
    public function index_881()
    {

    }

    #[Get('/admin/controller_881/show/{?id}')]
    public function show_881(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_881/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_881/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_881/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_881/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_881/{id}/delete')]
    public function delete($id)
    {

    }
}