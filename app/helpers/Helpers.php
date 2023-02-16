<?php

namespace App\helpers;

use App\Models\Language;

function getLangs(){
    $option='';
    $langs=Language::where('active',1)->get();
    $option.='<select name="lang" class="form-control">';
    foreach ($langs as $lang){
        $selected=$lang->is_default===1?'selected="selected"':'';
        $option.='<option value="'.$lang->code.'"'.$selected.'>'.$lang->name.'</option>';
    }
    $option.='</select>';
    return $option;
}

function getIsActive($status=0){

    $status_html='';
    if ($status==1) {
        $status_html .= '<span class="badge badge-info">' . __('active') . '</span>';
    } else {
        $status_html .= '<span class="badge badge-danger">' . __('no_active') . '</span>';
    }
    return  $status_html;
}
