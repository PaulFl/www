<?php header("Content-type: text/html;charset=utf-8"); ?><!DOCTYPE html><!--[if lt IE 10]><html class="no-js no-browser" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js browser" lang="en"><!--<![endif]--><head><meta charset="utf-8"><title>index · powered by h5ai 0.27.0 (http://larsjung.de/h5ai/)</title><meta name="description" content="index - powered by h5ai 0.27.0 (http://larsjung.de/h5ai/)"><meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="apple-mobile-web-app-capable" content="yes"><script type="text/javascript">
		(function(document,navigator,standalone) {
			// prevents links from apps from oppening in mobile safari
			// this javascript must be the first script in your <head>
			if ((standalone in navigator) && navigator[standalone]) {
				var curnode, location=document.location, stop=/^(a|html)$/i;
				document.addEventListener('click', function(e) {
					curnode=e.target;
					while (!(stop).test(curnode.nodeName)) {
						curnode=curnode.parentNode;
					}
					// Condidions to do this only on links to your own app
					// if you want all links, use if('href' in curnode) instead.
					if(
						'href' in curnode // is a link
					) {
						e.preventDefault();
						location.href = curnode.href;
					}
				},false);
			}
		})(document,window.navigator,'standalone');
	</script><link rel="shortcut icon" href="<?php echo APP_HREF; ?>client/images/favicon/favicon-16-32.ico"><link rel="apple-touch-icon-precomposed" type="image/png" href="<?php echo APP_HREF; ?>client/images/favicon/favicon-152.png"><link rel="stylesheet" href="<?php echo APP_HREF; ?>client/css/styles.css"><script src="<?php echo APP_HREF; ?>client/js/scripts.js" data-module="main"></script></head><body><div id="fallback-hints"><span class="noJsMsg">Works best with JavaScript enabled!</span><span class="noBrowserMsg">Works best in <a href="http://browsehappy.com">modern browsers</a>!</span><span class="backlink"><a href="http://paulf.tk/" title="Paul's website">Home</a></span></div><div id="fallback"><?php echo FALLBACK; ?></div></body></html>