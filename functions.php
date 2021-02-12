<?php

/**
 * Bu dosya örnek amaçlı olarak oluşturulmuştur. Grupla beraber karar verip
 * dosya isimlerini değiştirebilir veya buradaki işlemleri farklı dosyalara
 * bölebilirsiniz.
 */

 /**
  * Uygulamanın diğer sayfalarda sık sık uyguladığı işlemleri betimleyecek
  * **sadece** fonksiyonların yer alması gereken php dosyasıdır.
  *
  * Bu dosyayı diğer dosyalarınızda dahil etmek için `require`, `include`,
  * `require_once` veya `include_once` fonksiyonlarını kullanabilirsiniz.
  */
  function readMore($string) {

    if (strlen($string) > 1000) {
          $stringCut = substr($string, 0, 500);
          $endPoint = strrpos($stringCut, ' ');
          $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
       //    $string .= '... <a style="cursor: pointer; " class="submit"  href="post.php?id=http" > Detay</a>';
      }
      echo $string;
   }
   
