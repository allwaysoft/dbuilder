<?php

/**
 * Created by PhpStorm.
 * User: lvyahui
 * Date: 2016/5/9
 * Time: 8:46
 */
class SiteHelpers
{
    public static function loadDataSources(){
        return  array_merge(array(
            'core'  =>  Config::get('database.connections.mysql')
        ),Config::get('datasource'));
    }

    public static function blend($str,$data) {
        $src = $rep = array();

        foreach($data as $k=>$v){
            $src[] = "{".$k."}";
            $rep[] = $v;
        }

        if(is_array($str)){
            foreach($str as $st ){
                $res[] = trim(str_ireplace($src,$rep,$st));
            }
        } else {
            $res = str_ireplace($src,$rep,$str);
        }

        return $res;

    }
}