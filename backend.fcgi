#!./.env/bin/python3
from flup.server.fcgi import WSGIServer
from backend import app

if __name__ == '__main__':
    WSGIServer(app, bindAddress="/tmp/seanonymous.sock").run()