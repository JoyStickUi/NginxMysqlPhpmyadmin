FROM nginx
ADD nginx/conf/nginx.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/web
