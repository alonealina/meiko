@extends('layouts.app')


@section('content')
<div class="top_bg1"></div>

<div class="top_title_en">SERVICES</div>
<div class="top_title_ja">事業情報</div>

<a href="#!" class="service1_hover_div">
    <img src="{{ asset('img/service_icon1.png') }}" class="service_icon1">
</a>
<div class="service1_orange_1 service_orange1"></div>
<div class="service1_orange_2 service_orange1"></div>

<a href="#!" class="service2_hover_div">
    <img src="{{ asset('img/service_icon2.png') }}" class="service_icon2">
</a>
<div class="service2_orange_1 service_orange2"></div>
<div class="service2_orange_2 service_orange2"></div>

<a href="#!" class="service3_hover_div">
    <img src="{{ asset('img/service_icon3.png') }}" class="service_icon3">
</a>
<div class="service3_orange_1 service_orange3"></div>
<div class="service3_orange_2 service_orange3"></div>

<a href="#!" class="service4_hover_div">
    <img src="{{ asset('img/service_icon4.png') }}" class="service_icon4">
</a>
<div class="service4_orange_1 service_orange4"></div>
<div class="service4_orange_2 service_orange4"></div>

<div class="top_service_div">
    <div class="top_service_title">寺院運営コンサルティング</div>
    <div class="top_service_title">納骨堂コンサルティング</div>
    <div class="top_service_title">集客・広報コンサルティング</div>
    <div class="top_service_title">新規事業コンサルティング</div>
</div>

<img src="{{ asset('img/top_bar.png') }}" class="top_bar">


<div class="top_title_en">COMPANY</div>
<div class="top_title_ja">企業情報</div>

<a href="#!" class="company1_hover_div">
    <img src="{{ asset('img/company_icon1.png') }}" class="company_icon1">
</a>
<div class="company1_orange_1 company_orange1"></div>
<div class="company1_orange_2 company_orange1"></div>

<a href="#!" class="company2_hover_div">
    <img src="{{ asset('img/company_icon2.png') }}" class="company_icon2">
</a>
<div class="company2_orange_1 company_orange2"></div>
<div class="company2_orange_2 company_orange2"></div>

<a href="#!" class="company3_hover_div">
    <img src="{{ asset('img/company_icon3.png') }}" class="company_icon3">
</a>
<div class="company3_orange_1 company_orange3"></div>
<div class="company3_orange_2 company_orange3"></div>

<div class="top_company_div">
    <div class="top_company_title">会社概要</div>
    <div class="top_company_title">代表挨拶</div>
    <div class="top_company_title">企業理念</div>
</div>

<img src="{{ asset('img/top_bar.png') }}" class="top_bar">


<div class="top_title_en">RECRUIT</div>
<div class="top_title_ja">採用情報</div>

<a href="#!" class="recruit1_hover_div">
    <img src="{{ asset('img/recruit_icon1.png') }}" class="recruit_icon1">
</a>
<div class="recruit1_orange_1 recruit_orange1"></div>
<div class="recruit1_orange_2 recruit_orange1"></div>

<a href="#!" class="recruit2_hover_div">
    <img src="{{ asset('img/recruit_icon2.png') }}" class="recruit_icon2">
</a>
<div class="recruit2_orange_1 recruit_orange2"></div>
<div class="recruit2_orange_2 recruit_orange2"></div>

<a href="#!" class="recruit3_hover_div">
    <img src="{{ asset('img/recruit_icon3.png') }}" class="recruit_icon3">
</a>
<div class="recruit3_orange_1 recruit_orange3"></div>
<div class="recruit3_orange_2 recruit_orange3"></div>

<div class="top_recruit_div">
    <div class="top_recruit_title">会社について</div>
    <div class="top_recruit_title">人について</div>
    <div class="top_recruit_title">仕事について</div>
</div>

<img src="{{ asset('img/top_bar.png') }}" class="top_bar">


<div class="top_title_en">NEWS</div>
<div class="top_title_ja">お知らせ</div>

<div class="news_flex">
    <div class="news_item">
        <img src="{{ asset('img/news_sample.png') }}" class="news_img">
        <div class="news_title">ホームページをリニューアルしました</div>
        2023.11.21
    </div>

    <div class="news_item">
        <img src="{{ asset('img/news_sample.png') }}" class="news_img">
        <div class="news_title">ホームページをリニューアルしました</div>
        2023.11.21
    </div>

    <div class="news_item">
        <img src="{{ asset('img/news_sample.png') }}" class="news_img">
        <div class="news_title">ホームページをリニューアルしました</div>
        2023.11.21
    </div>
</div>

<a href="#!" class=""><img src="{{ asset('img/news_more_btn.png') }}" class="news_more_btn"></a>

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