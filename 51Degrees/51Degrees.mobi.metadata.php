<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */
$_51d_meta_data = array(
  'LayoutEngine' => array(
    'Description' => 'The underlying technology behind the web browser.',
    'URL' => 'http://en.wikipedia.org/wiki/Web_browser_engine',
    'List' => 'False',
    'Values' => array(
      'Webkit' => array(
        'Description' => 'The browser uses the Webkit engine - usually Apple and Google (Android) browsers.'
        ),
      'Mango' => array(
        'Description' => 'Used on v4 and v5 BlackberryOS (not to be confused with Windows Phone OS 7.5).'
        ),
      'Trident' => array(
        'Description' => 'The browser uses the Trident engine - nearly always IE and other Microsoft made browsers.'
        ),
      'Netfront' => array(
        'Description' => 'The browser uses the Netfront engine - used by the Access Netfront browser.'
        ),
      'Unknown' => array(
        'Description' => 'It is not known what the layout engine is.'
        ),
      'Presto' => array(
        'Description' => 'The browser uses the Presto engine - nearly always used by Opera made browsers.'
        ),
      'U3' => array(
        'Description' => 'The browser uses the U3 Engine. Most commonly used by UCBrowser on smart phones.'
        ),
      'MotoWebkit' => array(
        'Description' => 'Used by Motorola based devices with Mobile Linux platform, browser name is Unknown'
        ),
      'Gecko' => array(
        'Description' => 'The browser uses the Gecko engine - nearly always Firefox and Fennec browsers.'
        ),
      'Lumi' => array(
        'Description' => 'Used on Poloaris v6'
        ),
      'U2' => array(
        'Description' => 'The browser uses the U2 Engine. Most commonly used by UCBrowser on feature phones.'
        ),
      'KHTML' => array(
        'Description' => 'Forerunner to Webkit, Webkit UAs usually contain \'KHTML\' but they are seperate projects Most commonly used by the Konqueror browser.'
        ),
      'Blink' => array(
        'Description' => 'The browser uses the Blink Engine - Launched with Google Chrome 28'
        )
    )
  ),
  'CssMediaQueries' => array(
    'Description' => 'Indicates if the device supports MediaQueries for dynamic CSS.',
    'URL' => 'http://www.w3.org/TR/css3-mediaqueries/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'CssMinMax' => array(
    'Description' => 'Indicates if the browser supports the CSS \'min-width\'  and \'max-width\' properties.',
    'URL' => 'http://www.w3.org/TR/CSS21/visudet.html#min-max-widths',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssOverflow' => array(
    'Description' => 'Indicates if the browser supports overflowing of clipped blocks (blocks have scroll mechanisms).',
    'URL' => 'http://www.w3.org/TR/CSS2/visufx.html',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'CssPosition' => array(
    'Description' => 'Indicates if the browser supports CSS position, allowing for different box placement algorithms (static, relative, absolute, fixed).',
    'URL' => 'http://www.w3.org/TR/CSS21/visuren.html#choose-position',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'CssText' => array(
    'Description' => 'Indicates if the browser supports CSS 3 text, allowing better support for non-Latin alphabets and grammar.',
    'URL' => 'http://www.w3.org/TR/css3-text/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssTransforms' => array(
    'Description' => 'Indicates if the browser supports 2D transform in CSS 3.',
    'URL' => 'http://www.w3.org/TR/css3-2d-transforms/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssUI' => array(
    'Description' => 'Indicates if the browser supports various CSS UI stylings.',
    'URL' => 'http://www.w3.org/TR/css3-ui/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'DataSet' => array(
    'Description' => 'Indicates if the browser allows custom data attributes for th a site\'s own use. An attribute with the form \'data-*\' will not be interpreted by the browser engine.',
    'URL' => 'http://www.w3.org/TR/html5/elements.html#embedding-custom-non-visible-data-with-the-data-attributes',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'DataUrl' => array(
    'Description' => 'Indicates if the browser allows encoded data to be contained in a url.',
    'URL' => 'http://www.ietf.org/rfc/rfc2397',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array()
    )
  ),
  'DeviceOrientation' => array(
    'Description' => 'Indicates if the browser supports DOM events for device orientation (deviceorientation, devicemotion, compassneedscalibration).',
    'URL' => 'http://www.w3.org/TR/orientation-event/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'True' => array(),
      'Unknown' => array()
    )
  ),
  'FileReader' => array(
    'Description' => 'Indicates if the browser supports file reading with events to show progress and errors.',
    'URL' => 'http://www.w3.org/TR/FileAPI/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'FileSaver' => array(
    'Description' => 'Indicates if the browser supports Blobs to be saved to client machines with events to show progress and errors. Note that this property only shows browser support, not if the user allows it.',
    'URL' => 'http://www.w3.org/TR/file-writer-api/#idl-def-FileSaver',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'FileWriter' => array(
    'Description' => 'Indicates if the browser supprts files to be saved to client machines with events to show progress and errors. Note that this property only shows browser support, not if the user allows it.',
    'URL' => 'http://www.w3.org/TR/file-writer-api/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'FormData' => array(
    'Description' => 'Indicates if the browser supports the FormData object.',
    'URL' => 'http://www.w3.org/TR/XMLHttpRequest/#interface-formdata',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'Fullscreen' => array(
    'Description' => 'Indicates whether the browser supports fullscreen requests.',
    'URL' => 'http://dvcs.w3.org/hg/fullscreen/raw-file/tip/Overview.html',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'GeoLocation' => array(
    'Description' => 'Indicates if the browser supports location finding. Note that the browser may be capable but the user may not want to give their position. Similar to the 51Degrees.mobi property \'W3C api\' value in the \'JavascriptPreferredGeoLocApi\' property.',
    'URL' => 'http://www.w3.org/TR/geolocation-API/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssColumn' => array(
    'Description' => 'Indicates if the browser supports CSS3 columns.',
    'URL' => 'http://www.w3schools.com/css3/css3_multiple_columns.asp',
    'List' => 'False',
    'Values' => array(
      'True' => array(
        'Description' => 'The browser supports css3 columns - it may need a browser prefix, eg webkit, moz etc.'
        ),
      'Unknown' => array(
        'Description' => 'It is not known if the browser supports css 3 columns'
        ),
      'False' => array(
        'Description' => 'The browser does not support css3 columns.'
        )
    )
  ),
  'CssTransitions' => array(
    'Description' => 'Indicates if the browser supports CSS3 transitions.',
    'URL' => 'http://www.w3schools.com/css3/css3_transitions.asp',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'History' => array(
    'Description' => 'Indicates if the browser stores the session history for a webpage to use.',
    'URL' => 'http://www.whatwg.org/specs/web-apps/current-work/multipage/history.html',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'Html-Media-Capture' => array(
    'Description' => 'Indicates if the browser can use media inputs (webcam, microphones etc) in script and as an input for forms (eg. &lt;input type="file" accept="image/*" id="capture"&gt; would prompt image capturing software to open).',
    'URL' => 'http://www.w3.org/TR/html-media-capture/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'Viewport' => array(
    'Description' => 'Indicates if the browser supports Viewport, to give control over view size and resolution.',
    'URL' => 'http://www.w3.org/TR/mwabp/#bp-viewport',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array()
    )
  ),
  'Html5' => array(
    'Description' => 'Indicates if the browser supports the new markup in HTML 5.',
    'URL' => 'http://www.w3.org/TR/html5/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'Iframe' => array(
    'Description' => 'Indicates if the browser supports the Iframe element.',
    'URL' => 'http://dev.w3.org/html5/spec/the-iframe-element.html#the-iframe-element',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'IndexedDB' => array(
    'Description' => 'Indicates if the browser supports an indexed local database.',
    'URL' => 'http://www.w3.org/TR/IndexedDB/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'Json' => array(
    'Description' => 'Indicates if the browser supports the JSON object.',
    'URL' => 'http://es5.github.com/x15.12.html',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array()
    )
  ),
  'WebWorkers' => array(
    'Description' => 'Indicates if the browser supports background workers in javascript.',
    'URL' => 'http://www.w3.org/TR/workers/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'Masking' => array(
    'Description' => 'Indicates if filter can be applied to images to change their shape or add visual effects (eg, grayscale, fading).		',
    'URL' => 'http://www.webkit.org/blog/181/css-masks/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'Xhr2' => array(
    'Description' => 'Indicates if the browser supports client - server communication with XmlHttpRequests.',
    'URL' => 'http://www.w3.org/TR/XMLHttpRequest/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'Canvas' => array(
    'Description' => 'Indicates if the browser supports the canvas element, useful for drawing with javscript.',
    'URL' => 'http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'PostMessage' => array(
    'Description' => 'Indicates if the browser supports messages between different documents.',
    'URL' => 'http://www.w3.org/TR/webmessaging/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'Progress' => array(
    'Description' => 'Indicates if the browser supports progress reports, such as with HTTP requests.',
    'URL' => 'http://www.w3.org/TR/progress-events/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'Prompts' => array(
    'Description' => 'Beta property. Indicates if the browser supports simple dialogs (windows.alert, window.confirm and window.prompt).',
    'URL' => 'http://www.w3.org/TR/html5/timers.html#user-prompts',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssImages' => array(
    'Description' => 'Indicates if CSS3 images are supported, allowing for fallback images, gradients and other effects.',
    'URL' => 'http://dev.w3.org/csswg/css3-images/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'Selector' => array(
    'Description' => 'Indicates if the browser supports Selectors, used for more consice searching in DOM.',
    'URL' => 'http://www.w3.org/TR/selectors-api2/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'Svg' => array(
    'Description' => 'Indicates if the browser supports SVG (scalable vector graphics), useful for 2D animations and applications as all objects within the SVG can be accessed via the DOM and can be assigned event listeners.',
    'URL' => 'http://www.w3.org/TR/SVG/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'TouchEvents' => array(
    'Description' => 'Indicates if the browser supports multiple touch events happening simultaneously.',
    'URL' => 'http://www.w3.org/TR/touch-events/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'Track' => array(
    'Description' => 'Indicates if the browser supports text tracks being played with media, eg subtitles, captions.',
    'URL' => 'http://www.whatwg.org/specs/web-apps/current-work/multipage/the-video-element.html#the-track-element',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'Video' => array(
    'Description' => 'Indicates if the browser supports the video element.',
    'URL' => 'http://www.whatwg.org/specs/web-apps/current-work/multipage/the-video-element.html',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'AnimationTiming' => array(
    'Description' => 'Indicates that the browser supports \'window.requestAnimationFrame()\'.',
    'URL' => 'http://www.w3.org/TR/animation-timing/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'BlobBuilder' => array(
    'Description' => 'Indicates that the browser fully supports BlobBuilder, containing a BlobBuilder interface, a FileSaver interface, a FileWriter interface, and a FileWriterSync interface.',
    'URL' => 'http://dev.w3.org/2009/dap/file-system/file-writer.html#the-blobbuilder-interface',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'CssBackground' => array(
    'Description' => 'Indicates if the browser supports CSS3 backgrounds. This allows styling of the border, the background of the box. The box may be given a shadow effect.',
    'URL' => 'http://www.w3.org/TR/css3-background/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssBorderImage' => array(
    'Description' => 'Indicates if the browser supports Border Images, allowing decoration of the border around a box.',
    'URL' => 'http://www.w3.org/TR/css3-background/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array(),
      'True' => array()
    )
  ),
  'CssCanvas' => array(
    'Description' => 'Indicates if the browser can draw CSS images into a Canvas.',
    'URL' => 'http://www.webkit.org/blog/176/css-canvas-drawing/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'CssColor' => array(
    'Description' => 'Indicates if the browser supports CSS 3 Color, allowing author control of the foreground colour anf opacity of an element.',
    'URL' => 'http://www.w3.org/TR/css3-color/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'Unknown' => array(),
      'False' => array()
    )
  ),
  'CssFlexbox' => array(
    'Description' => 'Indicates if the browser supports flexbox, allowing automatic reordering of elements. Useful for GUI design.',
    'URL' => 'http://www.w3.org/TR/css3-flexbox/',
    'List' => 'False',
    'Values' => array(
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'CssFont' => array(
    'Description' => 'Indicates if CSS3 fonts are supported, including non standard fonts (@font-face).',
    'URL' => 'http://www.w3.org/TR/css3-fonts/',
    'List' => 'False',
    'Values' => array(
      'True' => array(),
      'False' => array(),
      'Unknown' => array()
    )
  ),
  'IsMobile' => array(
    'Description' => 'The device\'s primary data connection is wireless and is designed to operate mostly from battery power (ie a mobile phone, smart phone or tablet).',
    'List' => 'False',
    'Values' => array(
      'True' => array(
        'Description' => 'This device is mobile.'
        ),
      'False' => array(
        'Description' => 'This device isn\'t mobile.'
        )
    )
  ),
  'ScreenPixelsHeight' => array(
    'Description' => 'The height of the screen in pixels.',
    'List' => 'False',
    'Values' => array(
      '800' => array(),
      '480' => array(),
      '240' => array(),
      '160' => array(),
      '640' => array(),
      '320' => array(),
      '220' => array(),
      '400' => array(),
      '128' => array(),
      '854' => array(),
      'Unknown' => array(
        'Description' => 'It is not known how high the screen is.'
        ),
      '208' => array(),
      '260' => array(),
      '360' => array(),
      '416' => array(),
      '432' => array(),
      '200' => array(),
      '275' => array(),
      '352' => array(),
      '960' => array(),
      '176' => array(),
      '600' => array(),
      '48' => array(),
      '1024' => array(),
      '65' => array(),
      '1280' => array(),
      '300' => array(),
      '96' => array(),
      '80' => array(),
      '120' => array(),
      '192' => array(),
      '427' => array(),
      '256' => array(),
      '266' => array(),
      '440' => array(),
      '864' => array(),
      '276' => array(),
      '420' => array(),
      '144' => array(),
      '130' => array(),
      '64' => array(),
      '67' => array(),
      '768' => array(),
      '132' => array(),
      '101' => array(),
      '272' => array(),
      '323' => array(),
      '345' => array(),
      '1200' => array(),
      '544' => array(),
      '1080' => array(),
      '60' => array(),
      '340' => array(),
      '1920' => array(),
      '1600' => array(),
      '533' => array(),
      '728' => array(),
      '1440' => array(),
      '2560' => array(),
      '1028' => array(),
      '1366' => array(),
      '2048' => array(),
      '601' => array(),
      '720' => array(),
      '1536' => array(),
      '853' => array(),
      '690' => array(),
      '752' => array(),
      '1136' => array(),
      '2160' => array()
    )
  ),
  'ScreenPixelsWidth' => array(
    'Description' => 'The width of the screen in pixels.',
    'List' => 'False',
    'Values' => array(
      '400' => array(),
      '320' => array(),
      '480' => array(),
      '128' => array(),
      '360' => array(),
      '240' => array(),
      '176' => array(),
      '120' => array(),
      'Unknown' => array(
        'Description' => 'It is not known how wide the screen is.'
        ),
      '432' => array(),
      '208' => array(),
      '352' => array(),
      '440' => array(),
      '640' => array(),
      '800' => array(),
      '220' => array(),
      '272' => array(),
      '1024' => array(),
      '84' => array(),
      '540' => array(),
      '600' => array(),
      '160' => array(),
      '345' => array(),
      '96' => array(),
      '132' => array(),
      '101' => array(),
      '144' => array(),
      '1280' => array(),
      '64' => array(),
      '768' => array(),
      '720' => array(),
      '200' => array(),
      '854' => array(),
      '172' => array(),
      '130' => array(),
      '960' => array(),
      '98' => array(),
      '90' => array(),
      '80' => array(),
      '232' => array(),
      '228' => array(),
      '280' => array(),
      '92' => array(),
      '177' => array(),
      '824' => array(),
      '37' => array(),
      '230' => array(),
      '1920' => array(),
      '1366' => array(),
      '700' => array(),
      '758' => array(),
      '1080' => array(),
      '1200' => array(),
      '900' => array(),
      '279' => array(),
      '1600' => array(),
      '40' => array(),
      '1536' => array(),
      '1240' => array(),
      '2048' => array(),
      '3840' => array()
    )
  ),
'DatasetName' => 'Lite',
'Date' => '19/10/2013');