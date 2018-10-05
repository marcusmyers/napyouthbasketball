FROM webdevops/php-nginx:ubuntu-18.04
LABEL maintainer="Mark Myers <marcusmyers@gmail.com>"
HEALTHCHECK CMD curl -f http://localhost/status || exit 1
STOPSIGNAL SIGKILL

ENV WEB_DOCUMENT_ROOT=/app/public
RUN apt-get update && \
    apt-get install -y mysql-client-5.7 && \
    apt-get -q clean && \
    rm -rf /var/lib/apt/lists/*

COPY . /app
WORKDIR /app
