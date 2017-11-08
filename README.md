# AutoconfigPHP

Autoconfig PHP is simple PHP script getting email settings to Outlook and Thunderbird email clients automatic. 

## Get Started

You need web server and php running on server. This is tested on Debian 8 and PHP 7.2.

* Webserver, Nginx or Apache
* PHP5 or 7 with php-xml

### Setup your domain DNS-records

You need add autoconfig and autodiscover A-records to pointing to your server

autoconfig.example.org A 192.168.11.2
autodiscover.example.org A 192.168.11.2

## Download files and configure webserver

Git clone to your own server

```
https://gitlab.truong.fi/minh/AutoconfigPHP.git
```

You see sample webserver configs on websrv-configs dir. 

## Testing

Use 'automx-test' command line client to testing

```
automx-tst localpart@domainpart
```