Domain manager
==============
[Get domain list](https://tech.yandex.ru/pdd/doc/reference/domain-domains-docpage/)
-----------------
```php
$domainList = $client->getDomainManager()->getDomainList();
```
return instance of [GetDomainsListResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainsListResponse.php)

[Register new domain](https://tech.yandex.ru/pdd/doc/reference/domain-register-docpage/)
---------------------
```php
$response = $client->getDomainManager()->registerDomain('domain.com');
```
return instance of [RegisterDomainResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/RegisterDomainResponse.php)

[Get domain registration status](https://tech.yandex.ru/pdd/doc/reference/domain-registrationstatus-docpage/)
--------------------------------
```php
$response = $client->getDomainManager()->getRegistrationStatusDomain('domain.com');
```
return instance of [GetDomainRegistrationStatusResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainRegistrationStatusResponse.php)

[Get domain settings](https://tech.yandex.ru/pdd/doc/reference/domain-details-docpage/)
---------------------
```php
$response = $client->getDomainManager()->getDomainSettings('domain.com');
```
return instance of [GetDomainSettingsResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/GetDomainSettingsResponse.php)

[Delete domain](https://tech.yandex.ru/pdd/doc/reference/domain-delete-docpage/)
---------------
```php
$response = $client->getDomainManager()->deleteDomain('domain.com');
```
return instance of [DeleteDomainResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/DeleteDomainResponse.php)

[Set domain country](https://tech.yandex.ru/pdd/doc/reference/domain-settings-set-country-docpage/)
--------------------
Country ID by [ISO-3166-1](https://ru.wikipedia.org/wiki/ISO_3166-1) format
```php
$response = $client->getDomainManager()->setDomainCountry('domain.com', 'RU');
```
return instance of [SetDomainCountryResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/Domain/SetDomainCountryResponse.php)
