@extends('layouts.app')


@section('content')

<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 31vw; margin-bottom: 5vw;">サービスに関するお問合せ</div>

        <div class="contact_detail">
            小さなことでもお気軽にどうぞ。1営業日以内にご連絡いたします。<br>
            また、お電話からのお問合せは下記番号にて承っております。<br>
            <br>
            <span>03-5005-0035</span>（受付時間：平日9:00 - 18:00）<br>
            <br>
            弊社へのご提案はこちらからお願いいたします。
        </div>


        <form id="contact_form" name="contact_form" action="" method="post">
            <div class="contact_name">お名前 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：田中太郎">

            <div class="contact_name">会社名／組織名 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：株式会社明光">

            <div class="contact_name">メールアドレス <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：xxx@meiko.co.jp">

            <div class="contact_name">電話番号 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="">

            <div class="contact_flex">
                <div class="contact_flex_item">
                    ご希望内容<br>
                    <input class="radio_btn" type="radio" name="content">打合せ<br>
                    <input class="radio_btn" type="radio" name="content">電話説明<br>
                    <input class="radio_btn" type="radio" name="content">見積依頼<br>
                    <input class="radio_btn" type="radio" name="content">資料請求<br>
                </div>

                <div class="contact_flex_item">
                    <div class="contact_name">お問合せサービス <span class="require_mark">※</span></div>
                    <input class="checkbox" type="checkbox" name="service" value="1">寺院コンサルティング<br>
                    <input class="checkbox" type="checkbox" name="service" value="1">納骨コンサルティング<br>
                    <input class="checkbox" type="checkbox" name="service" value="1">集客・広報コンサルティング<br>
                    <input class="checkbox" type="checkbox" name="service" value="1">新規事業コンサルティング<br>
                </div>
            </div>


            <div class="contact_name">お問い合わせ内容 <span class="require_mark">※</span></div>
            <textarea class="contact_textarea" placeholder="お問合せを増やしたい、LPをリニューアルした、採用サイトを作りたい"></textarea>

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