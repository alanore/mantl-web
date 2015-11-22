FROM tutum/apache-php:latest
MAINTAINER Alan OReilly

ADD index.php /app/index.php
ADD logo.png /app/logo.png

EXPOSE 80
WORKDIR /app
CMD ["/run.sh"]