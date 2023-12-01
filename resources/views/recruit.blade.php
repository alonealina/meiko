@extends('layouts.app')


@section('content')
<img src="{{ asset('img/recruit_list_bar.png') }}" class="service_bar">

<a href="{{ route('recruit1') }}" class="company_list1_hover_div">
    <img src="{{ asset('img/recruit_icon1.png') }}" class="company_icon1">
</a>
<div class="company_list1_orange_1 company_list_orange1"></div>
<div class="company_list1_orange_2 company_list_orange1"></div>

<a href="{{ route('recruit2') }}" class="company_list2_hover_div">
    <img src="{{ asset('img/recruit_icon2.png') }}" class="company_icon2">
</a>
<div class="company_list2_orange_1 company_list_orange2"></div>
<div class="company_list2_orange_2 company_list_orange2"></div>

<a href="{{ route('recruit3') }}" class="company_list3_hover_div">
    <img src="{{ asset('img/recruit_icon3.png') }}" class="company_icon3">
</a>
<div class="company_list3_orange_1 company_list_orange3"></div>
<div class="company_list3_orange_2 company_list_orange3"></div>

<div class="service_list_div">
    <div class="company_content_div">
        <div class="top_service_title">会社について</div>
        <div class="top_service_title">人について</div>
        <div class="top_service_title">仕事について</div>
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