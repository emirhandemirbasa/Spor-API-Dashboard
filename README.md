# COLLECT API | SPOR API DASHBOARD

## Genel Mantık
<a href="https://collectapi.com/tr/">Collect API'nin</a> içerisinde bulunan SPOR API servisi ile tüm ligleri html formu içerisindeki select kutusuna yazdırıyor ve burada seçilen lige bağlı olarak Gol Krallığı, Puan Durumu ve Maç sonuçlarını listelemektedir. Bu listelenen bilgiler farklı servislerden gelmektedir. Bu bilgilere ulaşmamızı sağlayan kullanıcının seçtiği lig bilgisidir. Lig bilgisine göre diğer sersivlere istek atmaktadır ve dönen souçları kullanıcının ekranına yazdırmaktadır.

### Kurulum

1. Projeyi code kısmından indirin xampp>htdocs klasörü altına yükleyin ve hemen ardından aşağıdaki adımları takip edin.

2. İlk olarak Spor API servisine ihtiyacımız var bunun için <a href="https://collectapi.com/tr/api/sport/spor-api">SPOR API</a>'ye giriş yapıyoruz ve buradan hesap oluşturuyoruz hemen ardından yukarıdaki linkte bulunan api bilgisini kopyalıyoruz.

3. Kopyaladığımız bu API anahtarını aşağıda bulunan config/config.php içerisinde bulunan bu kodla değiştiriyoruz.

```php
    $api = "KOPYALADIĞINIZ API ANAHTARI";
```
!NOT: kopyaladığınız api anahtar formatını buraya yapıştırırken şu şekilde olmalı:
```
    kgGJhUOOUHhojhOI:ıgGYıgyUIhojjkl
```

4. Bu işlemleri yaptıktan sonra localhost üzerinde projeyi test edebilirsiniz.

## Kullanılan Teknolojiler

- PHP 8.2
- CollectAPI / SPOR API 4 adet farklı API kullanıldı.
- CSS
- MVC

## Uygulamaya Ait Ekran Görüntüleri
- Genel Arayüz Ekranı/ Trendyol Süper Lig'e ait bilgiler

[![İlk açıldığındaki varsayılan arayüz}](https://i.hizliresim.com/s5wm6sk.png)](https://hizliresim.com/s5wm6sk)

- İngiltere Premier Ligine ait bilgiler

[![İngiltere Premier Ligine ait bilgiler}](https://i.hizliresim.com/fc9gqvm.png)](https://hizliresim.com/fc9gqvm)

- Konferans Ligine ait bilgiler
[![Konferans Ligine ait bilgiler}](https://i.hizliresim.com/tnisxf9.png)](https://hizliresim.com/tnisxf9)

## API Akış Diyagramı

[![API Akış Diyagramı}](https://i.hizliresim.com/ri4dgsf.png)](https://hizliresim.com/ri4dgsf)

##### İstek öneri ve hata bildirimi için issue açabilirsiniz.