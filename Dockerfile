FROM webdevops/php-nginx:ubuntu-18.04
LABEL maintainer="Mark Myers <marcusmyers@gmail.com>"
HEALTHCHECK CMD curl -f http://localhost/status || exit 1
STOPSIGNAL SIGKILL

ENV WEB_DOCUMENT_ROOT=/app/public
RUN apt-get update && \
    apt-get install -y mysql-client-5.7 tzdata locales && \
    apt-get -q clean && \
    rm -rf /var/lib/apt/lists/* && \
    localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8 && \
 		ln -sf /usr/share/zoneinfo/America/New_York /etc/localtime && \
		dpkg-reconfigure --frontend noninteractive tzdata

COPY --chown=application:application . /app
WORKDIR /app
