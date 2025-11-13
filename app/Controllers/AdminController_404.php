<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_404
{
    #[Get('/admin/controller_404')]
    public function index_404()
    {

    }

    #[Get('/admin/controller_404/{id}')]
    public function show_404($id)
    {

    }

    #[Get('/admin/controller_404/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_404/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_404/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_404/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_404/{id}/delete')]
    public function delete($id)
    {

    }
}