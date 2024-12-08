@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endsection

@section('content')
    <div class="content">
        <div class="user">
            <div class="user__image">
                <img src="{{ asset('storage/img/'. $user['image']) }}" alt="画像" class="user__image--icon" accept=".png, .jpeg, .jpg">
                <h2 class="user__image--name">{{ $user['name'] }}</h2>
            </div>
            <div class="user__profile-edit">
                <button class="user__profile-edit--button" onclick="location.href='/mypage/profile'">プロフィールを編集</button>
            </div>
        </div>



            <div class="category">
                <h3 class="category__sell">出品した商品</h3>
                <h3 class="category__buy">購入した商品</h3>
            </div>

            <div class="item">
                <div class="item__image">
                    @foreach($items as $item)
                        <div class="item__card">
                            <a href="/item/{{ $item['id'] }}" class="item__card--link">
                                <img src="{{ asset($item['image']) }}" alt="画像" class="item__card--image">
                                <div class="item__card--info">
                                    <span>{{ $item['name'] }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        
        
    </div>

@endsection