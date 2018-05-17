FROM amazonlinux:2018.03

RUN yum -y update

RUN yum -y install git zip unzip

# apache download
RUN yum -y install httpd

# php install & setup
# RUN rpm -ivh http://dl.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
# RUN rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
RUN yum -y install http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
RUN yum -y install --disablerepo=amzn-main --enablerepo=epel libwebp
RUN yum -y install libmcrypt \
                   libtool-ltdl \
                   libtidy \
                   libXpm \
                   libtiff \
                   gd-last \
                   autoconf \
                   automake \
                   libxslt
RUN yum -y install --disablerepo=amzn-main --enablerepo=remi-php71 \
                   php \
                   php-mbstring \
                   php-mcrypt \
                   php-mysqlnd \
                   php-soap \
                   php-pdo \
                   php-devel \
                   php-xml
# modify php.ini
RUN sed -i -e "s|^;date.timezone =.*$|date.timezone = Asia/Tokyo|" /etc/php.ini

# composer download
RUN curl -s https://getcomposer.org/installer | php
RUN mv ./composer.phar /usr/local/bin/composer

# timezone
RUN cp /usr/share/zoneinfo/Japan /etc/localtime

# copy httpd.conf
COPY ./httpd.conf /etc/httpd/conf.d/httpd.conf

EXPOSE 80
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
