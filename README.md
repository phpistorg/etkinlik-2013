Kurulum
========================
<pre>
git clone git@github.com:phpistorg/etkinlik-2013.git
</pre>

ile depoyu çekip, virtual host tanımlamalarını yapın. Daha sonra

<pre>
php app/check.php
</pre>
ile, sisteminizde bir eksiğin olup olmadığını kontrol edin.

* app/cache ve app/logs dizinlerine yazma izni verin


* Development ortamındaki değişikliklerden sonra

<pre>
php app/console --env=prod cache:clear
</pre>

ile production ortamındaki cache'i silin.


* Asset'lerdeki değişikliklerden sonra

<pre>
php app/console assets:install web
</pre>

ile asset'leri public dizine koyun
