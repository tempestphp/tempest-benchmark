<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_712
{
    #[Get('/admin/controller_712')]
    public function index_712(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_712/show/{?id}')]
    public function show_712(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_712/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_712/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_712/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_712/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_712/{id}/delete')]
    public function delete($id)
    {

    }
}