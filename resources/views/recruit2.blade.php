@extends('layouts.app')


@section('content')
<img src="{{ asset('img/recruit2_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 13vw;">社員データ</div>

        <img src="{{ asset('img/recruit2_graph.png') }}" class="recruit2_graph">


        <div class="underline_title" style="width: 23vw;">オフィスギャラリー</div>

        <img src="{{ asset('img/office_dummy.png') }}" class="office_dummy">


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