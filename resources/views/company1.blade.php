@extends('layouts.app')


@section('content')
<img src="{{ asset('img/company1_bar.png') }}" class="service_bar">


<div class="service_list_div">
    <div class="service_item_div">
        <div class="company_flex">
            <div class="company_column">
                <div class="company_column_name">商号</div>
                <div class="company_column_content">株式会社明光</div>
            </div>
            <div class="company_column">
                <div class="company_column_name">事業内容</div>
                <div class="company_column_content">コンサルティング事業</div>
            </div>

            <div class="company_column">
                <div class="company_column_name">役員</div>
                <div class="company_column_content">代表取締役　久保田</div>
            </div>
            <div class="company_column">
                <div class="company_column_name">設立</div>
                <div class="company_column_content">2023年04月</div>
            </div>

            <div class="company_column">
                <div class="company_column_name"></div>
                <div class="company_column_content">取締役　　　中島 清治</div>
            </div>
            <div class="company_column">
                <div class="company_column_name">資本金</div>
                <div class="company_column_content">1,000,000円</div>
            </div>

            <div class="company_column">
                <div class="company_column_name"></div>
                <div class="company_column_content">取引金融機関 真和</div>
            </div>
            <div class="company_column">
                <div class="company_column_name">取引金融機関</div>
                <div class="company_column_content">三井住友銀行</div>
            </div>

            <div class="company_column">
                <div class="company_column_name">電話番号</div>
                <div class="company_column_content">000-0000-0000</div>
            </div>
            <div class="company_column">
                <div class="company_column_name">所在地</div>
                <div class="company_column_content">・本店<br>大阪府大阪市中央区谷町五丁目6-12 新野村ビル</div>
            </div>

        </div>


    </div>

</div>

@include('item.contact_item')



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/company1_bar_sp.png') }}" class="service_bar">

<div class="service_item_div">
    <div class="company_column">
        <div class="company_column_name">商号</div>
        <div class="company_column_content">株式会社明光</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">役員</div>
        <div class="company_column_content">代表取締役　久保田 祥子<br>取締役　　　中島 清治<br>取締役　　　深瀬 真和</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">電話番号</div>
        <div class="company_column_content">000-0000-0000</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">所在地</div>
        <div class="company_column_content">・本店<br>大阪府大阪市中央区谷町五丁目6-12 新野村ビル</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">事業内容</div>
        <div class="company_column_content">コンサルティング事業</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">設立</div>
        <div class="company_column_content">2023年04月</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">資本金</div>
        <div class="company_column_content">1,000,000円</div>
    </div>

    <div class="company_column">
        <div class="company_column_name">取引金融機関</div>
        <div class="company_column_content">三井住友銀行</div>
    </div>



</div>



@include('item.contact_item_sp')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
@endsection