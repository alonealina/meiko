@extends('layouts.app')


@section('content')
<img src="{{ asset('img/service_list_bar.png') }}" class="service_bar">

<a href="{{ route('service1') }}" class="service_list1_hover_div">
    <img src="{{ asset('img/service_icon1.png') }}" class="service_icon1">
</a>
<div class="service_list1_orange_1 service_list_orange1"></div>
<div class="service_list1_orange_2 service_list_orange1"></div>

<a href="{{ route('service2') }}" class="service_list2_hover_div">
    <img src="{{ asset('img/service_icon2.png') }}" class="service_icon2">
</a>
<div class="service_list2_orange_1 service_list_orange2"></div>
<div class="service_list2_orange_2 service_list_orange2"></div>

<a href="{{ route('service3') }}" class="service_list3_hover_div">
    <img src="{{ asset('img/service_icon3.png') }}" class="service_icon3">
</a>
<div class="service_list3_orange_1 service_list_orange3"></div>
<div class="service_list3_orange_2 service_list_orange3"></div>

<a href="{{ route('service4') }}" class="service_list4_hover_div">
    <img src="{{ asset('img/service_icon4.png') }}" class="service_icon4">
</a>
<div class="service_list4_orange_1 service_list_orange4"></div>
<div class="service_list4_orange_2 service_list_orange4"></div>

<div class="service_list_div">
    <div class="service_content_div">
        <div class="top_service_title">寺院運営コンサルティング</div>
        <div class="top_service_title">納骨堂コンサルティング</div>
        <div class="top_service_title">集客・広報コンサルティング</div>
        <div class="top_service_title">新規事業コンサルティング</div>
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