<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="k0nsl">
    <meta name="description" content="benchmark tool geared toward Debian-based distros.">
    <meta name="viewport" content="width=device-width">

    <title>bench.sh &mdash; benchmarking tool</title>

    <link rel="me" href="https://github.com/k0nsl" />
    <link rel="me" href="https://twitter.com/k0nsl" />
    <link rel="me" href="mailto:i.am@k0nsl.org" />
    <link rel="pgpkey" href="https://pgp.mit.edu/pks/lookup?op=vindex&search=0x7272DBC1" />

    <!-- default style -->
    <link rel="stylesheet" href="/static/normalize.css" />
    <!-- pretty custom styles -->
    <link rel="stylesheet" href="/static/main.css" />
    <!-- code styles -->
    <link rel="stylesheet" href="/static/code.css" />

    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet"> 

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <meta property="og:title" content="bench.sh &mdash; benchmarking tool" />
    <meta property="og:url" content="http://bench.mirror.k0nsl.org/" />
    <meta property="og:description" content="A rudimentary &lsquo;no bullshit&rsquo; benchmark tool geared toward Debian-based distros." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.min.css" />
<!--[if lt IE 9]>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.ie.min.css" />
<![endif]-->
 
  </head>

  <body>
    <header>
      <h1 style="font-family: 'Press Start 2P', monospace; color:red;">bench.sh</h1>
<p align="center">
<i>A rudimentary &lsquo;no bullshit&rsquo; benchmark tool primarily geared toward Debian-based distros.</i>
</p>
      <nav>
	<h2>Run benchmark:</h2>
        <p><pre>curl -Lso- k0nsl.org/bag/bench/bench.sh|bash</pre></p>
	<h2>Example output:</h2>
<pre style="font-family: 'Press Start 2P', monospace; font-size:10px">
<?php
if (file_exists(__DIR__ . '/bench-stats.out'))
{
    include __DIR__ . '/bench-stats.out';
}
?>
</pre>

      </nav>
    </header>

    <main>

    <p>The example output shown above is automatically generated hourly. You just have to reload the page<sup>1</sup>.</p>

  <h2>Links, projects and more</h2>

  <ul>
    
    <li>
      <a href="https://k0nsl.org/blog/">https://k0nsl.org/blog/</a> &mdash; <small>[primary blog]</small>
    </li>
    
    <li>
      <a href="https://blog.k0nsl.org">https://blog.k0nsl.org</a> &mdash; <small>[secondary blog powered by Ghost]</small>
    </li>

    <li>
      <a href="https://survivor.k0nsl.org/">https://survivor.k0nsl.org/</a> &mdash; <small>[k0nslIRC; my IRC network]</small>
    </li>

    <li>
      <a href="https://webirc.k0nsl.ru">https://webirc.k0nsl.ru</a> &mdash; <small>[a webIRC client to conveniently access my IRC network]</small>
    </li>

    <li>
      <a href="http://ifconfig.k0nsl.org/">http://ifconfig.k0nsl.org/</a> &mdash; <small>[a simple tool for obtaining your IP address]</small>
    </li>
    
  </ul>

<p>Refs.</p>
<ol type="1"><li>In the future I may implement a solution which does that automatically because I'm a a bit of fan of such things myself, even though it is rather pointless and adds bloat.</li></ol>
</main>


    <footer>
      <p><small>Crafted by k0nsl (<a href="mailto:i.am@k0nsl.org">i.am@k0nsl.org</a>) and powered by <a href="https://my.frantech.ca/aff.php?aff=781" target="_blank">BuyVM</a>. Last updated: <time datetime="1493293260">Thu Apr 27 07:37:31 EDT 2017</time></small></p>
    </footer>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Press+Start+2P::latin', 'Open+Sans::latin', 'VT323' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//s.k0nsl.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//s.k0nsl.org/piwik.php?idsite=1" style="border:0;" alt=""/></p></noscript>

<a class="github-fork-ribbon" href="https://github.com/k0nsl/k0nsl-misc/blob/master/bench.sh" title="Fork me on GitHub">Fork me on GitHub</a>

  </body>
</html>