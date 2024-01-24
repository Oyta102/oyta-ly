
# Oyta-ly
## This PHP

~~~
use Oyta\OytaLy\Join;
~~~

### signup
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //注册账号
    'password'=>'' //注册密码
];
return Join::SignUp($data);
~~~

### SignIn
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //注册时账号
    'gameType'=>'', //游戏类型
    'gameCode'=>'', //子游戏代码
    'isMobile'=>'', //电脑版and手机版 默认0  0-电脑版 1-手机版
];
return Join::SignIn($data);
~~~

### BaLance
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //会员账号
];
return Join::BaLance($data);
~~~

### OrderStatus
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //会员账号
    'transferno'=>'', //转账订单号
];
return Join::OrderStatus($data);
~~~

### CrEdit
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识：通用分商户传固定参数 "CURRENCY"
];
return Join::CrEdit($data);
~~~

### GameList
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识：AG,BBIN
];
return Join::GameList($data);
~~~

### GameRecord
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'method'=>'', //updateTime 根据修改时间采集，betTime 根据投注时间采集
    'page'=>'', //页数
    'pageSize'=>'', //每页条数，每页最大500条
    'start_at'=>'', //开始时间，十位时间戳1602333908
    'end_at'=>'', //结束时间，十位时间戳1602852308
];
return Join::GameRecord($data);
~~~

### DePoSit
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //会员账号
    'amount'=>'', //转账金额，只接受整数
    'transferno'=>'', //转账订单号，建议时间戳+随机数字，最小16位，最大32位
];
return Join::DePoSit($data);
~~~

### WithdRawaL
~~~
$data = [
    'account'=>'', //商户账号
    'api_key'=>'', //商户密钥
    'api_code'=>'', //接口标识 AG,BBIN
    'username'=>'', //会员账号
    'amount'=>'', //转账金额，只接受整数
    'transferno'=>'', //转账订单号，建议时间戳+随机数字，最小16位，最大32位
];
return Join::WithdRawaL($data);
~~~
