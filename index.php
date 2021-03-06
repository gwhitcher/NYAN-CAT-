<!DOCTYPE html>
<html>
  <head xmlns:fb='http://www.facebook.com/2008/fbml' xmlns:og='http://ogp.me/ns#'>
    <meta content='NON-STOP NYAN CAT!' property='og:title' />
    <meta content='website' property='og:type' />
    <meta content='http://nyan.cat' property='og:url' />
    <meta content='http://nyan.cat/images/nyancat.png' property='og:image' />
    <meta content='NYAN CAT' property='og:site_name' />
    <meta content='2514152' property='fb:admins' />
    <meta content='ENDLESS LOOP OF NYAN CAT NYANING! SO MESMERIZING OMG!' property='og:description' />

    <meta content='yes' name='apple-mobile-web-app-capable' />
    <meta content='black-translucent' name='apple-mobile-web-app-status-bar-style' />
    <meta content='width = 1000, initial-scale = .25, user-scalable = yes' name='viewport' />
    <link type="text/css" media="screen" rel="stylesheet" href="stylesheets/screen.css" />
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="soundmanager2-nodebug-jsmin.js"></script>
    <script type='text/javascript'>
      //<![CDATA[
        jQuery.extend(jQuery.browser,
          {SafariMobile : navigator.userAgent.toLowerCase().match(/iP(hone|ad|od)/i) }
        );
        
        /**
         * Storage plugin
         *
         * @author Dave Schindler
         *
         * Distributed under the MIT License
         *
         * Copyright (c) 2010 Dave Schindler
         *
         * Permission is hereby granted, free of charge, to any person obtaining a copy
         * of this software and associated documentation files (the "Software"), to deal
         * in the Software without restriction, including without limitation the rights
         * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
         * copies of the Software, and to permit persons to whom the Software is
         * furnished to do so, subject to the following conditions:
         *
         * The above copyright notice and this permission notice shall be included in
         * all copies or substantial portions of the Software.
         *
         * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
         * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
         * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
         * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
         * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
         * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
         * THE SOFTWARE.
         */
        (function($) {
        	// Private data
        	var isLS=typeof window.localStorage!=='undefined';
        	// Private functions
        	function wls(n,v){var c;if(typeof n==="string"&&typeof v==="string"){localStorage[n]=v;return true;}else if(typeof n==="object"&&typeof v==="undefined"){for(c in n){if(n.hasOwnProperty(c)){localStorage[c]=n[c];}}return true;}return false;}
        	function wc(n,v){var dt,e,c;dt=new Date();dt.setTime(dt.getTime()+31536000000);e="; expires="+dt.toGMTString();if(typeof n==="string"&&typeof v==="string"){document.cookie=n+"="+v+e+"; path=/";return true;}else if(typeof n==="object"&&typeof v==="undefined"){for(c in n) {if(n.hasOwnProperty(c)){document.cookie=c+"="+n[c]+e+"; path=/";}}return true;}return false;}
        	function rls(n){return localStorage[n];}
        	function rc(n){var nn, ca, i, c;nn=n+"=";ca=document.cookie.split(';');for(i=0;i<ca.length;i++){c=ca[i];while(c.charAt(0)===' '){c=c.substring(1,c.length);}if(c.indexOf(nn)===0){return c.substring(nn.length,c.length);}}return null;}
        	function dls(n){return delete localStorage[n];}
        	function dc(n){return wc(n,"",-1);}
        	/**
        	* Public API
        	* $.Storage - Represents the user's data store, whether it's cookies or local storage.
        	* $.Storage.set("name", "value") - Stores a named value in the data store.
        	* $.Storage.set({"name1":"value1", "name2":"value2", etc}) - Stores multiple name/value pairs in the data store.
        	* $.Storage.get("name") - Retrieves the value of the given name from the data store.
        	* $.Storage.remove("name") - Permanently deletes the name/value pair from the data store.
        	*/
        	$.extend({
        		Storage: {
        			set: isLS ? wls : wc,
        			get: isLS ? rls : rc,
        			remove: isLS ? dls :dc
        		}
        	});
        })(jQuery);
        
        soundManager.url = 'swf/';
        soundManager.flashVersion = 9;
        soundManager.useFlashBlock = false;
        soundManager.onready(function() {
          soundManager.createSound({
            id: 'loop',
            // url: '/mp3s/nyan-looped.mp3',
            // url: 'http://s3.amazonaws.com/nyan.cat/nyan-looped.mp3',
            url: 'http://api.ning.com:80/files/3zmSvhA*3jKxFJj1I5uh5dp5oCynyyMksQjwS3JWWQNlriTzDzX61KtlFnuQtx-hEmV7NdqVgofmZvh7cXOX-UVJ47m1SR4a/nyanlooped.mp3',
            autoLoad: true,
            autoPlay: true,
            loops: 9999999,
            onload: function() {
            },
            onfinish: function() {
              // if($.browser.SafariMobile){
              //   this.play();
              // }
            },
            volume: 50
          });
        });
      //]]>
    </script>

    <title>404 ERROR - NON-STOP NYAN CAT!</title>
  </head>
  <body>
    <h1 class='i18n' data-cat='404 ERROR - NYAN GAT SENSE PARAR' data-en='404 ERROR - NON-STOP NYAN CAT!' data-jp='???????????!' data-nyan='NYAN-NYAN NYAN NYAN!'>404 ERROR - NON-STOP NYAN CAT!</h1>
    <!-- .hint -->
    <!-- New easter egg added 5/17! You gotta stay here for about 33 minutes though ^^ -->
    <script type='text/javascript'>
      //<![CDATA[
        var tweetPrefix = {
          en: "I HAVE NYANED FOR",
          cat: "TINC NYAN PER",
          nyan: "NYAN NYANED NYA",
          jp: ""
        }
        var tweetSuffix = {
          en: "SECONDS",
          cat: "SEGON",
          nyan: "NYANS",
          jp: "??????!"
        }
        var tweetPrefixActive = tweetPrefix.en;
        var tweetSuffixActive = tweetSuffix.en;
        var lang = "en";
      //]]>
    </script>

    <div class='rainbows'>
      <div class='wrapper'>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-1'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-2'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-3'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-4'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-5'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
        <div class='rainbow frame-6'>
              <div class='wave wave-1'></div>
              <div class='wave wave-2'></div>
              <div class='wave wave-3'></div>
              <div class='wave wave-4'></div>
              <div class='wave wave-5'></div>
              <div class='wave wave-6'></div>

              <div class='wave wave-7'></div>
            </div>
      </div>
    </div>
    <div class='nyan-cat'>
      <!-- = star(1, 0,0) -->
      <!-- = star(2, 100,0) -->
      <!-- = star(3, 200,0) -->
      <!-- = star(4, 300,0) -->

      <!-- = star(5, 400,0) -->
      <!-- = star(6, 500,0) -->
    </div>
    <div class='star frame-2' style='left:931px; top:605px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>

            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:140px; top:915px;'>
          <div class='wrapper'>

            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>

          </div>
        </div>
    <div class='star frame-3' style='left:497px; top:536px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>

            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:352px; top:915px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>

            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>

        </div>
    <div class='star frame-5' style='left:455px; top:117px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>

            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:607px; top:227px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>

            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>

    <div class='star frame-4' style='left:23px; top:19px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>

            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:603px; top:75px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>

            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:407px; top:1073px;'>

          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>

            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-1' style='left:723px; top:188px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>

            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:514px; top:208px;'>
          <div class='wrapper'>

            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>

          </div>
        </div>
    <div class='star frame-3' style='left:504px; top:471px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>

            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-4' style='left:1518px; top:491px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>

            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>

        </div>
    <div class='star frame-1' style='left:1294px; top:108px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>

            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:1399px; top:664px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>

            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>

    <div class='star frame-1' style='left:14px; top:18px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>

            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:360px; top:817px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>

            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-1' style='left:1141px; top:995px;'>

          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>

            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:734px; top:224px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>

            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-2' style='left:1230px; top:221px;'>
          <div class='wrapper'>

            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>

          </div>
        </div>
    <div class='star frame-5' style='left:267px; top:183px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>

            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:654px; top:587px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>

            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>

        </div>
    <div class='star frame-3' style='left:833px; top:975px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>

            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-1' style='left:1412px; top:149px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>

            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>

    <div class='star frame-6' style='left:751px; top:98px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>

            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-1' style='left:101px; top:39px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>

            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-6' style='left:940px; top:682px;'>

          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>

            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-5' style='left:693px; top:267px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>

            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-1' style='left:1512px; top:690px;'>
          <div class='wrapper'>

            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>

          </div>
        </div>
    <div class='star frame-1' style='left:1079px; top:818px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>

            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-3' style='left:125px; top:781px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>

            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>

        </div>
    <div class='star frame-4' style='left:1057px; top:498px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>

            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-4' style='left:268px; top:975px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>

            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>

    <div class='star frame-3' style='left:729px; top:78px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>
            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>

            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div class='star frame-2' style='left:450px; top:1022px;'>
          <div class='wrapper'>
            <div class='dot dot-1'></div>
            <div class='dot dot-2'></div>
            <div class='dot dot-3'></div>

            <div class='dot dot-4'></div>
            <div class='dot dot-5'></div>
            <div class='dot dot-6'></div>
            <div class='dot dot-7'></div>
            <div class='dot dot-8'></div>
            <div class='dot dot-9'></div>
          </div>
        </div>
    <div id='timer'>

      <div class='i18n' data-cat='Has NYANED per' data-en="You've NYANED for" data-jp='??????????' data-nyan='NYAN NYANED NYA'>You've NYANED for</div>
      <div class='time'>
        <span class='seconds'>0</span>
        <span class='i18n' data-cat='segon' data-en='seconds' data-jp='?' data-nyan='NYANS'>seconds</span>
      </div>
      <div class='tweet-score i18n' data-cat='Tweeteja la teva puntuaci�' data-en='Tweet Your Score' data-jp='??????????????' data-nyan='NYAN NYA NYAN'>
        Tweet Your Score
      </div>

      <div class='disclaimer i18n' data-cat='No et preocupis, aix� obre una finestra nova ^^' data-en="Don't worry, this opens a new window ^^" data-jp='????????????????????? :3' data-nyan='NYA NYAN, NYAN NYAN NYA NYA NYAN ^^'>
        Don't worry, this opens a new window ^^
      </div>
      <div class='follow i18n' data-cat='Seguir @nyannyancat' data-en='Follow @nyannyancat' data-jp='@nyannyancat ?????' data-nyan='NYAN @nyannyancat'>
        Follow @nyannyancat
      </div>
      <script type='text/javascript'>
        //<![CDATA[
          $(function(){
            $(".tweet-score").click(function() {
              href = "http://twitter.com/share?_=1303084972176&count=horizontal&text=" + encodeURIComponent(tweetPrefixActive) + "%20" + seconds + "%20" + encodeURIComponent(tweetSuffixActive) + "!&url=http%3A%2F%2Fnyan.cat&via=nyannyancat"
              window.open(href, '_blank')
              _gaq.push(['_trackEvent', 'Click off', 'Tweet Score', seconds]);
            })
            $(".follow").click(function() {
              href = "http://twitter.com/nyannyancat"
              window.open(href, '_blank')
              _gaq.push(['_trackEvent', 'Click off', 'Follow @nyannyancat', seconds]);
            })
            if($.browser.SafariMobile){
              $(".i18n-pane").hide();
              $("#timer").css("font-size","40em").append("<div id='play'>I WANT NYAN<span>(click me)</span></div>")
              $("#play").click(function() {
                soundManager.play('loop', { onfinish: function() {
                  soundManager.play('loop')
                }})
                $(this).fadeOut();
              })
            }
          })
        //]]>
      </script>
    </div>

      <div id='attribution'>
        <a class='i18n open-attribution' data-cat='sobre' data-en='About' data-jp='????' data-nyan='NYAN' href='#'>About</a>
        <div class='breakout'>
          <span class='i18n' data-cat='Per' data-en='Site by' data-jp='By' data-nyan='NYAN'>Site by</span>

          <a href='http://twitter.com/huy' onclick="_gaq.push(['_trackEvent', 'Click off', '@huy']);" target='_blank'>@huy</a>
          .
          <a class='i18n' data-cat='V�deo Original' data-en='Original Video' data-jp='????' data-nyan='NYAN NYAN' href='http://www.youtube.com/watch?v=QH2-TGUlwu4' onclick="_gaq.push(['_trackEvent', 'Click off', 'Original Video']);" target='_blank'>Original Video</a>
          .
          <a class='i18n' data-cat='GIF Original' data-en='Original GIF' data-jp='??GIF' data-nyan='NYAN NYAN' href='http://www.prguitarman.com/index.php?id=348' onclick="_gaq.push(['_trackEvent', 'Click off', 'Original GIF']);" target='_blank'>Original GIF</a>
          .
          <a class='i18n' data-cat='Samarretes' data-en='Shirts' data-jp='T???' data-nyan='NYANS' href='http://www.poptartcat.com' onclick="_gaq.push(['_trackEvent', 'Click off', 'Shirts']);" target='_blank'>Shirts</a>
          .
          <a class='i18n' data-cat='Can�� Original' data-en='Original Song' data-jp='??' data-nyan='NYAN NYAN' href='http://www.nicomimi.net/play/sm13455867' onclick="_gaq.push(['_trackEvent', 'Click off', 'Original Song']);" target='_blank'>Original Song</a>

        </div>
      </div>
    </div>
    <div class='i18n23' data-cat='baixar el volum' data-en='lower the volume' data-jp='??????' data-nyan='NYAN NYAN NYAN' id='volume'>
      lower the volume
    </div>
    <script type='text/javascript'>
      //<![CDATA[
        $("#twitter-share-button-wrapper").hover(function() {
          $('#twitter-share-button').html("<a class='twitter-share-button' data-count='horizontal' data-text='" + tweetPrefixActive + " " + $("#timer .seconds").text() + " " + tweetSuffixActive + "!', data-url='http://nyan.cat' data-via='nyannyancat' href='http://twitter.com/share'>&nbsp;</a>")
          $.getScript('http://platform.twitter.com/widgets.js');
        })
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
        // STARS AND RAINBOW ANIMATIONS
        function animateStars() {
          $('.star').each(function() {
            thisFrame = $(this).attr('class');
            thisFrame = thisFrame.split(' ');
            thisFrame = thisFrame[1].split('-');
            thisFrame = parseInt(thisFrame[1]);
            if(thisFrame == 6) {
              $(this).remove();
            } else {
              $(this).removeClass("frame-" + String(thisFrame)).addClass("frame-" + String(parseInt(thisFrame) + 1));
            }
          })
        }
        animateStarsTimer = setInterval( animateStars, 500 );
        function placeStar() {
          var newStar = $("<div class='star frame-1'><div class='wrapper'><div class='dot dot-1'></div><div class='dot dot-2'></div><div class='dot dot-3'></div><div class='dot dot-4'></div><div class='dot dot-5'></div><div class='dot dot-6'></div><div class='dot dot-7'></div><div class='dot dot-8'></div><div class='dot dot-9'></div></div></div>");
          newStar.css({
            top: Math.floor(Math.random() * 1600),
            left: Math.floor(Math.random() * 1200)
          });
          $('body').append(newStar);
        }
        placeStarTimer = setInterval( placeStar, 150);
        function animateRainbow() {
          $('.rainbows').toggleClass("shift")
        }
        animateRainbowTimer = setInterval( animateRainbow, 400);
        var startTime = new Date;
        var currentTime = new Date;
        var seconds;
        function timeOnSite() {
          currentTime = new Date;
          seconds = parseFloat((currentTime - startTime) / 1000).toFixed(1);
          $("#timer .seconds").text(seconds);
        }
        setTimeOnSite = setInterval( timeOnSite, 100);
        $(".open-attribution").click(function() {
          $(this).siblings(".breakout").fadeIn();
          $(this).hide()
          _gaq.push(['_trackEvent', 'Click', 'Open Attribution'])
          return false
        })
        
        
        // NUGGETS
        function blowUpBackground() {
          hyperColors = ["#0f4d8f", "#0f8f2a", "#8f5a0f", "#8f0f0f", "#840f8f"]
          $("body").css("background-color", hyperColors[Math.floor(Math.random()*hyperColors.length)])
        }
        currentVolume = 50;
        function volumeDown() {
          currentVolume = currentVolume + 15
          if (currentVolume >= 150) {
            soundManager.setVolume('loop',200);
            setSiteOnFire = setInterval( blowUpBackground, 150);
            $("#volume").hide();
            _gaq.push(['_trackEvent', 'Background Blew', seconds]);
          } else {
            soundManager.setVolume('loop',currentVolume);
          }
        }
        $("#volume").click(function() {
          _gaq.push(['_trackEvent', 'Lower Volume', currentVolume]);
          if (currentVolume == 95) {
            $(this).text("OMG!!!!!!")
          } else if (currentVolume == 110) {
            $(this).text("OMG!!!!!!!!!!!!!!")
          } else if (currentVolume == 125) {
            $(this).text("OMG!!!!!!!!!!!!!!!!!!!!!!!!!!!!")
          }
          volumeDown();
        })
        function lala() {
          if($.Storage.get("troubadourMode") == "1") {
            $("body").append('<div class="troubadour-button">Enable Karaoke Mode</div>')
            $(".troubadour-button").click(function() {
              $(this).hide()
              troubadourMode()
            })
          }
        }
      //]]>
    </script>

    <ul class='i18n-pane'>
      <li class='i18n' data-cat='El Teu Idioma' data-en='Your Language' data-jp='????' data-nyan='NYAN NYAN'>
        Your Language
      </li>
      <li>
        <a class='lang' href='javascript:void(0)' lang='en'>English</a>
      </li>
      <li>
        (<a class='learn' href='http://www.catalanculture.com/' target='_blank'>Learn more!</a>)
        <a class='lang' href='javascript:void(0)' lang='cat'>Catalan</a>

      </li>
      <li>
        <a class='lang' href='javascript:void(0)' lang='nyan'>NYAN</a>
      </li>
      <li>
        <a class='lang' href='javascript:void(0)' lang='jp'>Japanese</a>
      </li>
    </ul>

    <script type='text/javascript'>
      //<![CDATA[
        $(".i18n-pane a.lang").click(function() {
          lang = $(this).attr('lang');
          _gaq.push(['_trackEvent', 'Language', lang]);
          switch(lang) {
            case "en":
              tweetPrefixActive = tweetPrefix.en;
              tweetSuffixActive = tweetSuffix.en;
              break;
            case "nyan":
              tweetPrefixActive = tweetPrefix.nyan;
              tweetSuffixActive = tweetSuffix.nyan;
              break;
            case "cat":
              tweetPrefixActive = tweetPrefix.cat;
              tweetSuffixActive = tweetSuffix.cat;
              break;
            case "jp":
              tweetPrefixActive = tweetPrefix.jp;
              tweetSuffixActive = tweetSuffix.jp;
              break;
          }
          
          $(".i18n").each(function() {
            $(this).text($(this).attr("data-" + lang))
          })
        })
        $(".i18n-pane .learn").click(function() {
          _gaq.push(['_trackEvent', 'Click off', 'catalanculture.com']);
        })
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-22720879-1']);
        _gaq.push(['_trackPageview']);
        
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      //]]>
    </script>
    <script type='text/javascript'>
      //<![CDATA[
        function overNyanThousandAchieved() {
          _gaq.push(['_trackEvent', 'Over Nyan Thousand', ':3'])
          $.Storage.set("overNyanThousand", "1")
          // OMG STOP LOOKING AT THIS AND THINKING YOU'RE GOING TO GET SOMETHING FOR STAYING HERE THAT LONG :3
        }
        function troubadourModeAchieved() {
          _gaq.push(['_trackEvent', 'Troubadour Mode Achieved', ':3'])
          console.log("Setting Troubadour Mode")
          $.Storage.set("troubadourMode", "1")
          lala()
        }
        var troubadourPhrases = ["NYAN NYAN", "NYAN NYAN NYAN", "NYAN NYAN NYAN NYAN", "NYAN NYAN NYAN NYAN NYAN"]
        var lastTroubadourCount = 0
        var thisTroubadourCount = 0
        function randomTroubadourCount() {
          thisTroubadourCount = Math.floor(Math.random()*troubadourPhrases.length)
        }
        function replacePhrase() {
          randomTroubadourCount()
          while (thisTroubadourCount == lastTroubadourCount) {
            randomTroubadourCount()
          }
          lastTroubadourCount = thisTroubadourCount;
          $(".karaoke-box span").text(troubadourPhrases[thisTroubadourCount])
          $(".karaoke-box").css("width", (151 * (thisTroubadourCount + 2)) + "px")
          $(".karaoke-top").css("width", 0)
          $(".karaoke-top").animate({width: $(".karaoke-bottom").css("width") }, 850, "swing", function() {
            replacePhrase()
          })
        }
        function troubadourMode() {
          if($.Storage.get("troubadourMode") == "1") {
            console.log("Troubadour Mode is on")
            $("body").append('<div class="karaoke-wrapper"><div class="karaoke-box"><span class="karaoke-bottom"></span><div class="karaoke-top"><span class="karaoke-shade"></span></div></div></div>')
            replacePhrase()
          }
        }
        function achievements() {
          nyanSeconds = parseInt(seconds);
          switch(nyanSeconds) {
            case 1971:
              $.Storage.set("troubadourMode", "1")
              troubadourModeAchieved()
              break;
            case 9001: // over 9000
              overNyanThousandAchieved()
              break;
            default:
              break;
          }
        }
        setAchievements = setInterval( achievements, 1000);
      //]]>
    </script>
  </body>
</html>
