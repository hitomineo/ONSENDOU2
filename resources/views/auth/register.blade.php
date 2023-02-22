
    <header>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right mt-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold 
                        focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">温泉について</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 font-semibold   ">ログイン</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold ">サインアップ</a>
                        @endif    
                        @if (Route::has('/'))    
                            <a href="{{ route('/welcome') }}" class="ml-4 font-semibold">温泉道について</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-left">
                    <img src="<?php echo e(asset('img/ONSENDOU.png')); ?>" width="20%" height="20%" class="mb-5 pt-5 mt-5">
                </div>
            </div> 
    </header>  
    
    
    
      





<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="container">
          <div class="row">
            <div class="col-11 col-lg-5 jumbotron bg-transparent mx-auto " style="box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.2)">
                <div class="text-center">
                    </br>
                  <img src="<?php echo e(asset('img/up.png')); ?>" width="50%" height="50%" class="mb-5 pt-5 mt-5">
                    </br>
                    <div>
                        <input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="ユーザーネーム" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-text-input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="メールアドレス" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-text-input id="password" placeholder="パスワード" 
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-text-input id="password_confirmation"  placeholder="確認パスワード"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password"/>
            
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
        
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
        
        
        
        
        
    </form>
</x-guest-layout>
