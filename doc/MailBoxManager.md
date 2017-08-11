MailBox manager
==============

[Add mailbox](https://tech.yandex.ru/pdd/doc/reference/email-add-docpage/)
-------------
```php
$response = $client->getMailBoxManager()->addMailBox('domain.com', 'test@domain.com', 'secret');
```
return instance of [AddMailBoxResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/MailBox/AddMailBoxResponse.php)

[Get mailbox list](https://tech.yandex.ru/pdd/doc/reference/email-list-docpage/)
------------------
```php
$response = $client->getMailBoxManager()->getMailBoxes('domain.com', 1, 30);
```
return instance of [GetMailBoxListResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/MailBox/GetMailBoxListResponse.php)

[Edit mailbox](https://tech.yandex.ru/pdd/doc/reference/email-edit-docpage/)
--------------
```php
$mailBox = new \AmaxLab\YandexPddApi\Model\MailBoxModel();
$mailBox
    ->setUid(123)
    ->setLogin('test@domain.com')
    ->setPassword('new_password')
;
$response = $client->getMailBoxManager()->editMailBox('domain.com', $mailBox);
```
return instance of [EditMailBoxResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/MailBox/EditMailBoxResponse.php)


[Delete mailbox](https://tech.yandex.ru/pdd/doc/reference/email-del-docpage/)
----------------
```php
$response = $client->getMailBoxManager()->deleteMailBox('domain.com', 'test@domain.com');
```
return instance of [DeleteMailBoxResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/MailBox/DeleteMailBoxResponse.php)

[Get mail count in mailbox](https://tech.yandex.ru/pdd/doc/reference/email-counters-docpage/)
---------------------------
```php
$response = $client->getMailBoxManager()->getMailCountInMailBox('domain.com', 'test@domain.com');
```
return instance of [GetMailCountInMailBoxListResponse](https://github.com/amaxlab/yandex-pdd-api/blob/master/src/Response/MailBox/GetMailCountInMailBoxListResponse.php)
