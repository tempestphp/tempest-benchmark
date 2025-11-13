<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_087
{
    #[Get('/admin/controller_087')]
    public function index_087(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_087/show/{id}')]
    public function show_087(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_087/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_087/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_087/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_087/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_087/{id}/delete')]
    public function delete($id)
    {

    }
}