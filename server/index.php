<!DOCTYPE html>
<html>
<head></head>
<body>
  <h1>ReadingList.js</h1>
  <p>embed your Pocket queue on your site.</p>

<?php if(!$_GET['access_token']){?>
  <a href='./generate/'>Generate Code</a>
<?php } else { ?>

<h2>Usage:</h2>
<pre>
  &lt;script type="text/javascript" src="path/to/readinglist.min.js"></script>
</pre>

<pre>
  <script type='text/javascript'>
  $('.reading-list').readingList({
      access_token: '<?php echo $_GET['access_token'];?>',
      limit:10,
      filter: 'favorite'
   });

  </script>
</pre>
<?php } ?>

</body>
</html>
