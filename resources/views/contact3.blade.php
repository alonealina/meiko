@extends('layouts.app')


@section('content')

<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 30vw; margin-bottom: 5vw;">業務提携に関するお問合せ</div>

        <form id="contact_form" name="contact_form" action="" method="post">
            <div class="contact_name">お名前 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：田中太郎">

            <div class="contact_name">会社名／組織名 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：株式会社明光">

            <div class="contact_name">メールアドレス <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：xxx@meiko.co.jp">

            <div class="contact_name">電話番号 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="">

            <div class="contact_name">URL</div>
            <input type="text" class="contact_text" placeholder="">

            <div class="contact_name">お問い合わせ内容 <span class="require_mark">※</span></div>
            <textarea class="contact_textarea"></textarea>

            <a href="#!" class="send_btn">送信</a>
        </form>
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