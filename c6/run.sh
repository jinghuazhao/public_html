#!/bin/bash -e

exec gunicorn -c gunicorn_config.py app:app

function uWSGI()
{
  uwsgi --socket /home/jhz22/web.sock --enable-threads --processes 2 --master --chmod-socket=666 --buffer-size=32768 \
        --plugin python3 --wsgi-file app.py --callable app
  uwsgi --ini uwsgi.ini
}
