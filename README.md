bing-ads-sdk-v9
===============

Composer friendly version of the Bing Ads SDK for PHP, API Version 9. This contains the PHP classes for version 9 of the Bing Ads web services. Classes for the request/response messages, data objects, and value set that each service defines in its WSDL are contained in this repository.

Files are downloaded directly from [Microsoft](http://go.microsoft.com/fwlink/?LinkId=329042), run through [onema/classyfile](https://github.com/onema/classyfile), and finally cleaned up with `phpcs --standard=PSR2`.

```bash
php /path/to/classyfile convert -d /path/to/repos/bing-ads-sdk-v9/src/ --remove-top-comment --psr-fix "/path/to/downloads/Bing Ads API in PHP/PHP/Bing Ads API in PHP/v9/bingads/"
phpcbf --standard=PSR2 /path/to/repos/bing-ads-sdk-v9/src
```

Library updated 2016-03-30
