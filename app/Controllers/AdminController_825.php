<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_825
{
    #[Get('/admin/controller_825')]
    public function index_825(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_825/show/{?id}')]
    public function show_825(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_825/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_825/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_825/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_825/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_825/{id}/delete')]
    public function delete($id)
    {

    }
}