@extends('layouts.app')


@section('content')
<img src="{{ asset('img/company2_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="company2_title">世の中の会社を幅広いWebソリューションで“元気付ける”</div>
        <div class="company_flex">
            <div class="company2_flex_text">
                ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、<br>
                成果の出る戦略型のランディングページをご提案しています。<br>
                徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、<br>
                LPOコンサルティングまでワンストップでサポート。<br>
                集客やブランディングなど、御社のビジネス課題を解決するための最適な<br>
                ソリューションをご提供します。
            </div>

            <div class="company2_flex_content">
                <img src="{{ asset('img/company2_img.png') }}" class="company2_img">
                <div class="company2_flex_text2">
                    <div class="company2_ceo">代表取締役</div>
                    <div class="company_ceo_name">苗字　名前<span>　Myoji Namae</span></div>
                    ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、成果の出る戦略型のランディングページをご提案しています。<br>
                    徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、LPOコンサルティングまでワンストップでサポート。<br>
                    集客やブランディングなど、御社のビジネス課題を解決するための最適なソリューションをご提供します。
                </div>
            </div>
        </div>
    </div>
</div>

@include('item.contact_item')



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/company2_bar_sp.png') }}" class="service_bar">

<div class="service_item_div">
    <div class="company2_title">世の中の会社を幅広い<br>Webソリューションで<br>“元気付ける”</div>

    <div class="company2_flex_text">
        ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、成果の出る戦略型のランディングページをご提案しています。<br>
        徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、LPOコンサルティングまでワンストップでサポート。<br>
        集客やブランディングなど、御社のビジネス課題を解決するための最適なソリューションをご提供します。
    </div>

    <div class="company2_flex_content">
        <img src="{{ asset('img/company2_img_sp.png') }}" class="company2_img">
        <div class="company2_flex_text2">
            <div class="company2_ceo">代表取締役</div>
            <div class="company_ceo_name">苗字　名前<span>　Myoji Namae</span></div>
            ラヴィゴットでは、過去4,000社以上のWeb分析で培った豊富なノウハウを活かし、成果の出る戦略型のランディングページをご提案しています。<br>
            徹底した調査と分析による企画戦略立案をはじめ、制作から広告運用、LPOコンサルティングまでワンストップでサポート。<br>
            集客やブランディングなど、御社のビジネス課題を解決するための最適なソリューションをご提供します。
        </div>
    </div>

</div>




@include('item.contact_item_sp')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection