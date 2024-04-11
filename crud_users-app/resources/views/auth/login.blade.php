@extends('dashboard')

@section('content')
    <section>
        <div class="card-login">
            <div class="card-title">
                <h1>Màn hình đăng nhập</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('user.authUser') }}">
                    @csrf
                    <div class="input">
                        <label>Username</label>
                        <input type="text" class="user" placeholder="Email" id="email" name="email" required
                            autofocus><br>
                        <label>Mật khẩu</label>
                        <input type="password" class="pass" placeholder="Password" id="password" name="password"
                            required>
                    </div>
                    <button class="btn-login" type="button">Đăng Nhập</button>
                </form>
                <div class="card-end">
                    <a href="update.html">Quên mật khẩu</a>
                </div>
                <input type="checkbox" class="mt-2"><span>Ghi nhớ đăng nhập</span>
            </div>
        </div>
    </section>
@endsection
