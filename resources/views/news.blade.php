@extends('layouts.app')


@section('content')
<img src="{{ asset('img/news_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="news_page_flex" style="margin-bottom:5vw;">
            <img src="{{ asset('img/news_sample.png') }}" class="news_page_img">
            <a href="{{ route('news_detail') }}" class="news_main_div">
                <div class="news_title">ホームページをリニューアルしました</div>
                2023.11.21
                <div class="news_page_content">
                    平素は大変お世話になっております。この度株式会社明光は心機一転、ホームページをリニューアルしました。<br>
                    今後ともよろしくお願いいたします。
                </div>
            </a>
        </div>
        
        <div class="news_page_flex">
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

        <div class="news_page_flex">
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

        <div class="news_page_flex">
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
        

    </div>

</div>

@include('item.contact_item')



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/news_bar_sp.png') }}" class="service_bar mb100">

<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp1.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>

<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp2.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>

<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp3.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>


<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp1.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>

<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp2.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>

<a href="{{ route('news_detail') }}" class="news_main_div">
    <img src="{{ asset('img/news_sample_sp3.png') }}" class="top_icon">
    <div class="top_news_title">ホームページをリニューアルしました</div>
    <div class="top_news_date">2023.11.21</div>
</a>

@include('item.contact_item_sp')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection