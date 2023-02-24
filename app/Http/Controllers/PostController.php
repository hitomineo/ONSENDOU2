<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Enums\Parking;
use App\Enums\Payment;
use App\Enums\Towel_stock;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // データベース内のすべてのPostを取得し、post変数に代入
      $posts = Post::all();
      // 'posts'フォルダ内の'index'viewファイルを返す。
      // その際にview内で使用する変数を代入します。
      return view('posts/index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       
       $enum_parking = Parking::cases();
       $enum_payment = Payment::cases();
       $enum_towel = Towel_stock::cases();
       return view('posts/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
         // 新しい Post を作成
         $post = new Post;
         // フォームから送られてきたデータをそれぞれ代入
         $post->user_id = $request->user_id;
         $post->onsen_name = $request->onsen_name;
         $post->detail = $request->detail;
         $post->address = $request->address;
         $post->latitude = $request->latitude;
         $post->longitude = $request->longitude;
        //  $post->parking = $request->parking;
        //  $post->payment = $request->payment;
         $post->toiletry = $request->toiletry;
        //  $post->towel_stock = $request->towel_stock;
         $post->skin_product = $request->skin_product;
         $post->hairdryer= $request->hairdryer;
         $post->luggage = $request->luggage;
         
        //Enum parking
        $parkings = Parking::cases();
        $parkings = Arr::pluck($parkings, 'value');
        $request->validate([
            'parking' => ['required', Rule::in($parkings)]
        ]);
        
        //Enum payment
        $payments = Payment::cases();
        $payments = Arr::pluck($payments, 'value');
        $request->validate([
            'payment' => ['required', Rule::in($payments)]
        ]);
        
        //Enum towel
        $towel_stock = Towel_stock::cases();
        $towel_stocks = Arr::pluck($towel_stocks, 'value');
        $request->validate([
            'towel_stock' => ['required', Rule::in($towel_stocks)]
        ]);
         
         
         // 画像ファイルの保存場所指定
        if(request('image')){
            $filename=request()->file('image')->getClientOriginalName();
            $inputs['image']=request('image')->storeAs('public/images', $filename);
        }
         // データベースに保存
         $post->save();
         // indexページへ遷移
         return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): Response
    {
         $post = Post::find($id); // idでItemを探し出す
         return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): Response
    {
         $post = Post::find($id);
         return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
         $post = Post::find($id);
         $post->onsen_name = $request->onsen_name;
         $post->address = $request->address;
         $post->skin_product = $request->skin_product;
         $post->save();
         return redirect('post/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
         $post = Post::find($id);
         $post->delete();
         return redirect('/post');
    }
}
