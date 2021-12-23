#!/usr/bin/env bash

set -e

crontab /var/crontab.txt

envsubst '$APP_DOMAIN' </etc/nginx/templateSite.conf >/etc/nginx/sites_enabled/site.conf
envsubst </etc/nginx/templateNginx.conf >/etc/nginx/nginx.conf
envsubst  </etc/zzz_custom.ini >/etc/php7/conf.d/zzz_custom.ini

exec "$@"