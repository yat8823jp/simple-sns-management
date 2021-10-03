# シンプルなSNSアカウント管理プラグイン

## 詳細

管理画面からSNSアカウントの登録登録
フロント側でアカウントIDとURLの取得が可能

## 使い方

プラグインを有効後、設定→SNS

SNSのアカウントを入力して保存

フロント側にて

- ssam_account(); を呼び出すことで、連想配列で各 SNS の アカウント が呼び出せます 
- ssam_view(); を呼び出すことで、連想配列で各 SNS の URL が呼び出せます 

例）

```
<?php var_dump( ssam_account() ); ?>
<p><a href="<?php echo esc_attr( ssam_url()['facebook'] ); ?>">Faceook</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['twitter'] ); ?>">Twitter</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['instagram'] ); ?>">Instagram</a></p>
<p><a href="<?php echo esc_attr( ssam_url()['youtube'] ); ?>">YouTube</a></p>
```

## Changelog

= 1.0.1 =

* 2021-10-02 Typing error correction

= 1.0.0 =

* 2021-09-29 First release

## 

