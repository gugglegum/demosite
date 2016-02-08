# Демонстрационный сайт на PHP

Скриншоты для нетерпеливых: https://yadi.sk/d/NRTFA5ZYoWLFP

[![Screenshot #1](https://2.downloader.disk.yandex.ru/preview/55d355b206766887d9900e942ac9435837d0781cbe38d06cb886f51bfea35ba9/inf/apGHgRGJN4y-Vg6GKyEWe4kzOrvim2lggfxm0nkNSynyF1aQtwBni9VxeazEOrF5k43aI09yEbGUVmks4R_m0g%3D%3D?uid=0&filename=%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.00.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&crop=1&size=150x150)](https://yadi.sk/d/NRTFA5ZYoWLFP/%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.00.png)
[![Screenshot #2](https://2.downloader.disk.yandex.ru/preview/c425929f475fa1e4434cc254f50dea2a8e6af6aa94ce4f0655ff34acc1599c37/inf/apGHgRGJN4y-Vg6GKyEWe3WeIdqHLssPpAdjOhbi2Mi1Gyc3nNQsjTOh-2vlSO6re7PhSbWEJoacqHys52O-uw%3D%3D?uid=0&filename=%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.05.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&crop=1&size=150x150)](https://yadi.sk/d/NRTFA5ZYoWLFP/%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.05.png)
[![Screenshot #3](https://3.downloader.disk.yandex.ru/preview/ecfc3e1d31f8039c735d22f1b51dcb2d7c7d4ccd4802437a853e137d5348f0a8/inf/apGHgRGJN4y-Vg6GKyEWe7FUALwzll8jJmd6ax_908cFu_C7GuQ6BLjgpItISJzrqzDDxDETrQokSz727JMRBQ%3D%3D?uid=0&filename=%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.30.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&crop=1&size=150x150)](https://yadi.sk/d/NRTFA5ZYoWLFP/%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.30.png)
[![Screenshot #4](https://3.downloader.disk.yandex.ru/preview/479c6d690092d4c938e556cd8f66ee6ed85ea34c9c2cd7ad0c8e0f168baba0a8/inf/apGHgRGJN4y-Vg6GKyEWexLA8tBMr_QyO9FDPTNjmhmoHrMG4gg8-m1Hz-LjvuExpXM6CyAdc2eUDq-6mw0kKA%3D%3D?uid=0&filename=%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.50.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&crop=1&size=150x150)](https://yadi.sk/d/NRTFA5ZYoWLFP/%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.50.png)
[![Screenshot #5](https://1.downloader.disk.yandex.ru/preview/663c31c150ad7afb02b7dc26f283bb2dd13cf289df13021322de153926b5dffa/inf/apGHgRGJN4y-Vg6GKyEWexxUlawhg4zk8WGoKNo1Exw87robg1zg1pJpa81hybCItqJtI-gzTAyqn00uM-3sDw%3D%3D?uid=0&filename=%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.58.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&tknv=v2&crop=1&size=150x150)](https://yadi.sk/d/NRTFA5ZYoWLFP/%D0%A1%D0%BA%D1%80%D0%B8%D0%BD%D1%88%D0%BE%D1%82%202016-02-08%2020.37.58.png)

Пример простого сайта на PHP, созданный в обучающих целях. В данном примере использована концепция создания приложения [MVC](https://ru.wikipedia.org/wiki/Model-View-Controller), [ЧПУ](https://ru.wikipedia.org/wiki/%D0%A7%D0%9F%D0%A3_(%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82)), роутер запросов, генерация URL по имени маршрута и параметрам, простой класс-обертка для работы с базой данных, упрощённый автозагрузчик классов [PSR-4](http://www.php-fig.org/psr/psr-4/ru/) (с одним корнем). В данном сайте намеренно не использовано никаких фреймворков, чтобы помочь новичку разобраться в основах программирования на PHP. Предполагается, что знание этих основ позже поможет понять как работают фреймворки. Данный сайт содержит главную страницу, 4 раздела и по несколько страниц в каждом разделе. При этом основные разделы отображаются в виде меню сверху, а страницы в текущем разделе в виде бокового меню слева. Текущий раздел и выбранная страница выделяются цветом. Первый раздел является каталогом пицц, их список, цены и описание берутся из базы данных. Остальные разделы являются простыми текстовыми страницами, тексты которых берутся из PHP-шаблонов в каталоге `app/views`. Многие вещи в данном сайте намеренно упрощены для лучшего понимания.

## Установка

1. Создайте директорию проекта: `mkdir demosite` и перейдите в неё.
2. Склонируйте данный проект к себе в созданную директорию: `git clone git@github.com:gugglegum/demosite.git .`
3. Создайте базу данных MySQL и загрузите в неё дамп из файла `mysqldump.sql`.
4. Скопируйте файл `config.php` в `config.local.php` и отредактируйте последний в соответствии со своими нуждами, прописав там параметры подключения к созданной базе данных. Неизменённые параметры можно удалить, они возьмутся из `config.php`. Загружаются оба конфига, но локальный имеет приоритет. Исходный файл `config.php` изменять не надо.
5. Настройте на своём веб-сервере виртуальный хост таким образом, чтобы корнем сайта (DocumentRoot) являлся каталог `www` в проекте, а запросы к несуществующим в каталоге `www` файлам перенаправлялись на `index.php`.

### Реврайтинг URL

Для корректной работы ЧПУ на данном сайте необходим механизм реврайтинга URL, который заключается в переопределении соответствия между запрашиваемым URL и файлом на диске. По умолчанию между URL и файлом на диске есть прямая связь: часть адреса после имени домена и до символа "?" или "#" (если есть) добавляется к DocumentRoot текущего хоста и если по получившемуся пути найден файл, то он отправляется в качестве ответа, если нет, то выдаётся ошибка 404. При реврайтинге, среди прочего, у нас есть возможность определить правило, которое звучит так: если запрашиваемый URL не существует, то вызвать `index.php`. А уже `index.php` определит какой URL изначально был запрошен и либо выдаст нужную страницу, либо выдаст свою собственную страницу с ошибкой 404. Однако настройка реврайтинга в разных веб-серверах различна. Приведу описание для 2-х хорошо известных мне.

#### Веб-сервер Apache

Реврайтинг URL в Apache реализуется при помощи подключаемого модуля "mod_rewrite". Модуль mod_rewrite включён в базовый дистрибутив Apache, но отключен по умолчанию. Для его включения, как правило, достаточно раскомментировать строчку `LoadModule rewrite_module modules/mod_rewrite.s` и перезапустить Apache. Также вам потребуется вручную создать файл `www/.htaccess` со следующим содержимым:

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !^favicon\.ico$
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule .* index.php [L,QSA]
```

Если после этого при запросе любой страницы, кроме главной, вы всё равно получаете ошибку 404, то скорее всего веб-сервер игнорирует файл `.htaccess`. Проверьте значение опции `AllowOverride`. В целях безопасности она обычно стоит в значении None, необходимо переопределить её в значение `All`, хотя бы для директории с сайтом.

#### Веб-сервер nginx

Поддержка реврайтинга URL в nginx включена изначально. Однако nginx не поддерживает файлы `.htaccess`, поэтому правила реврайтинга необходимо описать внутри конфига виртуального хоста. Приведу полностью пример такого конфига:

```
    server {
        listen       80;
        server_name  demosite.dev;

        set $project_root D:/Users/Pavel/Workspace/demosite;

        root $project_root/www;

        location / {
            try_files $uri @index-php;
            gzip            on;
            gzip_types      text/css application/javascript;
            expires         2w;
        }

        location ~ \.php$ {
            include                 fastcgi_params;
            fastcgi_pass            127.0.0.1:9000;
            fastcgi_index           index.php;
            fastcgi_param           SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        }

        location @index-php {
            rewrite                 ^/(.*)$ /index.php last;
        }
    }
```

Я думаю, вы догадаетесь что здесь надо подправить, чтобы всё заработало.

### Локальное доменное имя

Если у вас нет доменного имени для вашего сайта, то можете выбрать любое, например, "demosite.dev", прописав его в своём локальном файле [`/etc/hosts`](https://ru.wikipedia.org/wiki/Hosts). В Windows этот файл находится в `%SystemRoot%\System32\drivers\etc\hosts`. Отредактируйте его, добавив в него всего одну строчку:

```
127.0.0.1 demosite.dev
```

Теперь при попытке обращения браузером на сайт `http://demosite.dev`, ваш браузер будет обращаться к вашему локальному веб-серверу, сидящему на 80-м порту. В некоторых случаях, если вы пробовали заходить по этому адресу до того, как прописали его в `/etc/hosts`, может потребоваться перезапуск браузера. Если вы пользуетесь браузером Chrome и вместо открытия вашего сайта открывается поиск Google, то просто добавьте к адресу на конце слэш: `http://demosite.dev/`.
