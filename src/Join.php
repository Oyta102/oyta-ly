<?php

namespace Oyta\OytaLy;
use Oyta\OytaLy\Utils\Game;
class Join
{
    
    //会员注册账号
    public static function SignUp($data){
        return Game::RegGame($data);
    }
    
    //会员登录游戏
    public static function SignIn($data){
        return Game::SignInGame($data);
    }
    
    //查询会员余额
    public static function BaLance($data){
        return Game::GetBalance($data);
    }
    
    //查询转账状态
    public static function OrderStatus($data){
        return Game::GetOrderStatus($data);
    }
    
    //获取商户额度
    public static function CrEdit($data){
        return Game::GetCredit($data);
    }
    
    //获取游戏列表
    public static function GameList($data){
        return Game::GetGameList($data);
    }
    
    //获取游戏记录
    public static function GameRecord($data){
        return Game::GetGameRecord($data);
    }
    
    //额度转换转入
    public static function DePoSit($data){
        return Game::DepoSit($data);
    }
    
    //额度转换转出
    public static function WithdRawaL($data){
        return Game::WithdRawal($data);
    }
    
    
}