<?php
  $redis_url_str = $_ENV["REDIS_URL"] ? $_ENV["REDIS_URL"] : "redis://localhost:6379";
  $redis_url = parse_url($redis_url_str);
  $redis = new Redis();
  $redis->connect($redis_url['host'], $redis_url['port']);
  $redis->auth($redis_url['pass']);
  $counter = $redis->get('counter');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Greetings from a sample PHP app built with a task scheduler!</title>
    <meta content='website' property='og:type'>
    <meta content='https://cdn.scalingo.com/homepage/assets/fb-33a6a93ddbf90bfdae57407481aa05a4.png' property='og:image'>
    <meta content="Deploying your own PHP/cron app on Scalingo is as easy as pie: JUST CLICK THIS BUTTON! It will be up in less than 2 minutes!" property='og:description'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
    <style>
      body { color: #373a3c; font-family: 'Roboto', sans-serif; font-size: 1rem; line-height: 1.5; font-weight: 300; }
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        color: inherit;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        margin-bottom: 1rem;
        margin-top: 0;
      }
      a { color: #0275d8; text-decoration: none; background-color: transparent; }
      a:focus, a:hover { color: #014c8c; text-decoration: underline; text-decoration: none; }
      a:focus { outline: thin dotted; outline-offset: -2px; }
      .container { margin: 0 auto; text-align: center; }
      .hero { padding: 3rem 1.5rem; }
      .love { margin-bottom: 2rem; }
      h1 { font-size: 2.5rem; margin-bottom: 2rem; }
      h2 { font-size: 1.6rem; font-weight: 300; }
      small { margin-top: 0; }
      .btn {
        overflow: visible;
        text-transform: uppercase;
        text-decoration: none;
        margin: 1em 0;
        -moz-user-select: none;
        border-radius: 0.25rem;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        padding: 0.375rem 1rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background-color: #0275d8;
        border-color: #0275d8;
        color: #fff;
        border-radius: 0.3rem;
        font-size: 1.25rem;
        line-height: 1.33333;
        padding: 0.75rem 1.25rem;
      }
      .btn:hover, .btn:focus, .btn:active { background-color: #025aa5; border-color: #01549b; color: #fff; background-image: none; }
      .btn:active:focus, .btn:active:hover { background-color: #014682; border-color: #01315a; color: #fff; }
      .scalingo-logo { max-width: 100%; height: auto; width: 330px; }
      .heart-logo { margin: 0 20px; width:56px;position:relative; top:-18px; }
      .tech-logo { width:56px;position:relative;top:-18px; }
      @media (min-width:768px){
        .container { width: 800px; }
        .one-liner { display: block; }
      }
      @media (max-width:767px){
        .scalingo-logo, .heart-logo, .tech-logo { display: block; position: unset; margin: 0 auto; }
        .scalingo-logo, .heart-logo { margin-bottom: 1rem; }
      }
    </style>
  </head>
  <body>
    <div class="container hero">
      <div class="love">
        <img class="scalingo-logo" alt="Scalingo" src="https://scalingo.com/logo-lightgrey.svg">
        <img class="heart-logo" alt="love" src="https://cdn.scalingo.com/documentation/heart.png">
        <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
           xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
           version="1.1"
           id="svg2"
           xml:space="preserve"
           width="527.02142"
           height="257.51865"
           viewBox="0 0 527.02142 257.51865"
           sodipodi:docname="php.svg"
           inkscape:version="0.92.1 r"
           class="tech-logo"><metadata
             id="metadata8"><rdf:RDF><cc:Work
                 rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs
             id="defs6"><clipPath
               clipPathUnits="userSpaceOnUse"
               id="clipPath20"><path
                 d="m 2764.8,0 c 1526.93,0 2764.81,651.164 2764.81,1454.39 0,803.24 -1237.88,1454.4 -2764.81,1454.4 C 1237.87,2908.79 0,2257.63 0,1454.39 0,651.164 1237.87,0 2764.8,0"
                 id="path18"
                 inkscape:connector-curvature="0" /></clipPath></defs><sodipodi:namedview
             pagecolor="#ffffff"
             bordercolor="#666666"
             borderopacity="1"
             objecttolerance="10"
             gridtolerance="10"
             guidetolerance="10"
             inkscape:pageopacity="0"
             inkscape:pageshadow="2"
             inkscape:window-width="1902"
             inkscape:window-height="1219"
             id="namedview4"
             showgrid="false"
             fit-margin-top="0"
             fit-margin-left="0"
             fit-margin-right="0"
             fit-margin-bottom="0"
             inkscape:zoom="0.60849836"
             inkscape:cx="265.48781"
             inkscape:cy="115.99406"
             inkscape:window-x="0"
             inkscape:window-y="55"
             inkscape:window-maximized="0"
             inkscape:current-layer="g12" /><g
             id="g10"
             inkscape:groupmode="layer"
             inkscape:label="ink_ext_XXXXXX"
             transform="matrix(1.3333333,0,0,-1.3333333,-106.43898,337.08799)"><g
               id="g12"
               transform="scale(0.1)"><path
                 d="m 3302.98,1019.22 c 0,0 131.8,678.24 131.8,678.25 29.73,153.09 5,267.29 -73.51,339.43 -76.02,69.82 -205.1,103.76 -394.61,103.76 h -228.22 l 65.33,336.06 c 2.46,12.67 -0.88,25.77 -9.08,35.73 -8.21,9.95 -20.44,15.71 -33.34,15.71 h -315 c -20.68,0 -38.46,-14.65 -42.4,-34.95 L 2264,1773.15 c -12.74,81.02 -44.08,150.68 -94.27,208.13 -92.39,105.76 -238.55,159.38 -434.41,159.38 h -610.55 c -20.68,0 -38.46,-14.65 -42.4,-34.95 L 799.086,648.203 c -2.461,-12.664 0.867,-25.762 9.074,-35.711 8.203,-9.953 20.43,-15.722 33.336,-15.722 H 1159 c 20.67,0 38.45,14.656 42.4,34.949 l 68.52,352.551 h 236.33 c 124.05,0 228.21,13.437 309.57,39.93 83.19,27.04 159.73,72.91 227.21,136.07 54.51,50.1 99.57,106.18 134.24,166.68 l -56.61,-291.25 c -2.46,-12.66 0.87,-25.76 9.08,-35.708 8.21,-9.953 20.43,-15.722 33.33,-15.722 h 315 c 20.68,0 38.47,14.656 42.41,34.95 l 155.47,800.05 h 216.14 c 92.11,0 119.07,-18.35 126.39,-26.23 6.67,-7.2 20.52,-32.55 5,-112.45 L 2898.16,1035.7 c -2.46,-12.66 0.87,-25.76 9.08,-35.708 8.21,-9.953 20.43,-15.722 33.33,-15.722 h 320 c 20.68,0 38.46,14.656 42.41,34.95 z M 1842.6,1579.63 c -19.78,-101.67 -57.07,-174.2 -110.82,-215.59 -54.62,-42.05 -141.98,-63.38 -259.67,-63.38 H 1331.4 l 101.76,523.61 h 181.92 c 133.67,0 187.51,-28.57 209.13,-52.53 29.97,-33.23 36.33,-99.67 18.39,-192.11"
                 style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 id="path902"
                 inkscape:connector-curvature="0" /><path
                 d="m 4650.04,1981.28 c -92.39,105.76 -238.55,159.38 -434.4,159.38 h -610.55 c -20.69,0 -38.46,-14.65 -42.41,-34.95 L 3279.4,648.203 c -2.46,-12.664 0.87,-25.762 9.07,-35.711 8.21,-9.953 20.43,-15.722 33.34,-15.722 h 317.5 c 20.67,0 38.46,14.656 42.39,34.949 l 68.53,352.551 h 236.34 c 124.04,0 228.2,13.437 309.57,39.93 83.18,27.04 159.72,72.91 227.2,136.07 56.29,51.73 102.61,109.8 137.7,172.57 35.03,62.71 60.21,132.7 74.85,208.02 36.11,185.7 7.22,333.88 -85.85,440.42 z m -329.28,-401.65 c -19.79,-101.67 -57.07,-174.2 -110.82,-215.59 -54.62,-42.05 -141.99,-63.38 -259.66,-63.38 h -140.73 l 101.76,523.61 h 181.93 c 133.66,0 187.51,-28.57 209.13,-52.53 29.97,-33.23 36.33,-99.67 18.39,-192.11"
                 style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 id="path904"
                 inkscape:connector-curvature="0" /><path
                 d="m 1615.08,1867.46 c 120.63,0 201.02,-22.26 241.21,-66.79 40.16,-44.53 49.73,-120.98 28.71,-229.29 -21.95,-112.82 -64.21,-193.33 -126.87,-241.58 -62.66,-48.24 -158.01,-72.34 -286.02,-72.34 h -193.12 l 118.55,610 z M 841.488,639.961 h 317.502 l 75.31,387.499 h 271.95 c 120,0 218.71,12.58 296.21,37.83 77.5,25.18 147.93,67.46 211.33,126.79 53.21,48.9 96.25,102.84 129.22,161.84 32.93,58.93 56.33,124.01 70.16,195.19 33.59,172.77 8.24,307.34 -75.98,403.75 -84.22,96.4 -218.2,144.6 -401.87,144.6 H 1124.77 L 841.488,639.961"
                 style="fill:#08090d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 id="path906"
                 inkscape:connector-curvature="0" /><path
                 d="m 2446.35,2484.96 h 315 l -75.31,-387.5 h 280.62 c 176.57,0 298.36,-30.82 365.39,-92.38 67.04,-61.6 87.11,-161.4 60.32,-299.37 l -131.8,-678.25 h -320 l 125.31,644.89 c 14.26,73.36 9.03,123.4 -15.74,150.08 -24.76,26.68 -77.46,40.03 -158.05,40.03 h -251.75 l -162.27,-835 h -315 l 283.28,1457.5"
                 style="fill:#08090d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 id="path908"
                 inkscape:connector-curvature="0" /><path
                 d="m 4093.24,1867.46 c 120.62,0 201.01,-22.26 241.21,-66.79 40.16,-44.53 49.73,-120.98 28.71,-229.29 -21.95,-112.82 -64.21,-193.33 -126.87,-241.58 -62.66,-48.24 -158.01,-72.34 -286.01,-72.34 h -193.13 l 118.55,610 z M 3319.65,639.961 h 317.5 l 75.31,387.499 h 271.95 c 120,0 218.71,12.58 296.21,37.83 77.5,25.18 147.93,67.46 211.33,126.79 53.2,48.9 96.25,102.84 129.22,161.84 32.93,58.93 56.33,124.01 70.15,195.19 33.6,172.77 8.25,307.34 -75.97,403.75 -84.22,96.4 -218.19,144.6 -401.88,144.6 H 3602.93 L 3319.65,639.961"
                 style="fill:#08090d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                 id="path910"
                 inkscape:connector-curvature="0" /></g></g></svg>
      </div>
      <h1>Greetings from a sample PHP app <br/> built with a task scheduler!</h1>
      <h2>
        Cron task has been started <?php echo $counter ?> times.
      </h2>
      <h2>
        <span style="display:block;"><span class="one-liner">Deploying your own PHP/cron app on Scalingo</span> is as easy as pie:</span>
        <a class="btn" href="https://my.scalingo.com/deploy?source=https://github.com/Scalingo/sample-php-cron">Just click this button!</a>
        <span style="display:block;">It will be up in less than 2 minutes!</span>
      </h2>
      <p>The code of this sample lives <a href="https://github.com/Scalingo/sample-php-cron">on GitHub</a>. You can find <a href="http://samples.scalingo.com">more samples here</a>.</p>
    </div>
    <footer>
      <div class="container">
        <p>
          <span class="one-liner"><a href="https://scalingo.com">Scalingo</a> is the best Platform as a Service on the market:</span>
          no server to install, no dependencies to install, just push your code!
        </p>
      </div>
    </footer>
  </body>
</html>
