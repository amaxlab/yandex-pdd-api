YandexPddApi
============
[![Build Status](https://travis-ci.org/amaxlab/yandex-pdd-api.svg?branch=master)](https://travis-ci.org/amaxlab/yandex-pdd-api)
[![codecov](https://codecov.io/gh/amaxlab/yandex-pdd-api/branch/master/graph/badge.svg)](https://codecov.io/gh/amaxlab/yandex-pdd-api)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e1841a7f-bde4-483f-82ec-98995e84ea24/mini.png)](https://insight.sensiolabs.com/projects/e1841a7f-bde4-483f-82ec-98995e84ea24)

Client for [yandex pdd api](https://tech.yandex.ru/pdd/)

Requires
========
- php >= 5.4
- [netresearch/jsonmapper](https://github.com/cweiske/jsonmapper) >= 1.2

Install
=======
```bash
composer require amaxlab/yandex-pdd-api
```

Usage
=====
Get admin token for use API [link](https://pddimp.yandex.ru/api2/admin/get_token)

```php
<?php
include __DIR__.'/vendor/autoload.php';

$client = new \AmaxLab\YandexPddApi\Client('ADMIN TOKEN');
$dnsManager = $client->getDnsManager();
$records = $dnsManager->getRecords('domain.com');
```

Documentation
=============
- [DomainManager](https://github.com/amaxlab/yandex-pdd-api/blob/master/doc/DomainManager.md)
- [DnsManager](https://github.com/amaxlab/yandex-pdd-api/blob/master/doc/DnsManager.md)
- [MailBobManager](https://github.com/amaxlab/yandex-pdd-api/blob/master/doc/MailBoxManager.md)

TODO
====
- ~~Domain manager~~
- ~~DNS manager~~
- ~~MailBox manager~~
- Domain logo manger
- MailList manager
- MailImport manager
- DKIM manager
- Admin manager

License
=======
This library is released under the [MIT license](LICENSE)
