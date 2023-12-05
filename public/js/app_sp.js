function clickMenuServiceButton() {
    if ($('#menu_service_sp').css('display') == 'block') {
        // 表示されている場合の処理
        $('.service_vertical').css( 'opacity', '1' );
        setTimeout( ()=>{    $('#menu_service_sp').css( 'height', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_service_sp').css( 'opacity', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_service_sp').css( 'display', 'none' );} ,500);
    } else {
        // 非表示の場合の処理
        $('#menu_service_sp').css( 'display', 'block' );
        $('.service_vertical').css( 'opacity', '0' );
        setTimeout( ()=>{    $('#menu_service_sp').css( 'opacity', '1' );} ,10);
        setTimeout( ()=>{    $('#menu_service_sp').css( 'height', '200px' );} ,10);
    }
}

function clickMenuCompanyButton() {
    if ($('#menu_company_sp').css('display') == 'block') {
        // 表示されている場合の処理
        $('.company_vertical').css( 'opacity', '1' );
        setTimeout( ()=>{    $('#menu_company_sp').css( 'height', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_company_sp').css( 'opacity', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_company_sp').css( 'display', 'none' );} ,500);
    } else {
        // 非表示の場合の処理
        $('#menu_company_sp').css( 'display', 'block' );
        $('.company_vertical').css( 'opacity', '0' );
        setTimeout( ()=>{    $('#menu_company_sp').css( 'opacity', '1' );} ,10);
        setTimeout( ()=>{    $('#menu_company_sp').css( 'height', '150px' );} ,10);
    }
}

function clickMenuRecruitButton() {
    if ($('#menu_recruit_sp').css('display') == 'block') {
        // 表示されている場合の処理
        $('.recruit_vertical').css( 'opacity', '1' );
        setTimeout( ()=>{    $('#menu_recruit_sp').css( 'height', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_recruit_sp').css( 'opacity', '0' );} ,10);
        setTimeout( ()=>{    $('#menu_recruit_sp').css( 'display', 'none' );} ,500);
    } else {
        // 非表示の場合の処理
        $('#menu_recruit_sp').css( 'display', 'block' );
        $('.recruit_vertical').css( 'opacity', '0' );
        setTimeout( ()=>{    $('#menu_recruit_sp').css( 'opacity', '1' );} ,10);
        setTimeout( ()=>{    $('#menu_recruit_sp').css( 'height', '150px' );} ,10);
    }
}

function clickNewSp() {
    $('#item_new_a').css( 'border-bottom', 'none' );
    $('#item_add_a').css( 'border-bottom', '1px solid' );
    $('#item_down_a').css( 'border-bottom', '1px solid' );

    $('#item_new_div').css( 'display', 'flex' );
    $('#item_add_div').css( 'display', 'none' );
    $('#item_down_div').css( 'display', 'none' );
}

function clickAddSp() {
    $('#item_new_a').css( 'border-bottom', '1px solid' );
    $('#item_add_a').css( 'border-bottom', 'none' );
    $('#item_down_a').css( 'border-bottom', '1px solid' );

    $('#item_new_div').css( 'display', 'none' );
    $('#item_add_div').css( 'display', 'flex' );
    $('#item_down_div').css( 'display', 'none' );
}

function clickDownSp() {
    $('#item_new_a').css( 'border-bottom', '1px solid' );
    $('#item_add_a').css( 'border-bottom', '1px solid' );
    $('#item_down_a').css( 'border-bottom', 'none' );

    $('#item_new_div').css( 'display', 'none' );
    $('#item_add_div').css( 'display', 'none' );
    $('#item_down_div').css( 'display', 'flex' );
}



function clickRegistButton() {
    document.forms.regist_form.submit();
}