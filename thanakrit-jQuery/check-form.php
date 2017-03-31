<?php
//create by Thanakrit Tangtermsak
//tangtermsak@gmail.com
//random id function you can random everything to make bot confuse.(If bot looking for css class or id)
//using jQuery and random id to make bot confuse :P 
//very simple and usefull 
function Ran_Id($len = "4"){
 $_ = NULL;
 for($i=0; $i<$len; $i++) {
  $char = chr(rand(48,122));
  while (!preg_match("/[a-zA-Z0-9]/", $char)){
        if($char == $lchar) continue;
        $char = chr(rand(48,90));
  }
   $_ .= $char;
   $lchar = $char;
 }
 return $_;
}
$ran_id = Ran_Id();
?>
   <!doctype html>
   <html>

   <head>
      <title>Thanakrit Tangtermsak check bot </title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>

   <body>
      <style>
         .captcha-img-<?=$ran_id?> {
            display: none;
            position: absolute;
            bottom: 100%;
            right: 0;
            z-index: 90;
            margin-bottom: 2px;
         }
         
         #captcha-<?=$ran_id?> {
            display: none;
         }
         
         .captcha-input-<?=$ran_id?> {
            width: 145px;
         }
         
         #captcha-<?=$ran_id?> span {
            font-size:7px;
         }
      </style>
      <script>
         $(document).ready(function () {
            //show hide captcha
            $('.captcha-input-<?=$ran_id?>').focus(function () {
               $('.captcha-img-<?=$ran_id?>').slideDown('fast');
               $('#captcha-<?=$ran_id?>').show();
               var loadCaptcha = $('#captcha-<?=$ran_id?>').attr('src');
               if (loadCaptcha == '../thanakrit-jQuery/trans.gif') {
                  document.getElementById('captcha-<?=$ran_id?>').src = '../captcha.php?' + Math.random();
               }
            });
            $('.captcha-input-<?=$ran_id?>').on('blur', function () {
               $('.captcha-img-<?=$ran_id?>').slideUp('fast');
            });
         });
      </script>
      <div style="margin-top:200px;margin-left:100px;"> <span style='display:inline-block;position:relative;'>
      <div class="captcha-img-<?=$ran_id?>"><span>CAPTCHA</span><br><img src='../thanakrit-jQuery/trans.gif' id='captcha-<?=$ran_id?>' style='border-radius:3px;border:#CCCCCC solid 1px;' /></div>
      <!-- CHANGE TEXT LINK --><a href="javascript:;" onclick="
    document.getElementById('captcha-<?=$ran_id?>').src='../captcha.php?'+Math.random();
    document.getElementById('captcha-form-<?=$ran_id?>').focus();" id="change-image-<?=$ran_id?>" style='position:relative;'><img src='../thanakrit-jQuery/reload_captcha.png' border='0' title='' align='absmiddle' class='captcha-reload-<?=$ran_id?>'></a>
      <input placeholder="click and type captcha here" type="text" name="captcha" id="captcha-form-<?=$ran_id ?>" class='captcha-input-<?=$ran_id ?> required' autocomplete='off' / placeholder=''>
      <br/> </span>
      </div>
   </body>

   </html>