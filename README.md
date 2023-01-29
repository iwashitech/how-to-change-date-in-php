# PHPで日付を変更する方法（Windows）

## php-timecop
## 準備作業
1. [GitHub](https://github.com/hnw/php-timecop#user-content-install-on-windows-experimental)にアクセス
1. php_timecop.dllをダウンロード
1. extフォルダにファイルを移動
1. php.iniに下記を追記
```
extension=php_timecop.dll
```
### 補足
- xamppは7.4 Thread Safe (TS) x64で動作した

## 使用方法
- [使用方法](/php-timecop/usage.php)

## Smartyの場合
- [テンプレート](/php-timecop/smarty.tpl)
- [テンプレート関数プラグイン](/php-timecop/plugin.php)

### 参考サイト

#### 日付の変更
- [Set Date Timezone in PHP Like a Pro With 2023 Code Examples | Fueling PHP](https://fuelingphp.com/set-date-timezone-php/)
- [PHP で時間を固定したり未来にしたりしたい | ごみばこいん](https://gomiba.co/archives/2018/06/2146/)
- [Carbon - A simple PHP API extension for DateTime.](https://carbon.nesbot.com/#gettingstarted)
- [CarbonのSetTestNowの仕様変更 - Qiita](https://qiita.com/ggg-mzkr/items/9c018a3b140d5c027d56)
- [PHP で時刻に関わるテストをする - すぱぶろ](https://superbrothers.hatenablog.com/entry/20120201/1328098312)
- [【PHP】date関数、テスト・デバッグ用に日付や時間を指定する方法 ｜ LUCKLOG](https://lucklog.info/php-date-target/)
- [PHPで日付時刻の処理を書くなら Carbon がおすすめ | アシアルブログ](https://blog.asial.co.jp/1392)
- [ライブラリを使わずに素のPHPとPHPUnitを使ってテスト中の内部時間を固定する方法 - ソロメイカー](https://solomaker.club/how-to-fixed-date-time-in-php-unit-without-library/)
- [magento - PHP Server time is behind local time - Stack Overflow](https://stackoverflow.com/questions/48081627/php-server-time-is-behind-local-time)
- [exec - PHP Change Server Date & Time - Stack Overflow](https://stackoverflow.com/questions/20177595/php-change-server-date-time)
- [How to Change the Computer Time and Date Using the Command Prompt](https://www.wikihow.com/Change-the-Computer-Time-and-Date-Using-the-Command-Prompt)
- [コマンドプロンプト date - [システム日付を表示/変更する]](https://www.k-tanaka.net/cmd/date.php)
- [Windows上でPHP拡張のテストを行う方法 - Qiita](https://qiita.com/hnw/items/f048a5ac86bcba9a21f9)

#### Smarty
- [テンプレート関数プラグイン | Smarty](https://www.smarty.net/docs/ja/plugins.functions.tpl)
- [untitled: [PHP]Smarty3.1にバージョンアップして困ったこと その3](http://dupont-kedama.blogspot.com/2014/02/phpsmarty31-3.html)

## runkit

### 準備作業
1. [PECL](https://pecl.php.net/package/runkit7)にアクセス
1. php_runkit7.dllをダウンロード
1. extフォルダにファイルを移動
1. php.iniに下記を追記
```
extension=php_runkit7.dll
runkit.internal_override=true
```

### 補足
- xamppは7.4 Thread Safe (TS) x64で動作した

## 使用方法
- [使用方法](/runkit/usage.php)

## Smartyの場合
- [テンプレート](/runkit/smarty.tpl)
- [テンプレート関数プラグイン](/runkit/plugin.php)

### 参考サイト
- [php - Can I "Mock" time in PHPUnit? - Stack Overflow](https://stackoverflow.com/questions/2371854/can-i-mock-time-in-phpunit#answer-20800668)
- [unit testing - PHPUnit: How to mock today's date without passing it as an argument? - Stack Overflow](https://stackoverflow.com/questions/7210851/phpunit-how-to-mock-todays-date-without-passing-it-as-an-argument#answer-7211618)
- [PECL :: Package :: runkit7](https://pecl.php.net/package/runkit7)
- [PHP: runkit7_function_redefine - Manual](https://www.php.net/manual/ja/function.runkit7-function-redefine.php)
- [phpメソッドをすげ替える掟破りの技、runkit - Qiita](https://qiita.com/sota/items/99474438e48284fbf1c5)
- [PHP5でrunkit - Qiita](https://qiita.com/rana_kualu/items/43dddf983303a2777f05)
- [Deprecatedエラーを消す方法 (php.iniや.htaccess) - [PHP + PHP] ぺんたん info](https://pentan.info/php/deprecated.html)

---

## エラー解消方法がわからなかったもの

## TimeTraveler

```php
// エラー解消方法が不明
require_once 'TimeTraveler/src/TimeTraveler.php';

Rezzza\TimeTraveler::enable();
Rezzza\TimeTraveler::moveTo('2010-01-01 00:00:00');
var_dump(new \DateTime());
```

### エラー内容
```
Fatal error: Uncaught LogicException: Aop extension seems to not be installed.
in C:\xampp\htdocs\TimeTraveler\src\TimeTraveler.php:39
Stack trace: #0 C:\xampp\htdocs\traveler.php(4): Rezzza\TimeTraveler::enable()
#1 {main} thrown in C:\xampp\htdocs\TimeTraveler\src\TimeTraveler.php on line 39
```

### 参考サイト
- [rezzza/TimeTraveler: Time traveling php library (pretty similar to ruby timecop)](https://github.com/rezzza/TimeTraveler)
- [php - Mocking The Time used by all instances of DateTime for testing purposes - Stack Overflow](https://stackoverflow.com/questions/7952611/mocking-the-time-used-by-all-instances-of-datetime-for-testing-purposes)
- [Set-up PHP SOAP Extension in Windows - Stack Overflow](https://stackoverflow.com/questions/29934167/set-up-php-soap-extension-in-windows)
- [php - How do I install soap extension? - Stack Overflow](https://stackoverflow.com/questions/2509143/how-do-i-install-soap-extension)
- [PHPでAOP(RAY.AOP) | @sinのブログ](http://sin-to-meru.jugem.jp/?eid=7)
- [AOP-PHP/AOP: AOP in PHP](https://github.com/AOP-PHP/AOP)

## ClockMock, uopz

```php
// エラー解消方法が不明
require_once 'src/ClockMock.php';
use SlopeIt\ClockMock\ClockMock;

ClockMock::freeze(new \DateTime('1986-06-05'));
echo date('Y-m-d');
```

### エラー内容
```
Fatal error: Uncaught RuntimeException: failed to set return for DateTime::createFromFormat,
the method is defined in TimecopDateTime in C:\xampp\htdocs\src\ClockMock.php:140
Stack trace:
#0 C:\xampp\htdocs\src\ClockMock.php(140): uopz_set_return('DateTime', 'createFromForma...', Object(Closure), true)
#1 C:\xampp\htdocs\src\ClockMock.php(57): SlopeIt\ClockMock\ClockMock::activateMocksIfNeeded()
#2 C:\xampp\htdocs\clock-mock.php(5): SlopeIt\ClockMock\ClockMock::freeze(Object(DateTime))
#3 {main} thrown in C:\xampp\htdocs\src\ClockMock.php on line 140
```

### 参考サイト
- [slope-it/clock-mock: A PHP library for mocking date and time in tests](https://github.com/slope-it/clock-mock)
- [[docker-compose]PHPのローカル開発環境を構築する方法(apache + php7.4) | Takuya.B.com](https://takuyab.com/archives/7417)
- [PECL :: Package :: uopz](https://pecl.php.net/package/uopz)
- [krakjoe/uopz: User Operations for Zend](https://github.com/krakjoe/uopz)
- [php - Can I "Mock" time in PHPUnit? - Stack Overflow](https://stackoverflow.com/questions/2371854/can-i-mock-time-in-phpunit)
- [php - Symfony Testing - ClockMock / DateTime - Stack Overflow](https://stackoverflow.com/questions/42587681/symfony-testing-clockmock-datetime)