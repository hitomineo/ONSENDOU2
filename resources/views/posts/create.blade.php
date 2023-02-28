<!--@extends('layouts.post') // 親テンプレート'layouts.post'内に表示するための記述-->

@section('content')
  <div class="create-items">
    <div class="form">
      <form action="/posts" method="POST" class="bg-home d-flex align-items-center mt-4 pt-4">
            @csrf         
        <x-guest-layout>     
          <div class="container mt-4">
              </br>
                <div class="mt-4 pt-4 jumbotron bg-transparent" style="box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.2)">
                  <div class="ml-4">
                    </br>
                    
                      <div class ="mt-4 ml-4 mb-4">
                        <img src="<?php echo e(asset('img/toukou.png')); ?>" width="30%" height="30%" class="mb-5 pt-5 mt-5 mb-4 pb-4 ">
                      </div>
                      
                      </br>
                      
                      <div class="input-form form-group-lg ml-3 mt-4">
                        <label for="onsen_name" class="">温泉の名前</label>
                          <div class="form-group form-group-lg">
                            <input id="onsen_name"type="name" name="name" value="{{ old('onsen_name') }}" autofocus autocomplete="onsen_name" placeholder="温泉の名前" required class="ml-4 mt-4">
                          </div>
                        <!--<input name="onsen_name">-->
                      </div>
        
                      <div class="input-form form-group-lg  ml-3 mt-4">
                         <div class="">住所</div>
                          <div class="form-group form-group-lg">
                           <input id="address"  type="address" name="address" value="{{ old('address') }}" autofocus autocomplete="onsen_name" placeholder="住所" required class="ml-4 mt-4 ">
                            <!--<textarea name="address"></textarea>-->
                          </div>
                      </div>    
                      
                      <!--駐車場-->
                      <!--<div class="input-form ml-3 mt-4">-->
                      <!--  <div class="">駐車場</div>-->
                      <!--    <select name="parking" class="form-control ml-4 mt-4">-->
                      <!--     <option value="">▼ 以下から選択</option>-->
                      <!--      @#foreach#$parkings as $p)-->
                      <!--          <option value="{# $parking->value }}">{#$parking->label_parking) }}</option>-->
                      <!--      @#endforeach-->
                      <!--  </select>-->
                      <!--   </div>  -->
                      <div class="mt-4 mb-4 ml-3">駐車場</div>
                        <div class="form-check form-check-inline mt-4 ml-4">
                          <input type="checkbox" class="form-check-input" id="parking" value="parking">
                          <label for="inlineCheckbox1" class="form-check-label">駐車場あり</label>
                        </div>
                        <div class="form-check form-check-inline ml-4">
                          <input type="checkbox" class="form-check-input" id="parking" value="parking2">
                          <label for="inlineCheckbox2" class="form-check-label">駐車場なし</label>
                        </div>
                        <div class="form-check form-check-inline ml-4">
                          <input type="checkbox" class="form-check-input" id="inlineCheckbox3" value="option3">
                          <label for="inlineCheckbox3" class="form-check-label">近辺に駐車場あり</label>
                        </div>
                      
                      <!--支払い方-->
                      <!--<div class="input-form ml-3 mt-4">-->
                        <!--<div class ="ml-4">支払い方</div>-->
                          <!--<select name="payment" class="form-control">-->
                          <!--  <option value="">▼ 以下から選択</option>-->
                            <!--@#foreach#$payments as $payment)-->
                            <!--    <option value="{#$payment->value }}">{ $payment->label_payment) }}</option>-->
                            <!--@#endforeach-->
                          <!--</select>-->
                      <div class="mt-4 mb-4 ml-3">支払い方</div>
                        <div class="form-check form-check-inline mt-4 ml-4">
                          <input type="checkbox" class="form-check-input" id="payment" value="payment">
                          <label for="inlineCheckbox1" class="form-check-label">現金</label>
                        </div>
                        <div class="form-check form-check-inline ml-4">
                          <input type="checkbox" class="form-check-input" id="payment" value="payment">
                          <label for="inlineCheckbox2" class="form-check-label">クレジット</label>
                        </div>
                        <div class="form-check form-check-inline ml-4">
                          <input type="checkbox" class="form-check-input" id="payment" value="payment">
                          <label for="inlineCheckbox3" class="form-check-label">電子マネー</label>
                        </div>
                        <div class="form-check form-check-inline ml-4">
                          <input type="checkbox" class="form-check-input" id="payment" value="payment">
                          <label for="inlineCheckbox3" class="form-check-label">QR決済</label>
                        </div>
                        
        
                      <div class="input-form ml-3 mt-4">
                        <label for="toiletry" class="ml-4 mt-4" >シャンプー・コンディショナー</label>
                        <textarea name="toiletry" class="ml-3 mt-4 mr-3" style = "width:90%; height:30px;"></textarea>
                      </div>
        
                        <!--タオルなしあり-->
                       <!--<select name="towel_stock" class="form-control">-->
                       <!--           <option value="">▼ 以下から選択</option>-->
                        
                        <!--@#foreach$towel_stocks as $towel_stock)-->
                        <!--    <option value="{ $towel_stock->value }}">{ $category->label_towel) }}</option>-->
                        <!--@#endforeach-->
                        <!--</select>        -->
                        <div class="mt-4 mb-4 ml-4">タオルの有無</div>
                          <div class="form-check form-check-inline ml-4">
                            <input type="checkbox" class="form-check-input" id="towel_stock" value="towel_stock">
                            <label for="inlineCheckbox1" class="form-check-label">タオル有り</label>
                          </div>
                          <div class="form-check form-check-inline ml-4">
                            <input type="checkbox" class="form-check-input" id="towel_stock" value="towel_stock">
                            <label for="inlineCheckbox2" class="form-check-label">タオルなし</label>
                          </div>
                       
                        
        
                          <div class="input-form mt-4 mb-4 ml-4">
                            <label for="skin_product">化粧水</label>
                            <textarea name="skin_product" class="ml-3 mt-4 mr-3" style = "width:90%; height:30px;"></textarea>
                          </div>
        
                          <div class="input-form mt-4 mb-4 ml-4">
                            <label for="hairdryer">ドライヤー</label>
                            <textarea name="hairdryer" class="ml-3 mt-4 mr-3" style = "width:90%; height:30px;"></textarea>
                          </div>
        
                          <div class="input-form mt-4 mb-4 ml-4">
                            <label for="luggage">荷物の預け方</label>
                            <textarea name="luggage" class="ml-3 mt-4 mr-3" style = "width:90%; height:30px;"></textarea>
                          </div>
        
                          <div class="input-form mt-4 mb-4 ml-4">
                            <label for="detail">温泉情報</label>
                            <textarea name="detail" class="ml-3 mt-4 mr-3" style = "width:90%; height:30px;"></textarea>
                          </div>
                          
                          <!--温泉画像-->
                          <input id="image" type="file" name="image" class="input-form mt-4 mb-4 ml-4">
                          <div class="input-form">
                          
                            <!--<input type="submit" value="Submit">-->
                            <button type="submit" value="Submit" class="btn btn-outline-secondary mb-4 mt-4 ">{{ __('投稿') }}</button>
                          </div>
                  </div> 
                </div> 
          </div>    
      </form>
            
     </div>
  </div>
  
      
       </x-guest-layout>
@endsection      



