@extends('layouts.app')


@section('content')
<img src="{{ asset('img/recruit3_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="news_detail_date">2023.11.21</div>
        <div class="news_detail_title">ホームページをリニューアルしました</div>

        <div href="{{ route('news_detail') }}" class="news_page_flex">
            <img src="{{ asset('img/news_sample.png') }}" class="news_detail_img">
            <div class="news_detail_text">
                平素は大変お世話になっております。<br>
                この度株式会社明光は心機一転、ホームページをリニューアルしました。<br>
                今後ともよろしくお願いいたします。
            </div>
        </div>

        <a href="{{ route('news') }}"><img src="{{ asset('img/back_btn.png') }}" class="back_btn"></a>
    </div>

    <div class="news_detail_flex">
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