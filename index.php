<?php

use App\StringUtils;
require_once __DIR__."/vendor/autoload.php";

$string_utils = new StringUtils();

$getArgv =  $argv[1];

echo "Chuyển tất cả thành chữ thường và bỏ ký tự đb và số: ";
print_r($string_utils::normalize($getArgv));
echo "\n";
echo "Đếm số chữ trong câu không tính số và ký tự đặc biệt: ";
print_r($string_utils::wordsCount($getArgv));
echo "\n";
echo "Cũng là đếm số chữ nhưng chỉ đếm các chữ có số từ lớn hơn hoặc bằng 3: ";
print_r($string_utils::countUniqueWords($getArgv));
echo "\n";
echo "Đếm số từ trong câu: ";
print_r($string_utils::charactersCount($getArgv));
echo "\n";
echo "Trả về từng chữ cái trong câu thành dạng mảng: ";
print_r($string_utils::extractWords($getArgv));
echo "\n";
echo "Trả về từng chữ cái có số chữ cái lớn hơn họăc bằng 3 trong câu thành dạng mảng: ";
print_r($string_utils::extractUniqueWords($getArgv));
echo "\n";
echo "Kiểm tra xem có phải chữ Latin không: ";
if($string_utils::isLatin($getArgv) == 1){
    echo "Có là chữ Latin";
}
else{
    echo "Không là chữ Latin";
}
echo "\n";
echo "Kiểm tra xem có phải chữ Japan không: ";
if($string_utils::isJapanese($getArgv) == 1){
    echo "Có là chữ Japan";
}
else{
    echo "Không là chữ Japan";
}
echo "\n";

// Hàm trim xóa hết dấu cách ở đầu và cuối câu
print_r($string_utils::trim($getArgv));
echo "\n";
echo "Email: ";
// Tìm kiếm email trong câu
print_r($string_utils::extractEmails($getArgv));

echo "\n";
echo "So dien thoai: ";
// Tìm kiếm số điện thoại trong câu
print_r($string_utils::extractPhones($getArgv));

