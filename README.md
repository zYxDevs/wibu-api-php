# Wibu-API-PHP
[![Repo Size](https://img.shields.io/github/repo-size/zYxDevs/wibu-api-php?style=flat-square)](https://github.com/zYxDevs/wibu-api-php)  [![Languages](https://img.shields.io/github/languages/top/zYxDevs/wibu-api-php?style=flat-square)](https://github.com/zYxDevs/wibu-api-php)

_Official PHP Wrapper for Wibu API_

[![wibu-api-php](https://socialify.git.ci/zYxDevs/wibu-api-php/image?description=1&font=Source%20Code%20Pro&forks=1&issues=1&language=1&logo=https%3A%2F%2F1000logos.net%2Fwp-content%2Fuploads%2F2021%2F04%2FTelegram-logo.png&owner=1&pattern=Plus&pulls=1&stargazers=1&theme=Light)](https://t.me/SpreadNetworks)

## How to Install
```
composer require zyxdevs/wibuapi
```

## How to use
```php
$api = new WibuAPI();
$result = $api->lendrive("https://lendrive.web.id/tondemo-skill-de-isekai-hourou-meshi-ep-04-dual-subs-x265-hevc-subtitle-indonesia-english");
echo $result;
```
