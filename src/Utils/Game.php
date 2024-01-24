<?php

namespace Oyta\OytaLy\Utils;
use Oyta\OytaLy\Http\Respone;

class Game
{
    private static $uri = 'https://apis.ms1788.com';
    
    //注册账号
    public static function RegGame($data){
        $url = self::$uri.'/ley/register';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //注册账号
            'password'=>$data['password'] //注册密码
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    
    //登录账号
    public static function SignInGame($data){
        $url = self::$uri.'/ley/login';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //注册时账号
            'gameType'=>$data['gameType'], //游戏类型
            'gameCode'=>$data['gameCode'], //子游戏代码
            'isMobile'=>$data['isMobile'], //电脑版and手机版 默认0  0-电脑版 1-手机版
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //查询余额
    public static function GetBalance($data){
        $url = self::$uri.'/ley/balance';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //会员账号
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //查询转账状态
    public static function GetOrderStatus($data){
        $url = self::$uri.'/ley/orderstatus';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //会员账号
            'transferno'=>$data['transferno'], //转账订单号
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //获取商户额度
    public static function GetCredit($data){
        $url = self::$uri.'/ley/credit';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识：通用分商户传固定参数 "CURRENCY"
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //获取游戏列表
    public static function GetGameList($data){
        $url = self::$uri.'/ley/gamelist';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识：AG,BBIN
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //获取游戏记录
    public static function GetGameRecord($data){
        $url = self::$uri.'/ley/gamerecord';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'method'=>$data['method'], //updateTime 根据修改时间采集，betTime 根据投注时间采集
            'page'=>$data['page'], //页数
            'pageSize'=>$data['pageSize'], //每页条数，每页最大500条
            'start_at'=>$data['start_at'], //开始时间，十位时间戳1602333908
            'end_at'=>$data['end_at'], //结束时间，十位时间戳1602852308
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //额度转换转入
    public static function DepoSit($data){
        $url = self::$uri.'/ley/deposit';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //会员账号
            'amount'=>$data['amount'], //转账金额，只接受整数
            'transferno'=>$data['transferno'], //转账订单号，建议时间戳+随机数字，最小16位，最大32位
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
    
    //额度转换转出
    public static function WithdRawal($data){
        $url = self::$uri.'/ley/withdrawal';
        $date = [
            'account'=>$data['account'], //商户账号
            'api_key'=>$data['api_key'], //商户密钥
            'api_code'=>$data['api_code'], //接口标识 AG,BBIN
            'username'=>$data['username'], //会员账号
            'amount'=>$data['amount'], //转账金额，只接受整数
            'transferno'=>$data['transferno'], //转账订单号，建议时间戳+随机数字，最小16位，最大32位
            ];
        $res = Respone::post($url,$date);
        return json_decode($res,true);
    }
}