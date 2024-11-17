@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
    <div class="content">
        <h2 class="content__title">会員登録</h2>

        <form class="form" action="/register" method="post">
        @csrf
            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label">ユーザー名</span>
                </div>
                <div class="form__group--input">
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label">メールアドレス</span>
                </div>
                <div class="form__group--input">
                    <input type="email" name="email" value="{{ old('email') }}">
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
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group--title">
                    <span class="form__label">確認用パスワード</span>
                </div>
                <div class="form__group--input">
                    <input type="password" name="password_confirmation">
                </div>
                <div class="form__error">
                    @error('password_confirmation')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            
            <div class="form__button">
                <button class="form__button--submit" type="submit">登録する</button>
            </div>
        </form>

        <div class="link__login">
            <a href="/login">ログインはこちら</a>
        </div>
    </div>
@endsection