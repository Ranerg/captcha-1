SparuiCaptcha
==========

SparuiCaptcha for Laravel 4

此组件主要应用于图片验证码

composer.json下加入
```bash
"require": {
	"sparui/captcha": "*"
},
```

app/config/app.php下加入

```php
'providers' => array(
    'Sparui\Captcha\CaptchaServiceProvider',
),
'aliases' => array(
    'Captcha' => 'Sparui\Captcha\Facades\Captcha',
)
```

route下加入
```php
Route::get('/captcha',array('as','captcha',function(){
    return Captcha::create();
}));
```

注册过滤
```php
Route::filter('verify', function()
{
	if(!Captcha::check(input::get('form.name'))){
	    return false;
	}
});
```

html代码下加入
```html
<img src="{{ URL::to('captcha') }}" />
```





