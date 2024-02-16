<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class Controller_001
{
    #[Get('/controller_001')]
    public function index_001()
    {

    }

    #[Get('/controller_001/{id}')]
    public function show_001($id)
    {

    }

    #[Get('/controller_001/create')]
    public function create($id)
    {

    }

    #[Post('/controller_001/create')]
    public function store($id)
    {

    }

    #[Get('/controller_001/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/controller_001/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/controller_001/{id}/delete')]
    public function delete($id)
    {

    }
}