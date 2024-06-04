<h1 align="center"> hyperf-socialite </h1>


## About
改造自lijinhua1993/hyperf-socialite, 修改了一些依赖版本


## Installing

```shell

# 安装
composer require gyfluck/hyperf-socialite -vvv

# 创建配置文件
php bin/hyperf.php vendor:publish gyfluck/hyperf-socialite

```

## Configure

配置文件位于 `config/autoload/socialite.php`，如文件不存在可自行创建

```php
<?php

return [
    // 需要加载的provider
    'providers' => [
        // \HyperfSocialiteProviders\Feishu\Provider::class,
    ],
    'config' => [
        'facebook' => [
            'client_id' => '',
            'client_secret' => '',
            // 其他provider中需要使用的配置
            // ...
        ],
        // qq,weixin...    ]()
    ],
    
];

```


## Usage
控制器中使用
```php
<?php

use Socialite\HyperfSocialite\Contracts\SocialiteInterface;

class Controller 
{
    
    /**
    * @param SocialiteInterface $socialite
     * @return \Hyperf\HttpServer\Contract\ResponseInterface
     */
    public function redirectToProvider(SocialiteInterface $socialite)
    {
        // 重定向跳转
       $redirect = $socialite->driver('facebook')->redirect();
       
       // 使用新的配置跳转
       $socialite->driver('facebook')->setConfig([
            'client_id' => 'xxx',
            'client_secret' => 'xxxx',
       ])  
       
       return $redirect; 
    }
    
    /**
    * @param SocialiteInterface $socialite
    */
    public function handleProviderCallback(SocialiteInterface $socialite)
    {
        // 获取用户信息
       $user = $socialite->driver('facebook')->user();
       
       //
       // $user->token;
    }


}
```

### 支持的列表

| 支持应用         | 驱动名称                   |
|--------------|------------------------|
| 微博           | weibo                  |
| QQ           | qq                     |
| Facebook     | facebook               |
| Instagram    | instagram              |
| YouTube      | youtube                |
| 飞书自建应用       | feishu                 |
| 微信公众号        | weixin                 |
| 微信PC网站登陆     | weixinweb              |
| 微信开放平台代公众号授权 | wechat_service_account |
| 企业微信第三方应用扫码  | third_weworkqr         |
| 企业微信         | wework                 |
| 企业微信自建应用扫码   | weworkqr               |
| 苹果           | apple                  |


