FROM php:8.1.8-fpm
# create system user ("yactouatdev" with uid 1000)
RUN useradd -G www-data,root -u 1000 -d /home/yactouatdev yactouatdev
RUN mkdir /home/yactouatdev && \
    chown -R yactouatdev:yactouatdev /home/yactouatdev
# copy existing application directory contents
RUN mkdir /yactouatdev
WORKDIR /yactouatdev
COPY .. .
# shared PHP conf
RUN mv /yactouatdev/docker/shared.ini /usr/local/etc/php/conf.d/shared.ini
# error reporting is suitable for DEV here
RUN mv /yactouatdev/docker/error-reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini
# copy existing application directory permissions
COPY --chown=yactouatdev:yactouatdev .. /yactouatdev
# changing user (because cannot run Composer as root inside container)
USER yactouatdev

EXPOSE 9000