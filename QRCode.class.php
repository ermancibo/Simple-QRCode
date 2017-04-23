<?php
/*
Created by Erman Cibo 22/04/2017


include('QRCode.class.php');
QRCode::MakeQR('text here...','dimension (optional)', 'image title (optional)');
example:
echo QRCode::MakeQR('http://www.ermancibo.com','300','Erman Cibo');
*/

class QRCode {
  
    public static function MakeQR($url, $chs = 300, $title = '') {
        return '<img src="https://chart.googleapis.com/chart?chs='.$chs.'x'.$chs.'&cht=qr&chl='.$url.'a%2F&choe=UTF-8" title="'.$title.'" />';
    }
    
}


?>