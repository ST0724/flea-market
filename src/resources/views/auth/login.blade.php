@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
    <div class="content">
        <h2 class="content__title">ログイン</h2>

        <form class="form" action="/login" method="post">
        @csrf
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label">ユーザー名/メールアドレス</span>
                </div>
                <div class="form__group--input">
                    <input type="text" name="email" value="{{ old('email') }}">
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label">パスワード</span>
                </div>
                <div class="form__group--input">
                    <input type="password" name="password">
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            
            <div class="form__button">
                <button class="form__button--submit" type="submit">ログイン</button>
            </div>
        </form>

        <div class="link__register">
            <a href="/register">会員登録はこちら</a>
        </div>
    </div>
@endsection