DNS manager
===========
[Add dns record](https://tech.yandex.ru/pdd/doc/reference/dns-add-docpage/)
----------------
Record must be instance [DnsRecordModel](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Model/DnsRecordModel.php). For creating simple record use [DnsRecordHelper](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Helper/DnsRecordHelper.php)
```php
$record = \AmaxLab\YandexPdd\Api\Helper\DnsRecordHelper::createARecord('domain.com', 'www', '127.0.0.1');
$response = $client->getDnsManager()->addRecord($record);
```
return instance of [AddDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/AddDnsRecordResponse.php)

[Get dns records](https://tech.yandex.ru/pdd/doc/reference/dns-list-docpage/)
-----------------
```php
$response = $client->getDnsManager()->getRecords('domain.com');
```
return instance of [GetDnsRecordsResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/GetDnsRecordsResponse.php)

[Edit dns record](https://tech.yandex.ru/pdd/doc/reference/dns-edit-docpage/)
-----------------
Record must be instance [DnsRecordModel](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Model/DnsRecordModel.php).
```php
$record->setContent('8.8.8.8');
$response = $client->getDnsManager()->editRecord($record);
```
return instance of [EditDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/EditDnsRecordResponse.php)

[Delete dns record](https://tech.yandex.ru/pdd/doc/reference/dns-del-docpage/)
-------------------
```php
$response = $client->getDnsManager()->deleteRecord('domain.com', 123);
```
return instance of [DeleteDnsRecordResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Dns/DeleteDnsRecordResponse.php)
