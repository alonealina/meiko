@extends('layouts.app')


@section('content')
<img src="{{ asset('img/recruit3_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 11vw;">募集要項</div>

        <div class="recruit3_title">募集要項</div>
        <div class="recruit3_text">※現在募集はございません。</div>
        
        <div class="recruit3_title">中途採用</div>

        <a href="{{ route('recruit3_1') }}" class="recruit3_1_hover_div">
            <div>企画営業</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>

        <a href="{{ route('recruit3_2') }}" class="recruit3_2_hover_div">
            <div>Webデザイナー</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>

        <a href="{{ route('recruit3_3') }}" class="recruit3_3_hover_div">
            <div>Webディレクター</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>


        <div class="recruit3_title">アルバイト採用</div>
        <div class="recruit3_text">※現在募集はございません。</div>
        
    </div>

</div>

@include('item.contact_item')



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<div class="top_bg1">

</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection