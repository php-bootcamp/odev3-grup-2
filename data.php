<?php
include "functions.php";

#nursena karakulah - rabia gül baruğ - rabia demir
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form method="POST" action="post.php?id=http">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/http.png" alt="HTTP Nedir?">
                            <span>
                                <h4>HTTP Nedir?</h4>
                            </span>
                        </div>
                        <div class="card-desc">
                            <h3>Http Nedir?Nasıl Çalışır?</h3>
                            <?php
                            $string = "HTTP nedir?
                        Üstün metin transfer protokolü Türkçe anlamı olan ve İngilizce ‘Hypet Text Transfer Protocol’ olarak geçen, birçok insanın ise kısaltılmış hali ile bildiği http, bilginin internet üzerinden sunucudan kullanıcıya ne şekilde ve nasıl aktarılacağını gösteren bir nevi yoldur. Bu düzen ise belli bir takım kurallar ve yöntemler ışığı altında yapılmaktadır. Her ne kadar artık bir bilgi aranmak istendiği zaman bunun birçok farklı arama motorundan yapıyor olsak da, bulunan linke tıklayıp site açılmaya başlarken tarayıcımız http’yi otomatik bir şekilde her seferinde koyar. Bunun nedeni ise sunucular aracılığı birçok değişik web siteleri içerisinde bir indirme yapmak istendiği zaman bunun adına http yolu ile bir talep ya da istekte bulunmuş olmamızdır.
                         Her hangi bir web sitesine giriş yapılmak istendiği zaman sunucu bunu http çerçevesi bünyesinde bir komut olarak algılar ve bu kurala göre indirme yapar.
                        Günümüz internet ortamında sunucular arasında bilgi aktarımını ve bu bilginin kontrolünü sağlayan pek çok protokol mevcut bulunmaktadır. 
                        Http uzantısı, en kısa ifade biçimiyle bu protokollerin içerisinde yer alan önemli bir ifadedir. Çünkü bu uzantı olmadan herhangi bir internet ortamına girip veri almanız mümkün değildir.
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                        The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc";
                            readMore($string);
                            ?>

                        </div>
                        <input type="hidden" name="post-title" value="HTTP Nedir?">
                        <input type="hidden" name="post-descr" value="Üstün metin transfer protokolü Türkçe anlamı olan ve İngilizce ‘Hypet Text Transfer Protocol’ olarak geçen, birçok insanın ise kısaltılmış hali ile bildiği http, bilginin internet üzerinden sunucudan kullanıcıya ne şekilde ve nasıl aktarılacağını gösteren bir nevi yoldur. Bu düzen ise belli bir takım kurallar ve yöntemler ışığı altında yapılmaktadır. Her ne kadar artık bir bilgi aranmak istendiği zaman bunun birçok farklı arama motorundan yapıyor olsak da, bulunan linke tıklayıp site açılmaya başlarken tarayıcımız http’yi otomatik bir şekilde her seferinde koyar. Bunun nedeni ise sunucular aracılığı birçok değişik web siteleri içerisinde bir indirme yapmak istendiği zaman bunun adına http yolu ile bir talep ya da istekte bulunmuş olmamızdır.
                         Her hangi bir web sitesine giriş yapılmak istendiği zaman sunucu bunu http çerçevesi bünyesinde bir komut olarak algılar ve bu kurala göre indirme yapar.
                        Günümüz internet ortamında sunucular arasında bilgi aktarımını ve bu bilginin kontrolünü sağlayan pek çok protokol mevcut bulunmaktadır. 
                        Http uzantısı, en kısa ifade biçimiyle bu protokollerin içerisinde yer alan önemli bir ifadedir. ">

                        <input type="hidden" name="post-img-url" value="https://dosya.wmaraci.com/nedir/http.png">
                        <input type="hidden" name="post-seen" value="true">

                        <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />
                        <!-- <button type="submit" class="btn-card detail-article" value="httpNedir">Detay</button> -->
                    </div>
                </form>
            </div>


            <div class="col-md-4">
                <form method="POST" action="post.php?id=dns">
                    <div class="card-content">
                        <div class="card-img">
                            <img name="dns-img" src="images/dns.png" alt="">
                            <span>
                                <h4>DNS Nedir?</h4>
                            </span>
                        </div>
                        <div class="card-desc">
                            <input type="hidden" name='dns_nedir' value="DNS Nedir?">
                            <h3 name="dns-nedir">DNS Nedir?</h3>
                            <?php
                            $string = "DNS, 256 karaktere kadar büyüyebilen host isimlerini IP’ye çevirmek için kullanılan bir sistemdir. Host ismi, tümüyle tanımlanmış isim (full qualified name) olarak da bilinir ve hem bilgisayarın ismini hem de bilgisayarın bulunduğu internet domainini gösterir.
                            DNS, verilen bir makina adının IP adresini çözerek makinaların.
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            Where can I get some?
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";
                            readMore($string);
                            ?>


                        </div>
                        <input type="hidden" name="post-title" value="DNS Nedir?">
                        <input type="hidden" name="post-descr" value="DNS, 256 karaktere kadar büyüyebilen host isimlerini IP’ye çevirmek için kullanılan bir sistemdir. Host ismi, tümüyle tanımlanmış isim (full qualified name) olarak da bilinir ve hem bilgisayarın ismini hem de bilgisayarın bulunduğu internet domainini gösterir.
                            DNS, verilen bir makina adının IP adresini çözerek makinaların.
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            Where can I get some?
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.">

                        <input type="hidden" name="post-img-url" value="https://www.iienstitu.com/uploads/Enstitu-2020-foto-02/dns-1_w1145_h572_op.png">

                        <input type="hidden" name="dns-seen" value="true">
                        <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />
                        <!-- <button type="submit" class="btn-card detail-article" value="dnsNedir">Detay</button> -->

                    </div>

                </form>
            </div>



            <div class="col-md-4">
                <form method="POST" action="post.php?id=http-https">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/http-https.png" alt="">
                            <span>
                                <h4> HTTP VE HTTPS</h4>
                            </span>
                        </div>
                        <div class="card-desc">
                            <h3>HTTP ve HTTPS</h3>
                            <?php
                            $string = "HTTP ile farkları:

                            HTTP durumunda URL “HTTP://” ile başlar ve HTTPS bağlantısı için HTTPS://’ dir.
                            HTTP güvensizdir fakat HTTPS güvenlidir.
                            HTTP bağlantı noktası port 80 kullanır HTTPS aksine iletişimi için 443 kullanır.
                            HTTP durumunda sertifikaları doğrulama gerekmez. HTTPS SSL Dijital Sertifika gerektirir.";
                            readMore($string);
                            ?>


                        </div>
                        <input type="hidden" name="post-title" value=" HTTP VE HTTPS">
                        <input type="hidden" name="post-descr" value="HTTP durumunda URL “HTTP://” ile başlar ve HTTPS bağlantısı için HTTPS://’ dir.
                                HTTP güvensizdir fakat HTTPS güvenlidir.
                                HTTP bağlantı noktası port 80 kullanır HTTPS aksine iletişimi için 443 kullanır.
                                HTTP durumunda sertifikaları doğrulama gerekmez. HTTPS SSL Dijital Sertifika gerektirir.">

                        <input type="hidden" name="post-img-url" value="https://digital-goal.net/tr/wp-content/uploads/2019/08/HTTP-vs-HTTPS.png">

                        <input type="hidden" name="post-seen" value="true">
                        <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />
                        <!-- <button type="submit" class="btn-card detail-article" value="http_https">Detay</button> -->
                    </div>
                </form>
            </div>
        </div>


    </div>


</body>

</html>
