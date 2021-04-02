<?php

namespace LaraDev\Http\Controllers\Admin;

use Illuminate\Http\Request;
use LaraDev\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }

    public function team()
    {
        return view('admin.users.team');
    }

    public function create()
    {
        return view('admin.users.create');

    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
