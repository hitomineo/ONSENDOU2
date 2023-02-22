    <header>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right mt-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold">温泉について</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 font-semibold">ログイン</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold">サインアップ</a>
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
 <form method="POST" action="{{ route('login') }}" class="bg-home d-flex align-items-center w-150 h-150">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-11 col-lg-5 jumbotron bg-transparent mx-auto " style="box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.2)">
                <div class="text-center">
                    </br>
                     <img src="<?php echo e(asset('img/in.png')); ?>" width="50%" height="50%" class="mb-5 pt-5 mt-5">
                    </br>
                    <div class="form-group form-group-lg pb-3">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" autofocus autocomplete="email" placeholder="sample@example.com" required>
                    </div>
                    <div class="form-group form-group-lg">
                        <input id="password" type="password" name="password" autocomplete="current-password" placeholder="パスワード" required>
                    </div>
                </div>
                <div class="text-center pt-4 pb-4">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>
                <div class="text-center pt-3 ">
                    <button type="submit" class="btn btn-outline-secondary mb-4">{{ __('Log in') }}</button>
                </div>
            </div>
        </div>
    </div>
 </form>
        
</x-guest-layout>