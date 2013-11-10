<!DOCTYPE html>
<html>
<head></head>
<body>
  <h1>PocketWatch.io</h1>
  <p>embed your Pocket queue on your site.</p>

<?php if(!$_GET['access_token']){?>
  <a href='./generate/'>Generate Code</a>
<?php } else { ?>

<h2>Usage:</h2>
<pre>
  &lt;script type="text/javascript" src="path/to/pocketwatch.min.js"&gt;&lt;/script>
</pre>

<pre>
  &lt;script type='text/javascript'>
  $('.reading-list').readingList({
      access_token: '<?php echo $_GET['access_token'];?>',
      limit:10,
      filter: 'favorite',
      template: '<h1><a href="{{resolved_url}}">{{resolved_title}}</a></h1>{{excerpt}}'
   });
  &lt;/script>
</pre>
<?php } ?>

</body>
</html>
