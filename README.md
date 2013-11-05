# Readinglist.js

## Client
http://client.readinglistjs.jshawl.com/
is the user facing bit of code. This contains all of the JavaScript that makes calls to the proxy server.

## Proxy
http://proxy.readinglistjs.jshawl.com/
is a service that allows JSONP requests to the Pocket API. Pocket does not allow JavaScript post requests, so we have to add this layer of abstraction to interact with their API via JavaScript.

## Server
http://server.readinglistjs.jshawl.com/
is the user-facing documentation site. It allows the user to generate their reading list code.
