@extends('navbar.layout')

@section('content')

<head>

    <title>登録</title>

</head>

<div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card" style="margin-top: 155px; margin-bottom: 120px;">
                <div class="d-flex justify-content-center">
                </div>
                <div class="brand_logo_container">
                        <img src="img/ball.png" class="brand_logo" alt="Logo" style="height: 150px; margin-left: 50px;">
                    </div><br>
                    <h3 class="text-center">Mitraaa</h3>
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif

                    <br>

     <form action="/mitreg" method="post">

        @csrf

        <div class="input-group mb-3">
           <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control input_user" value="" placeholder="メール" autofocus required> 
           </div>
        </div>

        <div class="input-group mb-3">
           <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-house-damage"></i></span>
                <input type="text" name="name" class="form-control input_user" value="" placeholder="Mitra Name"  required> 
           </div>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" name="password" class="form-control input_pass" value="" placeholder="パスワード" required>
            </div>
        </div>

        <div>
                <label for="customControlInline">あります？<a href="{{ route('mitlog') }}">こちに</a></label>
        </div>
        <br>

        <button type="submit" class="btn login_btn">登録</button>

     </form>
    </div>
  </div>
</div>

@endsection