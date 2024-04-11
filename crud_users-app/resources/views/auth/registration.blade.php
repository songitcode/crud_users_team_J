@extends('dashboard')

@section('content')
    <section>
        <div class="card-login">
            <div class="card-title">
                <h1>Màn hình đăng nhập</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('user.postUser') }}" method="POST">
                    @csrf
                    <div class="input">
                        <div>
                            <input type="text" placeholder="Name" id="name" name="name" required autofocus>
                        </div>
                        <div>
                            <input type="text" placeholder="Email" id="email_address" name="email"
                                required autofocus>
                        </div>
                        <div>
                            <input type="password" placeholder="Password" id="password"
                                name="password" required>
                        </div>
                        <div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember"> Remember Me</label>
                            </div>
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                        </div>
                    </div>
                </form>
                <input type="checkbox"><span>Ghi nhớ đăng nhập</span>
            </div>
            <div class="card-end">
                <a href="update.html">Quên mật khẩu</a>
                <button class="btn-register">Đăng ký</button>
            </div>
        </div>
    </section>
@endsection
