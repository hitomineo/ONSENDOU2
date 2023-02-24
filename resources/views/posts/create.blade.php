<!--@extends('layouts.post') // 親テンプレート'layouts.post'内に表示するための記述-->

@section('content')
  <div class="create-items">
    <div class="form">
      <form action="/posts" method="POST">
            @csrf         
        <div class="input-form">
          <label for="onsen_name">温泉の名前</label>
          <input id="onsen_name" type="name" name="name" value="{{ old('onsen_name') }}" autofocus autocomplete="onsen_name" placeholder="温泉の名前" required>
          <input name="onsen_name">
        </div>
        
        <div class="input-form">
          <label for="address">住所</label>
          <textarea name="address"></textarea>
        </div>
        <!--駐車場-->
        <select name="parking" class="form-control">
                    <option value="">▼ 以下から選択</option>
                    <!--@#foreach#$parkings as $p)-->
                        <!--<option value="{# $p->value }}">{# $p->label_parking#) }}</option>-->
                    <!--@#endforeach-->
                </select>
        <!--支払い方-->
        <select name="payment" class="form-control">
                    <option value="">▼ 以下から選択</option>
                    <!--@#foreach#$payments as $payment)-->
                    <!--    <option value="{#$payment->value }}">{ $payment->label_payment) }}</option>-->
                    <!--@#endforeach-->
                </select>        
        
        <div class="input-form">
          <label for="toiletry">シャンプー・コンディショナー</label>
          <textarea name="toiletry"></textarea>
        </div>
        
        <!--タオルなしあり-->
         <select name="towel_stock" class="form-control">
                    <option value="">▼ 以下から選択</option>
                    
                    <!--@#foreach$towel_stocks as $towel_stock)-->
                    <!--    <option value="{ $towel_stock->value }}">{ $category->label_towel) }}</option>-->
                    <!--@#endforeach-->
                </select>        
        
        <div class="input-form">
          <label for="skin_product">化粧水</label>
          <textarea name="skin_product"></textarea>
        </div>
        
        <div class="input-form">
          <label for="hairdryer">ドライヤー</label>
          <textarea name="hairdryer"></textarea>
        </div>
        
        <div class="input-form">
          <label for="luggage">荷物の預け方</label>
          <textarea name="luggage"></textarea>
        </div>
        
        <div class="input-form">
          <label for="detail">温泉情報</label>
          <textarea name="detail"></textarea>
        </div>
        <!--温泉画像-->
        <input id="image" type="file" name="image">
        <div class="input-form">
          
          <!--<input type="submit" value="Submit">-->
          <button type="submit" value="Submit" class="btn btn-outline-secondary mb-4">{{ __('投稿') }}</button>
        </div>
      </form>
@endsection      