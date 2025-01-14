<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index(Request $request)
    {
        $dataList = Menu::all();
        return view('menu', ['data' => $dataList]);
    }

    public function show($id)
    {
        $dataList = Menu::findOrFail($id);

        return view('menu-detail', ['data' => $dataList]);
    }

    public function menuAdd(Request $request)
    {
        return view('menuAdd');
    }

    public function store(Request $request)
    {
        $data = Menu::create($request->all());
        return redirect('/menu');
    }
}
