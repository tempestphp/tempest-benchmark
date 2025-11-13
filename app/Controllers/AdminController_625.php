<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_625
{
    #[Get('/admin/controller_625')]
    public function index_625(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_625/show/{?id}')]
    public function show_625(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_625/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_625/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_625/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_625/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_625/{id}/delete')]
    public function delete($id)
    {

    }
}