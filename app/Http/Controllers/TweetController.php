<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function index()
    {
        //ダミーデータ設定
        // ダミーデータ
        $tweets = [
            (object) [
                'id' => 1,
                'title' => 'タイトル1',
                'body' => '本文1',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
        ];
        //tweetsというキーを定義してビューファイル側で$tweetsという変数が使用できるようにする
        return view('tweets.index', ['tweets' => $tweets]);
    }
}
