#!/bin/bash

# Part of Spotyfi-cli
# invoke_server.sh
# Invoke web server to get authorization token.

set -eu

_PORT=$1
_DOCROOT=$2
php --server "localhost:${_PORT}" --docroot "${_DOCROOT}" &

# vim: ft=bash ts=2 sw=2 et ff=unix fenc=utf-8
