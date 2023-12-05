@extends('layouts.app')


@section('content')

<div class="service_list_div">
    <div class="service_item_div">
        <div class="underline_title" style="width: 26vw; margin-bottom: 5vw;">採用に関するお問合せ</div>

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

            <div class="contact_name">メールアドレス <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：xxx@meiko.co.jp">

            <div class="contact_name">電話番号 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="">

            <div class="contact_flex">
                <div class="contact_flex_item">
                    <div class="contact_name">希望雇用形態 <span class="require_mark">※</span></div>
                    <input class="radio_btn" type="radio" name="content">新卒採用<br>
                    <input class="radio_btn" type="radio" name="content">中途・既卒採用<br>
                    <input class="radio_btn" type="radio" name="content">業務委託<br>
                </div>

                <div class="contact_flex_item">
                    <div class="contact_name">希望職種 <span class="require_mark">※</span></div>
                    <div class="contact_flex" style="margin:0;">
                        <div class="contact_flex_item">
                            <input class="radio_btn" type="radio" name="job">営業<br>
                            <input class="radio_btn" type="radio" name="job">ディレクター<br>
                            <input class="radio_btn" type="radio" name="job">デザイナー<br>
                            <input class="radio_btn" type="radio" name="job">コーダー<br>
                        </div>
                        <div class="contact_flex_item">
                            <input class="radio_btn" type="radio" name="job">エンジニア<br>
                            <input class="radio_btn" type="radio" name="job">マーケター<br>
                            <input class="radio_btn" type="radio" name="job">バックオフィス<br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact_name">職務経歴書URL <span class="require_mark">※</span></div>
            <div class="contact_column">
                履歴書・職務経歴書は ギガファイル便にアップロードし、URLの添付をお願い致します。<br>
                デザイナー志望の方は実績が判る制作物URL、ポートフォリオも併せてご提出ください。
            </div>
            <textarea class="contact_textarea" placeholder=""></textarea>


            <div class="contact_name">備考</div>
            <textarea class="contact_textarea" placeholder=""></textarea>

            <a href="#!" class="send_btn">送信</a>
        </form>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/contact_bar_sp.png') }}" class="service_bar">

<div class="service_item_div">
        <div class="underline_title" style="width: 310px; margin-bottom: 50px;">採用に関するお問合せ</div>

        <div class="contact_detail">
            小さなことでもお気軽にどうぞ。<br>
            1営業日以内にご連絡いたします。<br>
            また、お電話からのお問合せは下記番号にて<br>
            承っております。<br>
            <br>
            <span>03-5005-0035</span><br>
            （受付時間：平日9:00 - 18:00）<br>
            <br>
            弊社へのご提案はこちらからお願いいたします。
        </div>



        <form id="contact_form" name="contact_form" action="" method="post">
            <div class="contact_name">お名前 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：田中太郎">

            <div class="contact_name">メールアドレス <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="例：xxx@meiko.co.jp">

            <div class="contact_name">電話番号 <span class="require_mark">※</span></div>
            <input type="text" class="contact_text" placeholder="">


            <div class="contact_flex_item2">
                <div class="contact_name">希望雇用形態 <span class="require_mark">※</span></div>
                <input class="radio_btn" type="radio" name="content">新卒採用<br>
                <input class="radio_btn" type="radio" name="content">中途・既卒採用<br>
                <input class="radio_btn" type="radio" name="content">業務委託<br>
            </div>

            <div class="contact_flex_item2">
                <div class="contact_name">希望職種 <span class="require_mark">※</span></div>
                <div class="contact_flex" style="margin:0;">
                    <div class="contact_flex_item">
                        <input class="radio_btn" type="radio" name="job">営業<br>
                        <input class="radio_btn" type="radio" name="job">ディレクター<br>
                        <input class="radio_btn" type="radio" name="job">デザイナー<br>
                        <input class="radio_btn" type="radio" name="job">コーダー<br>
                    </div>
                    <div class="contact_flex_item">
                        <input class="radio_btn" type="radio" name="job">エンジニア<br>
                        <input class="radio_btn" type="radio" name="job">マーケター<br>
                        <input class="radio_btn" type="radio" name="job">バックオフィス<br>
                    </div>
                </div>
            </div>


            <div class="contact_name">職務経歴書URL <span class="require_mark">※</span></div>
            <div class="contact_column">
                履歴書・職務経歴書は ギガファイル便にアップロードし、<br>
                URLの添付をお願い致します。<br>
                デザイナー志望の方は実績が判る制作物URL、<br>
                ポートフォリオも併せてご提出ください。
            </div>
            <textarea class="contact_textarea" placeholder=""></textarea>


            <div class="contact_name">備考</div>
            <textarea class="contact_textarea" placeholder=""></textarea>

            <a href="#!" class="send_btn">送信</a>
        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection