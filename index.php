<?php

use App\StringUtils;
require_once __DIR__."/vendor/autoload.php";

$string_utils = new StringUtils();


// Hàm normalize để chuyển tất cả thành chữ thường và xóa hết các ký tự đặc biệt
//// Tiếng việt
//echo $string_utils->normalize("Làm gì để có người yêu đi chơi trung thu?")."\n";
//
//// Tiếng Anh
//echo $string_utils->normalize("What to do to have a lover to go to the Mid-Autumn Festival?")."\n";
//
//// Tiếng Ả Rập
//echo $string_utils->normalize("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟\n")."\n";
//
//// Tiếng Thái Lan
//echo $string_utils->normalize("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?")."\n";
//
//// Tiếng Trung Quốc (Phồn thể)
//echo $string_utils->normalize("有情人去中秋節怎麼辦?")."\n";
//
//// Tiếng Hàn Quốc
//echo $string_utils->normalize("연인이 중추절에 가려면 어떻게 해야 할까요?")."\n";
//
//// Tiếng Nhật Bản
//echo $string_utils->normalize("恋人が中秋節に行くにはどうすればいいですか？")."\n";


// Hàm wordsCount để đếm số chữ trong câu không tính số và ký tự đặc biệt;

//// Tiếng việt
//echo $string_utils->wordsCount("Làm gì để có người yêu đi chơi trung thu?")."\n";
//
//// Tiếng Anh
//echo $string_utils->wordsCount("What to do to have a lover to go to the Mid-Autumn Festival?")."\n";
//
//// Tiếng Ả Rập
//// Không đếm được
//echo $string_utils->wordsCount("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟\n")."\n";
//
//// Tiếng Thái Lan
//// Không đếm được
//echo $string_utils->wordsCount("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?")."\n";
//
//// Tiếng Trung Quốc (Phồn thể)
//echo $string_utils->wordsCount("有情人去中秋節怎麼辦?")."\n";
//
//// Tiếng Hàn Quốc
//echo $string_utils->wordsCount("연인이 중추절에 가려면 어떻게 해야 할까요?")."\n";
//
//// Tiếng Nhật Bản
//echo $string_utils->wordsCount("恋人が中秋節に行くにはどうすればいいですか？")."\n";


// Hàm countUniqueWords cũng là đếm số chữ nhưng chỉ đếm các chữ có số từ lớn hơn hoặc bằng 3

//// Tiếng việt
//echo $string_utils->countUniqueWords("Làm gì để có người yêu đi chơi trung thu ?")."\n";
//
//// Tiếng Anh
//echo $string_utils->countUniqueWords("What to do to have a lover to go to the Mid-Autumn Festival?")."\n";
//
//// Tiếng Ả Rập
//echo $string_utils->countUniqueWords("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟\n")."\n";
//
//// Tiếng Thái Lan
//echo $string_utils->countUniqueWords("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?")."\n";
//
//// Tiếng Trung Quốc (Phồn thể)
//echo $string_utils->countUniqueWords("有情人去中秋節怎麼辦?")."\n";
//
//// Tiếng Hàn Quốc
//echo $string_utils->countUniqueWords("연인이 중추절에 가려면 어떻게 해야 할까요?")."\n";
//
//// Tiếng Nhật Bản
//echo $string_utils->countUniqueWords("恋人が中秋節に行くにはどうすればいいですか？")."\n";



// Hàm charactersCount để đếm số từ trong câu
//echo $string_utils->charactersCount("Làm gì để có người yêu đi chơi trung thu ?")."\n";


// Hàm isLatin để kiểm tra chữ latin
//// Tiếng việt
//echo $string_utils->isLatin("Làm gì để có người yêu đi chơi trung thu ?")."\n";
//
//// Tiếng Anh
//echo $string_utils->isLatin("What to do to have a lover to go to the Mid-Autumn Festival?")."\n";
//
//// Tiếng Ả Rập
//echo $string_utils->isLatin("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟\n")."\n";
//
//// Tiếng Thái Lan
//// Không phải chữ Latin
//echo $string_utils->isLatin("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?")."\n";
//
//// Không phải chữ Latin
//// Tiếng Trung Quốc (Phồn thể)
//echo $string_utils->isLatin("有情人去中秋節怎麼辦?")."\n";
//
//// Không phải chữ Latin
//// Tiếng Hàn Quốc
//echo $string_utils->isLatin("연인이 중추절에 가려면 어떻게 해야 할까요?")."\n";
//
//// Không phải chữ Latin
//// Tiếng Nhật Bản
//echo $string_utils->isLatin("恋人が中秋節に行くにはどうすればいいですか？")."\n";


// Hàm isJapanese kiểm tra chữ có phải kiểu chữ Nhật hay không

//echo $string_utils->isJapanese("Làm gì để có người yêu đi chơi trung thu ?")."\n";
//
//// Tiếng Anh
//echo $string_utils->isJapanese("What to do to have a lover to go to the Mid-Autumn Festival?")."\n";
//
//// Tiếng Ả Rập
//echo $string_utils->isJapanese("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟\n")."\n";
//
//// Tiếng Thái Lan
//echo $string_utils->isJapanese("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?")."\n";
//
//// Tiếng Trung Quốc (Phồn thể)
//// True
//echo $string_utils->isJapanese("有情人去中秋節怎麼辦?")."\n";
//
//// Tiếng Hàn Quốc
//echo $string_utils->isJapanese("연인이 중추절에 가려면 어떻게 해야 할까요?")."\n";
//
//// Tiếng Nhật Bản
//// True
//echo $string_utils->isJapanese("恋人が中秋節に行くにはどうすればいいですか？");


// Hàm extractWords Trả về từng chữ cái trong câu thành dạng mảng

// Tiếng việt
//dd($string_utils->extractWords('Làm gì để có người yêu đi chơi trung thu?'));

// Tiếng Anh
//dd($string_utils->extractWords("What to do to have a lover to go to the Mid-Autumn Festival?"));

// Tiếng Ả Rập
// Khong tra ve ket qua - Da Fix
//dd($string_utils->extractWords("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟"));

// Tiếng Thái Lan
// Khong tra ve ket qua - Da Fix
//dd($string_utils->extractWords("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?"));

// Tiếng Trung Quốc (Phồn thể)
//dd($string_utils->extractWords("有情人去中秋節怎麼辦?"));

// Tiếng Hàn Quốc
//dd($string_utils->extractWords("연인이 중추절에 가려면 어떻게 해야 할까요?"));

// Tiếng Nhật Bản
//dd($string_utils->extractWords("恋人が中秋節に行くにはどうすればいいですか？"));



// Hàm extractUniqueWords Trả về từng chữ cái có số chữ cái lớn hơn họăc bằng 3 trong câu thành dạng mảng

// Tiếng việt
//dd($string_utils->extractUniqueWords('Làm gì để có người yêu đi chơi trung thu?'));

// Tiếng Anh
//dd($string_utils->extractUniqueWords("What to do to have a lover to go to the Mid-Autumn Festival?"));

// Tiếng Ả Rập
//dd($string_utils->extractUniqueWords("ما الذي يجب فعله ليكون لديك حبيب للذهاب إلى مهرجان منتصف الخريف؟"));

// Tiếng Thái Lan
//dd($string_utils->extractUniqueWords("มีแฟนไปเที่ยวเทศกาลไหว้พระจันทร์ต้องทำยังไง?"));

// Tiếng Trung Quốc (Phồn thể)
//dd($string_utils->extractUniqueWords("有情人去中秋節怎麼辦?"));

// Tiếng Hàn Quốc
//dd($string_utils->extractUniqueWords("연인이 중추절에 가려면 어떻게 해야 할까요?"));
//
// Tiếng Nhật Bản
//dd($string_utils->extractUniqueWords("恋人が中秋節に行くにはどうすればいいですか？"));

