@extends('layouts.landing')

@section('title', 'Login Page')

@section('content')
    <section class="account">
        <div class="container">
            <div class="account__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    <li data-tab="#login" class="tab-btn  active-btn"><span>Login</span></li>
                    <li data-tab="#register" class="tab-btn"><span>Register</span></li>
                </ul>
                <div class="tabs-content">
                    <!-- Login Tab -->
                    <div class="tab active-tab" id="login">
                        <div class="account__main-tab-inner">
                            <form class="account__form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="account__form-input-box">
                                    <input type="text" name="email" placeholder="Email" required>
                                </div>
                                <div class="account__form-input-box">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="account__form-btn-box">
                                    <button type="submit" class="thm-btn account__form-btn">Login now
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </button>
                                    <div class="checked-box">
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember"><span></span>Remember me?</label>
                                    </div>
                                </div>
                                <div class="account__form-forgot-password">
                                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Register Tab -->
                    <div class="tab" id="register">
                        <div class="account__main-tab-inner">
                            <form class="account__form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="account__form-input-box">
                                    <input type="text" name="name" placeholder="Username" required>
                                </div>
                                <div class="account__form-input-box">
                                    <input type="text" name="email" placeholder="Email" required>
                                </div>
                                <div class="account__form-input-box">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="account__form-input-box">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                        required>
                                </div>
                                <div class="account__form-btn-box">
                                    <button type="submit" class="thm-btn account__form-btn">Register
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </button>
                                    <div class="checked-box">
                                        <input type="checkbox" name="terms" id="terms" required>
                                        <label for="terms"><span></span>I agree to the terms and conditions</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
