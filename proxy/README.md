# The Proxy Server

As of Nov 10, 2013, the pocket API requires POST requests to retrieve data. Because their servers deny cross origin POST
requests in JavaScript, we had to implement a proxy server which grabs $_GET parameters and $_POST's them to the
Pocket API. 
