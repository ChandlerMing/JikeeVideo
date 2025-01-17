<?php
$img_w = 70;  //初始化验证码图片的宽
$img_h = 22;  //初始化验证码图片的高
$char_len = 4; //初始化码值的长度
$font = 5;  //初始化验证码字体大小
//生成码值数组,不需要数字 0，避免与字母 o 冲突
$char = array_merge(range('A', 'Z'), range('a', 'z'), range(1, 9));
//随机获取$char_len 个码值的键
$rand_keys = array_rand($char, $char_len);
//判断当码值长度为 1 时，将其放入数组中
if ($char_len == 1) {
    $rand_keys = array($rand_keys);
}
//打乱随机获取的码值键的数组
shuffle($rand_keys);
//根据键获取对应的码值，并拼接成字符串
$code = '';
foreach ($rand_keys as $key) {
    $code .= $char[$key];
}
//将获取的码值字符串保存 session 中
session_start();
$_SESSION['verifyCode'] = $code;
//将码值写入到画布中并展示
//----1 生成画布
$img = imagecreatetruecolor($img_w, $img_h);
//设置背景
$bg_color = imagecolorallocate($img, 0xcc, 0xcc, 0xcc);
imageFill($img, 0, 0, $bg_color);
//干扰像素
for ($i = 0; $i < 300; $i++) {
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0,
        255));
    imagesetpixel($img, mt_rand(0, $img_w), mt_rand(0, $img_h), $color);
}
//矩形边框
$rect_color = imagecolorallocate($img, 0x90, 0x90, 0x90);
imagerectangle($img, 0, 0, $img_w - 1, $img_h - 1, $rect_color);
//----2 操作画布
//设定字符串颜色
$str_color = imagecolorallocate($img, mt_rand(0, 100), mt_rand(0, 100),mt_rand(0,
    100));
//设定字符串位置
$font_w = imagefontwidth($font);  //字体单个字符的宽度
$font_h = imagefontheight($font); //字体单个字符的高度
$str_w = $font_w * $char_len;     //字符串宽
imagestring($img, $font, ($img_w-$str_w)/2, ($img_h-$font_h)/2, $code,
    $str_color);
//----3 输出图片内容
header('Content-Type: image/png');
imagepng($img);
//----4 销毁画布
imagedestroy($img);