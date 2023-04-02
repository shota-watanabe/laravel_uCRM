<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        // ('フォルダ名/ファイル名')
        return Inertia::render('Inertia/index');
    }

    // createメソッドは、indexメソッドの次に書くことが多い
    public function create()
    {
      return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        return Inertia::render('Inertia/Show', [
          // 引数で渡ってきたidをvue側へ渡せる
          'id' => $id
        ]);
    }
    // 入力内容を$requestで受け取ることができる
    public function store(Request $request)
    {
        // useで読み込んだモデルをインスタンス化
        $InertiaTest = new InertiaTest();
        $InertiaTest->title = $request->title;
        $InertiaTest->content = $request->content;
        $InertiaTest->save();
        // to_route...laravel９から追加されたメソッド
        return to_route('inertia.index');
    }
}
