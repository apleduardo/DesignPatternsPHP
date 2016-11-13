FROM php
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD ["php", "-S", "0.0.0.0:82"]
RUN apt-get update && apt-get install -y \ 
	unzip

EXPOSE 83
