<?php

/**
 * 
 * Anonymous function
 * IIFE
 * Closure
 * Callback
 * 
 */

// 1. Anonymous function: Hàm ẩn danh (Hàm không tên).

// Định nghĩa hàm ẩn danh
function () {
    echo "Hello World !";
};

// Gọi hàm ẩn danh

$param1 = " and my friends !";

call_user_func(function ($param1) {
    echo "Hello world" . $param1;
}, $param1);

echo "<br>";

// 2. IIFE: Gọi hàm luôn ngay sau khi khởi tạo.

$param1 = " and my girl friend !";

(function ($param1) {
    echo "Hello world" . $param1;
})($param1);

echo "<br>";

// 3. Closure.

$param1 = " and my boy friends !";

$hieu = function ($param1) {
    echo "Hello world" . $param1;
};

$hieu($param1); // Cách gọi 1

echo "<br>";

$param1 = " and my parents !";

call_user_func($hieu, $param1); // Cách gọi 2

// 4. Callback.

function setTimeOut($callBack, $time)
{
    call_user_func($callBack);
}

setTimeOut(function () {
    echo "Hello world !";
}, 10000);

