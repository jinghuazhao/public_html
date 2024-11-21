#!/usr/bin/env python3

from flask import Flask, Request, request, url_for

from ucam_webauth.raven.flask_glue import AuthDecorator

#> from secrets import SECRET_KEY


class R(Request):
    # Whitelist your SRCF and/or custom domains to access the site via proxy.
    trusted_hosts = {"jhz22.user.srcf.net"}


app = Flask(__name__)
app.request_class = R

# Used to secure cookies.  Generate a long, random string.
# Example key generated using `os.urandom(32)`:
# app.secret_key = ("\x96\xb4\x14\x8c\x71\xec\x27\x0b\x10\xdd\x66\xa6\xf1\x00"
# 		    "\xad\xd2\x85\xa1\xe5\x85\x60\x6a\x04\x43\xf4\xf3\xad\x24")
#> app.secret_key = SECRET_KEY


# Optional, if you want to use Raven within your application.
# https://python-ucam-webauth.readthedocs.io/en/latest/
auth_decorator = AuthDecorator(desc="Sample SRCF Flask Setup")


@app.route("/")
def index():
    return "\n".join(["""<p>This is the index page.</p>""",
	              """<p>Full URL: {}</p>""".format(request.base_url),
                      """<p><a href="{}">Login with Raven</a></p>""".format(url_for("raven"))])

@app.route("/headers")
def headers():
    lines = ["""<ul>"""]
    for name, value in sorted(request.headers.items()):
        lines.append("""<li><b>{}</b>: {}</li>""".format(name, value))
    lines.append("""</ul>""")
    return "\n".join(lines)

@app.route("/raven")
@auth_decorator
def raven():
    return "Your CRSid: " + auth_decorator.principal
