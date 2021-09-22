FROM laravelphp/vapor:php80

RUN apk --update add ffmpeg

RUN apk --update add ca-certificates

RUN update-ca-certificates

# RUN cp /usr/local/etc/openssl@1.1/cert.pem /opt/cert.pem
# RUN cp "/etc/ssl/cert.pem" /opt/cert.pem

COPY ./php.ini /usr/local/etc/php/conf.d/overrides.ini

COPY . /var/task

# RUN curl https://curl.haxx.se/ca/cacert.pem -o /etc/ssl/cert.pem

# COPY cert.pem /etc/ssl/cert.pem
