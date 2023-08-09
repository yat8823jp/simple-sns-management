# シンプルなSNSアカウント管理プラグイン

## 詳細

管理画面からSNSアカウントの登録登録
フロント側でアカウントIDとURLの取得が可能

## 使い方

プラグインを有効後、設定→SNS

SNSのアカウントを入力して保存

### フロント側にて

- ssam_account_arrang(); を呼び出すことで、配列で各 SNS の アカウント が呼び出せます 
- ssam_account(); を呼び出すことで、連想配列で各 SNS の アカウント が呼び出せます 
- ssam_url(); を呼び出すことで、連想配列で各 SNS の URL が呼び出せます 

例）

```
<?php var_dump( ssam_account() ); ?>
<p><a href="<?php echo esc_attr( ssam_url()['facebook'] ); ?>">Faceook</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['twitter'] ); ?>">Twitter</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['instagram'] ); ?>">Instagram</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['youtube'] ); ?>">YouTube</a></p>
```

## Changelog

= 1.2.0 =
* 2023-08-9 Add X to Twitter notation.

= 1.1.8 =
* 2023-03-30 Tested up 6.2.2

= 1.1.7 =
* 2023-03-30 Tested up 6.2.0

= 1.1.6 =
* 2022-11-03 Tested up 6.1.0
****
= 1.1.5 =
* 2022-05-25 Tested up 6.0.0

= 1.1.4 =
* 2022-01-27 Tested up 5.9.0

= 1.1.3 =
* 2022-01-17 Tested up 5.8.3

= 1.1.2 =

* 2021-10-23 typing error fix

= 1.1.1 =
* 2021-10-23 readme bug fix

= 1.1.0 =
* 2021-10-07 add ssam_account_arrangement()

= 1.0.1 =
* 2021-10-02 Typing error correction

= 1.0.0 =
* 2021-09-29 First release
