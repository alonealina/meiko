@extends('layouts.app')


@section('content')
<img src="{{ asset('img/contact_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 11vw; margin-bottom: 5vw;">お問合せ</div>


        <a href="{{ route('contact1') }}" class="contact1_hover_div">
            <div>サービスに関するお問合せ</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>

        <a href="{{ route('contact2') }}" class="contact2_hover_div">
            <div>採用に関するお問合せ</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>

        <a href="{{ route('contact3') }}" class="contact3_hover_div">
            <div>業務提携に関するお問合せ</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>

        <a href="{{ route('contact4') }}" class="contact4_hover_div">
            <div>その他のお問合せ</div>
            <img src="{{ asset('img/orange_yazi.png') }}" class="orange_yazi">
        </a>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<div class="top_bg1">

</div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection