<?php
$dev = true;

/* 沙箱用户公钥

MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxiQb8Z6BW6hdNuzP8JW+
2RD2M6IFtSz6CLse6fw3teUnMAaa4iLgxmfhu0WRnlRHN1NXkAdU3Y8gdh+E5KpN
EKM9T4urGuDANCOMgxThAGmrrNi7oWmfb/H6XoToT1AYhiBjAWJazvg48QloFKZ/
4iCTPKWZ1hh36KNfMckVCZFkc4771xQFX/4LDtdS4dyg2weGnjkysDaETD0mc5Xs
bu3d6VS3K3NXNxUxop9gKNRprQL9cCUWXSKGDs0ErhDnp0FS+bW5ozWM5f6Qo5y7
eZ0J2Br+8IukX4rtvy4tEyYotlRzfNEawii1ba+5q/ROw2oL/fxsbmaG5x6HbEpS
MQIDAQAB

*/
$_devConfig = array (
    //签名方式,默认为RSA2(RSA2048)
    'sign_type' => "RSA2",

    //支付宝公钥
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzyp2kqbV6FmWIGe0N0qv6XGpZDduZCfpYrawvkm/qCxHz8k8P2H9gDBS5kAoW7dav2dby2fbq5yR/fvDZsNkO2uvZtuzDOFNgD67k3pjH2H/6in2IBg7r4RwTnxuDm842zErpNNmyXp46eiMThdpR3qYI3EPn++o69qoD5lt2VaHBvfppuOVfiyVrPYa9XkjOjlYcHTUl3EUKHSSmsOK0eJmfxyE5s3sMQ4Ih8cUJUHk4hQMDS/SioXFf0U1Sgz9SqL8+6YZ7Tz0+NyaPerbSfYRDPjbIKa+ZOJNvFoBJyL1HufYgsc+SqEkq4g6s9CmkGX7EhYDy1e8iRV5wVE5zwIDAQAB",

    //商户私钥
    'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDGJBvxnoFbqF02
7M/wlb7ZEPYzogW1LPoIux7p/De15ScwBpriIuDGZ+G7RZGeVEc3U1eQB1TdjyB2
H4Tkqk0Qoz1Pi6sa4MA0I4yDFOEAaaus2LuhaZ9v8fpehOhPUBiGIGMBYlrO+Djx
CWgUpn/iIJM8pZnWGHfoo18xyRUJkWRzjvvXFAVf/gsO11Lh3KDbB4aeOTKwNoRM
PSZzlexu7d3pVLcrc1c3FTGin2Ao1GmtAv1wJRZdIoYOzQSuEOenQVL5tbmjNYzl
/pCjnLt5nQnYGv7wi6Rfiu2/Li0TJii2VHN80RrCKLVtr7mr9E7Dagv9/GxuZobn
HodsSlIxAgMBAAECggEBALV0iCrEUA8SpxsP0HaxjG/Zur8aWEPNhsXMJ8l888Ae
tb6jrd/+tP6+T9ljIrJu2DFwn7YFINEurDnBL8EBvUXJWPKqI+6feSXGkH3S9yOb
ol7OtTZjNmIcpn89FErePTdIHaM84ZC9fdgwFyMiP+dkkbJure2FxvpD83/yeNOi
tr50wsV8Eh0ocTll3dZzlgOCSwGngGDhwtFsj72kQKTmufcbICf+mzE12+W1sxfM
0DMk97+UY+bJoTUkLyHpDESCICa1s2kDnqEk8wGac/O4vQT3UTFMJFDKAB8WLycF
NNi5xc0bMTrA5lxXpzb96S0aImDzPjoCfZ9X1N92aOECgYEA9mttbgmFeNjmOiAJ
j7TZgBxn1TnBeMLm4i14GkQuAZehJNwne3DdkIPjVIs5WleP1JH3L4+F0PPTpD0Q
8uHXZ421i2X2Yp2qNegurUY1smzk9JtonxzgxfWolHSUjhIcLBJ2+3/ypXLoen5L
ITAMDCletygyoT7u2v8b/GyLXKUCgYEAzdgsVOJ0IX7Q2NU/2zJ3QV7DHnnGf9J/
jUqhCvKFlg6omHkhBTiQdNkVgKu7vIx8Ezu7JoSz1R/RSJYSsJkDe5bCUGPfk8Qo
+RTY0biJ/xFkGCW40qpdQemfZTiol3L91vFhsYYq5H3LVAkwoMgdzHAKqw8+oEu+
ccLgt6+rrZ0CgYACpK5c0s9St4josLVJjFgU7rkSaXcw025kmLZEGd0geT7qRU5L
Ha/SwAdtPb0UwgGx9wrewLxfvG3Vwi3vXQrReoyq/SICdsx/nYj6pNkom9Bs60nZ
AxdKKFNxnDqHt5wDwQLzubCho7Tos3gc2AYZD0yLzGuWnTU0ti3XrFZmXQKBgB4v
FsETu8e1mtZQ3t47ljUluiLb5HmV2lJToS3Dxkbsu1gwWuEzHCumMXr+s7bAOulv
FtBdISmdUsj8CJ2QsmwK/U9gdcZrOz7bCbgnAUU/vZe04Fcz2Bz0LwVeu4oJuKMu
Hg80B1IeCBS4jELnVUdHHqlawOoscS6pTt5giiIZAoGAY9qMIwn479yCsmP8E+9y
U0qZkFQ7F5hh6PVXJGbHvVvo5Cch9283ljTPWrFI3QMm2XphuM/fl8Wi6AKonCLK
RfQIJudlHZlkcNf59CSXxBoVVsonUvpecuvnfnazWMA5V8AUENgwYVccjCq+NhNZ
7QkVrZaTbPi8BRUntEl+IJI=",

    //应用ID
    'app_id' => "2016073000129247",
    //编码格式
    'charset' => "UTF-8",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "http://www.baidu.com",

    //最大查询重试次数
    'MaxQueryRetry' => "10",

    //查询间隔
    'QueryDuration' => "3"
);

$_proConfig =  array (
    //签名方式,默认为RSA2(RSA2048)
    'sign_type' => "RSA2",

    //支付宝公钥
    'alipay_public_key' => "",

    //商户私钥
    'merchant_private_key' => "",

    //应用ID
    'app_id' => "",
    //编码格式
    'charset' => "UTF-8",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //异步通知地址,只有扫码支付预下单可用
    'notify_url' => "http://www.baidu.com",

    //最大查询重试次数
    'MaxQueryRetry' => "10",

    //查询间隔
    'QueryDuration' => "3"
);

$config = $dev ? $_devConfig : $_proConfig;
