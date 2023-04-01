<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaTestController extends Controller
{
    public function index()
    {
        // ('フォルダ名/ファイル名')
        return Inertia::render('Inertia/index');
    }

    public function show($id)
    {
      return Inertia::render('Inertia/Show', [
        // 引数で渡ってきたidをvue側へ渡せる
        'id' => $id
      ]);
    }
}
