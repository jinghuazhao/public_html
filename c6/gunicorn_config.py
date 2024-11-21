# gunicorn_config.py

# bind = "127.0.0.1:8000"
# bind = "unix:/home/jhz22/web.sock"
workers = 2
loglevel = "info"
errorlog = "/public/home/jhz22/logs/gunicorn_error.log"
accesslog = "/public/home/jhz22/logs/gunicorn_access.log"
