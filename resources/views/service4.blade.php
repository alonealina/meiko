@extends('layouts.app')


@section('content')
<img src="{{ asset('img/service4_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <img src="{{ asset('img/service4.png') }}" class="service_main_img">
        <div class="service1_text_box">
            <div class="service_title_orange_en">CONSULTING</div>
            <div class="service_title_orange_ja">新規事業コンサルティングについて</div>
            <div class="service_text">
                ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、<br>
                成果の出る戦略型のランディングページをご提案しています。<br>
                徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、<br>
                LPOコンサルティングまでワンストップでサポート。<br>
                集客やブランディングなど、<br>
                御社のビジネス課題を解決するための最適なソリューションをご提供します。
            </div>
        </div>

        <div class="service_center_title">
            <div class="service_title_orange_en">SERVICES</div>
            <div class="service_title_orange_ja">新規事業コンサルティングのサービスについて</div>
        </div>

        <div class="service_flex">
            <div class="service_flex_item">
                <div class="service_flex_num">01.</div>
                <div class="service_flex_en">ANALYSIS</div>
                <div class="service_flex_ja">分析</div>
                <div class="service_flex_text">Google Analyticsはもちろん、ビジターレコーディングなど定性的な<br>分析ツールも使用し、ランディングページの課題点を多方面から分析。</div>
            </div>
            <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">
        </div>

        <div class="service_flex">
            <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">
            <div class="service_flex_item service_flex_pl">
                <div class="service_flex_num">02.</div>
                <div class="service_flex_en">PLANNING</div>
                <div class="service_flex_ja">改善案作成</div>
                <div class="service_flex_text">分析した結果から影響力の大きい要素を優先的に<br>具体的な改善案を作成・ご提案。</div>
            </div>
        </div>

        <div class="service_flex">
            <div class="service_flex_item">
                <div class="service_flex_num">03.</div>
                <div class="service_flex_en">IMPROVEMENT</div>
                <div class="service_flex_ja">改修</div>
                <div class="service_flex_text">作成した改善案をクライアント側が承認頂ければ、弊社デザイナー・<br>コーダーがランディングページの改修を実施</div>
            </div>
            <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">
        </div>

        <div class="service_flex">
            <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">
            <div class="service_flex_item service_flex_pl">
                <div class="service_flex_num">04.</div>
                <div class="service_flex_en">MEASUREMENT</div>
                <div class="service_flex_ja">効果測定</div>
                <div class="service_flex_text">ランディングページを改修してそのままにせず、<br>解析ツールで改修後の結果も効果測定。</div>
            </div>
        </div>

        <div class="service_client_title">
            <div class="service_title_orange_en">CLIENT</div>
            <div class="service_title_orange_ja">お取引実績</div>
            <div class="service_client_text">600件以上のお取引実績がございます。</div>
        </div>

        <img src="{{ asset('img/henson_logo.png') }}" class="henson_logo">


    </div>

</div>

@include('item.contact_item')



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/service4_bar_sp.png') }}" class="service_bar">


<div class="service_item_div">
    <img src="{{ asset('img/service4.png') }}" class="service_main_img">
    <div class="service1_text_box">
        <div class="service_title_orange_en">CONSULTING</div>
        <div class="service_title_orange_ja">新規事業コンサルティングについて</div>
        <div class="service_text">
            ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、成果の出る戦略型のランディングページをご提案しています。<br>
            徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、LPOコンサルティングまでワンストップでサポート。<br>
            集客やブランディングなど、御社のビジネス課題を解決するための最適なソリューションをご提供します。
        </div>
    </div>

    <div class="service_center_title">
        <div class="service_title_orange_en">SERVICES</div>
        <div class="service_title_orange_ja">新規事業コンサルティングのサービスについて</div>
    </div>

    <div class="service_flex_item">
        <div class="service_flex_num">01.</div>
        <div class="service_flex_en">ANALYSIS</div>
        <div class="service_flex_ja">分析</div>
        <div class="service_flex_text">Google Analyticsはもちろん、ビジターレコーディングなど定性的な分析ツールも使用し、ランディングページの課題点を多方面から分析。</div>
    </div>
    <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">

    <div class="service_flex_item">
        <div class="service_flex_num">02.</div>
        <div class="service_flex_en">PLANNING</div>
        <div class="service_flex_ja">改善案作成</div>
        <div class="service_flex_text">分析した結果から影響力の大きい要素を優先的に具体的な改善案を作成・ご提案。</div>
    </div>
    <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">

    <div class="service_flex_item">
        <div class="service_flex_num">03.</div>
        <div class="service_flex_en">IMPROVEMENT</div>
        <div class="service_flex_ja">改修</div>
        <div class="service_flex_text">作成した改善案をクライアント側が承認頂ければ、弊社デザイナー・コーダーがランディングページの改修を実施</div>
    </div>
    <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">

    <div class="service_flex_item">
        <div class="service_flex_num">04.</div>
        <div class="service_flex_en">MEASUREMENT</div>
        <div class="service_flex_ja">効果測定</div>
        <div class="service_flex_text">ランディングページを改修してそのままにせず、解析ツールで改修後の結果も効果測定。</div>
    </div>
    <img src="{{ asset('img/service_dai.png') }}" class="service_flex_item">

    <div class="service_client_title">
        <div class="service_title_orange_en">CLIENT</div>
        <div class="service_title_orange_ja">お取引実績</div>
        <div class="service_client_text">600件以上のお取引実績がございます。</div>
    </div>

    <img src="{{ asset('img/henson_logo.png') }}" class="henson_logo">


</div>


@include('item.contact_item_sp')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection