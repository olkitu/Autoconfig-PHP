# AutoconfigPHP

Autoconfig PHP is simple PHP script getting email settings to Outlook and Thunderbird email clients automatic. 

## Get Started

You need web server and php running on server. This is tested on Debian 8 and PHP 7.2.

* Webserver, Nginx or Apache
    * Valid SSL-certificate to your own domain
* PHP5 or 7 with php-xml

### Setup your domain DNS-records

You need add autoconfig and autodiscover A-records to pointing to your server.

* autoconfig.example.org A 192.168.11.2
* autodiscover.example.org A 192.168.11.2

If you like, you can also use SRV records on autodiscover address, so then need only one SSL-certificate on server.

* _autodiscover._tcp.example2.org SRV 0 443 autodiscover.example.org


## Download files and configure webserver

Clone repo to your server

```
git clone https://gitlab.truong.fi/minh/AutoconfigPHP.git
```

You see sample webserver configs on websrv-configs dir. 

## Testing

Use 'automx-test' command line client to testing

```
automx-test localpart@domainpart
```

## Authors

* Minh Truong