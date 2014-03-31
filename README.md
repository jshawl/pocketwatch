#PocketWatch.io

Is the easiest way to share your Pocket queue on the web.

[Generate Embed Code](http://pocketwatch.io/generate/) | 
[View Source](https://github.com/jshawl/pocketwatch)

## Getting Started

Include jQuery and the minified pocketwatch.min.js file:

    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script type="text/javascript" src="path/to/pocketwatch.min.js"></script>
    
Generate the embed code, and add it below:

    <script type='text/javascript'>
        $('.pocket-watch').pocketWatch({
            'access_token': 'YOUR_ACCESS_TOKEN',
            'count':10,
            'template':'<h1><a href="{{resolved_url}}">{{resolved_title}}</a></h1>{{excerpt}}'
        });
    </script>

## Available Plugin Options

All of the plugin options directly match the options for the Pocket API: http://getpocket.com/developer/docs/v3/retrieve
To view the available values, check out the unminified pocketwatch.js file: https://github.com/jshawl/pocketwatch/blob/master/client/js/readinglist.min.js#L59-66

## Getting Help

Found a bug? Need some assitance getting set up? Add an issue: https://github.com/jshawl/pocketwatch/issues/new

##Security Notice

By adding your access token to the front end script, anyone in the world will have unlimited read access to your pocket queue.
They will not be able to add, remove, or modify items, but can view the entire list. 

If this concerns you, you always have the option of self-hosting the proxy server, and adding your access token to the server side
code, which is found here: https://github.com/jshawl/pocketwatch/blob/master/proxy/index.php

