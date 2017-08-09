#YandexPddApi

[![Build Status](https://travis-ci.org/amaxlab/yandex-pdd-api.svg?branch=master)](https://travis-ci.org/amaxlab/yandex-pdd-api)
[![codecov](https://codecov.io/gh/amaxlab/yandex-pdd-api/branch/master/graph/badge.svg)](https://codecov.io/gh/amaxlab/yandex-pdd-api)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e1841a7f-bde4-483f-82ec-98995e84ea24/mini.png)](https://insight.sensiolabs.com/projects/e1841a7f-bde4-483f-82ec-98995e84ea24)

Client for [yandex pdd api](https://tech.yandex.ru/pdd/)

#Install
```bash
composer require amaxlab/yandex-pdd-api
```

#Usage

Get admin token for use API [link](https://pddimp.yandex.ru/api2/admin/get_token)

```php
<?php
include __DIR__.'/vendor/autoload.php';

$client = new \AmaxLab\YandexPddApi\Client('ADMIN TOKEN');
$dnsManager = $client->getDnsManager();
$records = $dnsManager->getRecords('domain.com');
```

##Domain manager
### [Get domain list](https://tech.yandex.ru/pdd/doc/reference/domain-domains-docpage/)
```php
$domainList = $client->getDomainManager()->getDomainList();
```
return instance of [GetDomainsListResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainsListResponse.php)

### [Register new domain](https://tech.yandex.ru/pdd/doc/reference/domain-register-docpage/)
```php
$response = $client->getDomainManager()->registerDomain('domain.com');
```
return instance of [RegisterDomainResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/RegisterDomainResponse.php)

### [Get domain registration status](https://tech.yandex.ru/pdd/doc/reference/domain-registrationstatus-docpage/)
```php
$response = $client->getDomainManager()->getRegistrationStatusDomain('domain.com');
```
return instance of [GetDomainRegistrationStatusResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainRegistrationStatusResponse.php)

### [Get domain settings](https://tech.yandex.ru/pdd/doc/reference/domain-details-docpage/)
```php
$response = $client->getDomainManager()->getDomainSettings('domain.com');
```
return instance of [GetDomainSettingsResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainSettingsResponse.php)

### [Delete domain](https://tech.yandex.ru/pdd/doc/reference/domain-delete-docpage/)
```php
$response = $client->getDomainManager()->deleteDomain('domain.com');
```
return instance of [DeleteDomainResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/DeleteDomainResponse.php)

### [Set domain country](https://tech.yandex.ru/pdd/doc/reference/domain-settings-set-country-docpage/)
Country ID by [ISO-3166-1](https://ru.wikipedia.org/wiki/ISO_3166-1) format
```php
$response = $client->getDomainManager()->setDomainCountry('domain.com', 'RU');
```
return instance of [SetDomainCountryResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/SetDomainCountryResponse.php)

##DNS manager
### [Add dns record](https://tech.yandex.ru/pdd/doc/reference/dns-add-docpage/)
Record must be instance [DnsRecordModel](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Model/DnsRecordModel.php). For creating simple record use [DnsRecordHelper](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Helper/DnsRecordHelper.php)
```php
$record = \AmaxLab\YandexPdd\Api\Helper\DnsRecordHelper::createARecord('domain.com', 'www', '127.0.0.1');
$response = $client->getDnsManager()->addRecord($record);
```
return instance of [AddDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/AddDnsRecordResponse.php)

### [Get dns records](https://tech.yandex.ru/pdd/doc/reference/dns-list-docpage/)
```php
$response = $client->getDnsManager()->getRecords('domain.com');
```
return instance of [GetDnsRecordsResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/GetDnsRecordsResponse.php)

### [Edit dns record](https://tech.yandex.ru/pdd/doc/reference/dns-edit-docpage/)
Record must be instance [DnsRecordModel](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Model/DnsRecordModel.php).
```php
$record->setContent('8.8.8.8');
$response = $client->getDnsManager()->editRecord($record);
```
return instance of [EditDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/EditDnsRecordResponse.php)

### [Delete dns record](https://tech.yandex.ru/pdd/doc/reference/dns-del-docpage/)
```php
$response = $client->getDnsManager()->deleteRecord('domain.com', 123);
```
return instance of [DeleteDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/DeleteDnsRecordResponse.php)


#TODO
- ~~Domain manager~~
- Domain logo manger
- Mail manager
- MailList manager
- ~~DNS manager~~
- Mail import
- DKIM manager
- Admin manager

#License

This library is released under the [MIT license](LICENSE)
