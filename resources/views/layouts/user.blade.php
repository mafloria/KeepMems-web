<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keep Memories</title>  
  <link rel="stylesheet" type="text/css" href="<?php echo CC_JS_IMG; ?>styles/styles.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CC_JS_IMG; ?>styles/inside.css">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    
  <script src="<?php echo CC_JS_IMG; ?>js/jquery/jquery-1.12.1.min.js" type="text/javascript"></script>
  <script src="<?php echo CC_JS_IMG; ?>js/jquery/validate/dist/jquery.validate.min.js" type="text/javascript"></script>
  <script src="<?php echo CC_JS_IMG; ?>js/global.min.js" type="text/javascript"></script>          
  @yield('js')  
  
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="nice" viewBox="0 0 92.1 100.3">
    <path d="M79.7,1.4c-1.4,0-2.9,0.3-4.4,0.7c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0.1-12.9,5.2-29.7,5.2c-9.8,0-19.1-1.7-27.5-5.2
      c-1.6-0.6-3.2-1-4.8-1C6.8,1.2,2,6.4,2,13.4v39.8c0,25,20.3,46.1,44.4,46.1s44.4-21.1,44.4-46.1V13.4C90.9,6.4,86.2,1.4,79.7,1.4
      L79.7,1.4z M84,53.2c0,21.3-17.2,39.3-37.5,39.3S8.9,74.4,8.9,53.2V13.4c0-3.2,1.7-5.3,4.2-5.3c0.7,0,1.4,0.2,2.2,0.5
      c9.2,3.8,19.3,5.7,30.1,5.7c17.5,0,30.7-5,32.2-5.6c0.8-0.2,1.5-0.4,2.1-0.4c2.7,0,4.3,2,4.3,5.1V53.2z M84,53.2"/>
    <path d="M65.1,67.2c-1.1-1-2.9-0.9-3.9,0.2c-3.1,3.5-8.8,5.7-14.7,5.7s-11.6-2.2-14.7-5.7c-1-1.1-2.8-1.2-3.9-0.2
      c-1.1,1-1.2,2.8-0.2,3.9c4.2,4.7,11.2,7.5,18.8,7.5s14.7-2.8,18.8-7.5C66.3,70,66.2,68.2,65.1,67.2L65.1,67.2z M65.1,67.2"/>
    <path d="M76.5,41.3c-4.2-2.1-7.8-2.8-10.7-2.8c-6.1,0-9.3,3.1-9.5,3.3c-1.1,1.1-1.1,2.8-0.1,3.9c1.1,1.1,2.8,1.1,3.9,0.1
      c0.2-0.2,4.6-4.2,13.9,0.5c1.4,0.7,3,0.1,3.7-1.2C78.4,43.6,77.9,41.9,76.5,41.3L76.5,41.3z M76.5,41.3"/>
    <path d="M33.2,45.4c1.1,1.1,2.8,1,3.9-0.1c1.1-1.1,1-2.8-0.1-3.9c-0.2-0.2-3.4-3.3-9.5-3.3c-2.9,0-6.5,0.7-10.7,2.8
      c-1.4,0.7-1.9,2.3-1.2,3.7c0.7,1.4,2.3,1.9,3.7,1.2C28.6,41.2,33,45.2,33.2,45.4L33.2,45.4z M33.2,45.4"/>
  </symbol>
  <symbol id="agregar" viewBox="0 0 100.3 97.7">
    <path d="M50,1.3C23.5,1.3,2.1,22.8,2.1,49.2c0,26.5,21.5,47.9,47.9,47.9c26.5,0,47.9-21.5,47.9-47.9C97.9,22.8,76.5,1.3,50,1.3z
     M80.5,53.1c0,1.9-1.6,3.5-3.5,3.5H60.9c-1.9,0-3.5,1.6-3.5,3.5v16.1c0,1.9-1.6,3.5-3.5,3.5l-7.7,0c-1.9,0-3.5-1.6-3.5-3.5l0-16.1
    c0-1.9-1.6-3.5-3.5-3.5l-16.1,0c-1.9,0-3.5-1.6-3.5-3.5v-7.7c0-1.9,1.6-3.5,3.5-3.5l16.1,0c1.9,0,3.5-1.6,3.5-3.5V22.2
    c0-1.9,1.6-3.5,3.5-3.5l7.7,0c1.9,0,3.5,1.6,3.5,3.5v16.1c0,1.9,1.6,3.5,3.5,3.5l16.1,0c1.9,0,3.5,1.6,3.5,3.5L80.5,53.1z"/>
  </symbol>
  <symbol id="calendario" viewBox="0 0 100.3 97.7">
    <path d="M25.8,23.3h1.4c2.1,0,3.8-1.7,3.8-3.8V5c0-2.1-1.7-3.8-3.8-3.8h-1.4C23.7,1.2,22,2.9,22,5v14.4
      C22,21.6,23.7,23.3,25.8,23.3L25.8,23.3z M25.8,23.3"/>
    <path d="M74.7,23.2h1.4c2.1,0,3.8-1.7,3.8-3.8V4.9c0-2.1-1.7-3.8-3.8-3.8h-1.4c-2.1,0-3.8,1.7-3.8,3.8v14.4
      C70.9,21.5,72.6,23.2,74.7,23.2L74.7,23.2z M74.7,23.2"/>
    <path d="M92.7,8.9H83v11.4c0,3.8-3.1,5.9-6.9,5.9h-1.4c-3.8,0-6.9-3.1-6.9-6.9V8.9H34.1v10.5c0,3.8-3.1,6.9-6.9,6.9h-1.4
      c-3.8,0-6.9-3.1-6.9-6.9V8.9H8.4c-3.4,0-6.2,2.8-6.2,6.2v74.8c0,3.4,2.8,6.2,6.2,6.2h84.4c3.4,0,6.2-2.8,6.2-6.2V15.1
      C98.9,11.7,96.2,8.9,92.7,8.9L92.7,8.9z M92.7,89.9H8.4V33.5h84.4V89.9C92.7,89.9,92.7,89.9,92.7,89.9L92.7,89.9z M92.7,89.9"/>
    <path d="M53.8,52.4h11.1c0.4,0,0.8-0.4,0.8-0.8V42c0-0.4-0.4-0.8-0.8-0.8H53.8c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C53,52,53.3,52.4,53.8,52.4L53.8,52.4z M53.8,52.4"/>
    <path d="M71.9,52.4H83c0.4,0,0.8-0.4,0.8-0.8V42c0-0.4-0.4-0.8-0.8-0.8H71.9c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C71.1,52,71.5,52.4,71.9,52.4L71.9,52.4z M71.9,52.4"/>
    <path d="M17.5,68.2h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6c0-0.4-0.4-0.8-0.8-0.8H17.5c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C16.7,67.8,17,68.2,17.5,68.2L17.5,68.2z M17.5,68.2"/>
    <path d="M35.6,68.2h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6c0-0.4-0.4-0.8-0.8-0.8H35.6c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C34.8,67.8,35.2,68.2,35.6,68.2L35.6,68.2z M35.6,68.2"/>
    <path d="M53.8,68.2h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6c0-0.4-0.4-0.8-0.8-0.8H53.8c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C53,67.8,53.3,68.2,53.8,68.2L53.8,68.2z M53.8,68.2"/>
    <path d="M71.9,68.2H83c0.4,0,0.8-0.4,0.8-0.8v-9.6c0-0.4-0.4-0.8-0.8-0.8H71.9c-0.4,0-0.8,0.4-0.8,0.8v9.6
      C71.1,67.8,71.5,68.2,71.9,68.2L71.9,68.2z M71.9,68.2"/>
    <path d="M28.6,72.7H17.5c-0.4,0-0.8,0.4-0.8,0.8v9.6c0,0.4,0.4,0.8,0.8,0.8h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6
      C29.4,73.1,29,72.7,28.6,72.7L28.6,72.7z M28.6,72.7"/>
    <path d="M46.7,72.7H35.6c-0.4,0-0.8,0.4-0.8,0.8v9.6c0,0.4,0.4,0.8,0.8,0.8h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6
      C47.5,73.1,47.2,72.7,46.7,72.7L46.7,72.7z M46.7,72.7"/>
    <path d="M64.9,72.7H53.8c-0.4,0-0.8,0.4-0.8,0.8v9.6c0,0.4,0.4,0.8,0.8,0.8h11.1c0.4,0,0.8-0.4,0.8-0.8v-9.6
      C65.7,73.1,65.3,72.7,64.9,72.7L64.9,72.7z M64.9,72.7"/>
    <path d="M83,72.7H71.9c-0.4,0-0.8,0.4-0.8,0.8v9.6c0,0.4,0.4,0.8,0.8,0.8H83c0.4,0,0.8-0.4,0.8-0.8v-9.6
      C83.8,73.1,83.5,72.7,83,72.7L83,72.7z M83,72.7"/>
  </symbol>
  <symbol id="check" viewBox="0 0 100.3 100.1">
    <path d="M50.3,1.5c-27,0-48.8,21.9-48.8,48.8c0,27,21.9,48.8,48.8,48.8c27,0,48.8-21.8,48.8-48.8C99.1,23.4,77.3,1.5,50.3,1.5z
     M45.5,75.8c-1.4,1.8-3.8,1.9-5.4,0.3L14.1,49.5c-1.6-1.6-1.6-4.2,0-5.8l6.1-6.1c1.6-1.6,4.2-1.6,5.8,0.1l15.2,14.9
    c1.6,1.6,4,1.5,5.4-0.3l28.2-27.4c1.4-1.8,3.9-2,5.5-0.5l6,5.8c1.7,1.5,1.9,4.3,0.5,6.1L45.5,75.8z"/>
  </symbol>
  <symbol id="compatible" viewBox="0 0 88.8 99.3">
    <path d="M72.9,46.5h14.4v43.9c0,0-8.9,0-11,0c-2.1,0-18.6,7.4-25,7.5c-6.4,0.2-28.3,0-31.3,0c-3,0-11.9-1.3-8.9-10.9
        c-5.3-0.8-10.2-8.7-5.3-15.1c-5.6-1.9-7.2-13.8,0.4-17c-4.3-3.4-2.8-14.7,6.6-14.7c10.6,0,16.2,0,18.7,0c2.5,0,4.5-0.9,2.8-5.5
        c-0.9-2.5-8.4-21.8,5.9-32.4c3.2-2.5,7.7-1.7,7,3.2c-0.9,6.6,1.7,15.7,2.5,17.9c0.8,2.3,13.9,19.3,13.9,19.3S65.9,46.5,72.9,46.5
        z"/>
  </symbol>
  <symbol id="great" viewBox="0 0 100 81.4">
    <path d="M73.3,1.2C60.1,1.2,51.7,16,49.7,16C48,16,40,1.2,26.2,1.2C12.7,1.2,1.8,12.3,1,25.7c-0.4,7.6,2,13.3,5.5,18.6
    c6.9,10.4,36.9,35.6,43.3,35.6c6.5,0,36.3-25,43.2-35.5c3.5-5.2,5.9-11,5.5-18.6C97.7,12.3,86.7,1.2,73.3,1.2"/>
  </symbol>
  <symbol id="bad" viewBox="0 0 100 81.4">
    <path d="M56.9,67.4c0.3-0.4,0.3-1.3-0.1-1.7L43.7,51.4c-1.1-1.2-1.7-2.8-1.6-4.5c0.1-1.6,0.9-3.1,2.1-4.2l13.4-11.2
      c0.4-0.4,0.6-1.2,0.3-1.6c0,0-6.8-11.9-9.5-15.6C45.3,10.1,37.5,1,26.4,1C12.8,1,1.8,12.2,1,25.7c-0.4,7.7,2.1,13.5,5.5,18.8
      c6,9.2,29.8,29.6,40.1,34.7c0.2,0.1,0.7,0.2,1.4-0.7L56.9,67.4z M56.9,67.4"/>
    <path d="M99.4,25.7C98.7,12.2,87.6,1,74.1,1c-8.9,0-15.6,6.6-19.7,11c-0.2,0.2-0.6,0.7,0.1,1.8L62.5,27c1.7,2.8,1.1,6.6-1.4,8.7
      L47.7,46.9c-0.2,0.1-0.2,0.3-0.2,0.4c0,0.1,0,0.3,0.2,0.4L60.8,62c2.2,2.4,2.3,6.2,0.3,8.8l-5.6,7.1c-0.5,0.5-0.3,0.6-0.1,0.5
      c11-6.2,32.6-25.1,38.4-33.9C97.4,39.2,99.8,33.4,99.4,25.7L99.4,25.7z M99.4,25.7"/>
  </symbol>
  <symbol id="incompatible" viewBox="0 0 88.8 99.3">
    <path d="M73.4,52.9h14.5V8.7c0,0-9,0-11.1,0c-2.1,0-18.8-7.4-25.2-7.6c-6.5-0.2-28.5,0-31.6,0s-12,1.3-8.9,11
        c-5.3,0.8-10.3,8.7-5.3,15.2c-5.7,1.9-7.2,13.9,0.4,17.1c-4.4,3.4-2.9,14.8,6.7,14.8c10.6,0,16.4,0,18.8,0c2.5,0,4.6,1,2.9,5.5
        c-0.9,2.5-8.5,22,6,32.6c3.2,2.5,7.7,1.7,7-3.2c-0.9-6.6,1.7-15.8,2.5-18.1c0.8-2.3,14-19.5,14-19.5S66.4,52.9,73.4,52.9z"/>
  </symbol>
  <symbol id="interrogante" viewBox="0 0 100.3 100.6">
    <path d="M49.9,1.4C22.9,1.4,1,23.4,1,50.4c0,27,21.9,48.9,48.9,48.9c27,0,48.9-21.9,48.9-48.9C98.9,23.4,77,1.4,49.9,1.4z M47.9,86
    c-4.2,0-7.7-3.4-7.7-7.7c0-4.2,3.4-7.7,7.7-7.7c4.3,0,7.7,3.4,7.7,7.7C55.6,82.5,52.2,86,47.9,86z M60.2,49.8
    c-3.4,3.8-5.9,7.6-6.6,11.7c-0.1,0.8-0.5,2.3-2.4,2.3c-1.9,0-5.6,0-7.1,0c-1.5,0-2.2-1.4-2.2-2.4c0-4.8,0.7-9.8,4.9-14.8
    c3.5-4.3,7.1-8.2,7.1-11.9c0-3.9-2.9-7.3-8.4-7.4c-2.7,0-6.4,1-9,2.4c-0.9,0.5-2.8,0.9-3.8-1c-1-1.9-2.1-4-2.8-5.5
    c-0.8-1.5-0.1-2.6,1-3.3c4.2-2.7,11.3-5.2,18-5.2c14.6,0,21.3,8.5,21.3,17.7C70.2,40.8,64.4,45.2,60.2,49.8z"/>
  </symbol>
  <symbol id="lista-personas" viewBox="0 0 100.3 76">
      <path d="M25.5,36.2c0,3.6,2.4,6.5,5.3,6.5h7.5c2.5,2.3,5.4,3.7,8.4,3.7c3.1,0,5.9-1.4,8.4-3.7h7.5c2.9,0,5.3-2.9,5.3-6.5v-9.5h0
        c0-0.7,0-1.5,0-2.3c0-12.7-9.5-23.1-21.3-23.1c-11.8,0-21.3,10.3-21.3,23.1c0,0.8,0,1.5,0,2.3h0V36.2z M46.8,43.7
        c-1.3,0-2.6-0.4-3.9-1c-1-0.5-2-1.3-3-2.2c-3.2-3-5.7-7.6-6.9-12.1l-0.2-0.9l-0.9-0.1c-0.4-0.1-0.9-0.3-1.4-0.7
        c-0.6-0.6-1.2-1.4-1.5-2.6c-0.3-1.4-0.2-2.7,0.3-3.6c0.2-0.3,0.6-0.8,1.1-0.9c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.2,0l0.5,0
        c2.1,3.2,8.1,2.4,13.4-1.9c1.1-0.9,2-1.8,2.8-2.8c2-0.2,4.2-0.3,6.3,0.3c4.7,1.2,6,3.8,7.3,4.4l0,0.1l0.2,0
        c0.2,0.1,0.5,0,0.8-0.1l0.3,0c0.2,0,0.4,0,0.5,0c0.6,0.1,0.9,0.6,1.1,0.9c0.6,0.9,0.7,2.3,0.3,3.6c-0.3,1.1-0.9,2-1.5,2.6
        c-0.5,0.4-0.9,0.7-1.4,0.7l-0.9,0.1l-0.2,0.9c-1.2,4.4-3.7,9-6.8,12c-1,0.9-2,1.7-3.1,2.3C49.5,43.4,48.1,43.7,46.8,43.7
        L46.8,43.7z M62.5,45.1c-1.7,2.8-3.6,5.2-6.1,6.5c-5.3,2.7-9.2,4.9-9.2,4.9l0,0v-0.1l-0.1,0l-0.1,0v0.1l0,0c0,0-3.9-2.2-9.2-4.9
        c-2.5-1.3-4.5-3.7-6.1-6.5C24,48.2,18.5,55.5,18.5,61.9V75h57.1V61.9C75.7,55.5,70.2,48.3,62.5,45.1L62.5,45.1z M62.5,45.1"/>
      <path d="M15.4,33.3c1.4,4.7,4.2,9.4,7.9,12.5c0.9-0.8,1.8-1.3,2.5-1.5c-3.8-2.7-6.7-7.6-8-12.5l-0.2-0.9l-0.9-0.1
        c-1.1-0.1-2.5-1.4-3-3.5c-0.3-1.5-0.1-3,0.5-3.9c0.3-0.5,0.6-0.8,1.1-0.9c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.2,0l1.3,0.1l0.2-1.3
        c0.4-2.7,1.2-5.1,2.4-7.2c1,1.2,2.5,2.1,4.4,2.9c0.5-7.6,5.3-12.2,10.5-15.1c-1-0.1-2-0.2-3.1-0.2c-10.5,0-19,6.9-19,15.4
        c0,1.2,0.2,2.4,0.5,3.5c-1.9,1.4-2.7,4.3-2,7.4C11.7,30.6,13.4,32.6,15.4,33.3z"/>
      <path d="M15.7,58.8c0-3.3,2.5-6.9,4.9-10c-1.9-1.5-3.5-3.5-4.9-5.9c-8.3,3.3-14,11.1-14,17.8v14h13.7
        C15.3,70.2,15.7,62.8,15.7,58.8z"/>
    <path d="M97.3,18.5H70.1c0,2.9,0,6.7,0,10.1h27.2c1,0,1.8-0.8,1.8-1.8v-6.5C99.2,19.3,98.3,18.5,97.3,18.5z"/>
    <path d="M97.3,33.1H70.1c0,2.1-0.1,3.5-0.1,3.5s0.6,5.9-2.3,6.6h29.6c1,0,1.8-0.8,1.8-1.8V35C99.2,34,98.3,33.1,97.3,33.1z"/>
    <path d="M97.3,47.8h-24c2.3,2.3,4.2,5,4.4,7.4c0.1,0.8,0.1,1.8,0.1,2.8h19.5c1,0,1.8-0.8,1.8-1.8v-6.5
      C99.2,48.6,98.3,47.8,97.3,47.8z"/>
  </symbol>
  <symbol id="main-menu" viewBox="0 0 29.8 99.6">
    <circle cx="15" cy="13.8" r="12.8"/>
    <circle cx="15" cy="49.7" r="12.8"/>
    <circle cx="15" cy="85.6" r="12.8"/>
  </symbol>
  <symbol id="avatar-male" viewBox="0 0 84.4 99.6">
    <path d="M20,43.6c3.2,10.3,11.2,21.1,22.2,21.1c10.9,0,19-10.7,22.2-21.1c2.7-0.9,4.9-3.6,5.8-7.1c1.2-4.8-0.6-9.2-4-10.6
      c0.3-1.3,0.5-2.6,0.5-3.9c0-11.3-11.3-20.5-25.2-20.5c-13.9,0-25.3,9.2-25.3,20.5c0,1.6,0.3,3.2,0.7,4.7c-2.5,1.9-3.6,5.7-2.6,9.8
      C15.1,40,17.3,42.7,20,43.6L20,43.6z M18.3,30.4c0.4-0.6,0.8-1,1.4-1.2c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0,0.3,0l1.7,0.2l0.3-1.7
      c0.5-3.6,1.6-6.8,3.2-9.6c2.9,3.3,8.8,5.6,15.6,5.6c7.6,0,14.1-2.9,16.5-6.9c2,3,3.4,6.7,4.1,10.9l0.3,1.7l1.7-0.2
      c0.3,0,0.5,0,0.7,0c0.1,0,0.2,0.1,0.3,0.1c1.6,0.7,2.4,3.5,1.7,6.2c-0.7,2.8-2.5,4.4-4,4.6l-1.2,0.2l-0.3,1.2
      C58.4,51.2,51.1,61,42.1,61c-9,0-16.3-9.8-18.9-19.4l-0.3-1.2l-1.2-0.2c-1.4-0.2-3.3-1.9-4-4.6C17.3,33.6,17.5,31.6,18.3,30.4
      L18.3,30.4z M18.3,30.4"/>
    <path d="M63.7,56.4c-2.3,4-5.1,7.4-8.7,9.2c-7.4,3.8-12.9,6.9-12.9,6.9l0,0v-0.1l-0.1,0l-0.1,0v0.1l0,0c0,0-5.5-3.1-12.9-6.9
      c-3.6-1.8-6.3-5.2-8.7-9.2C9.3,60.8,1.6,71.1,1.6,80v18.6h80.6V80C82.3,71.1,74.6,60.8,63.7,56.4L63.7,56.4z M63.7,56.4"/>
  </symbol>
  <symbol id="no-se-icon" viewBox="0 0 58.7 100.3">
    <path d="M17.9,65.4c0-6.7,0.9-13.5,6.8-20.4c4.9-5.9,9.8-11.4,9.8-16.4c0-5.3-4-10.1-11.6-10.2c-3.7,0-8.8,1.4-12.4,3.3
        c-1.3,0.7-3.8,1.3-5.2-1.4s-2.8-5.5-3.9-7.6c-1-2.1-0.1-3.6,1.3-4.5C8.6,4.5,18.4,1,27.6,1C47.7,1,57,12.7,57,25.4
        c0,11.6-8.1,17.6-13.8,24c-4.6,5.3-8.2,10.5-9.1,16.2c-0.2,1-0.6,3.2-3.3,3.2c-2.6,0-7.7,0.1-9.8,0.1
        C18.8,68.7,17.9,66.9,17.9,65.4z"/>
    <path d="M36.8,88.6c0,5.9-4.7,10.6-10.6,10.6c-5.9,0-10.6-4.7-10.6-10.6c0-5.9,4.8-10.6,10.6-10.6C32.1,78,36.8,82.7,36.8,88.6z"/>
  </symbol>
  <symbol id="notificaciones" viewBox="0 0 100.3 101.3">
    <path d="M50.1,1.9C23.1,1.8,1.2,23.6,1.1,50.7C0.9,77.7,22.7,99.8,49.7,100l48.7,0.1l0.2-49C98.8,24,77.2,2,50.1,1.9z M24,60.2
    c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2c5.1,0,9.2,4.1,9.2,9.2S29.1,60.2,24,60.2z M49.9,60.2c-5.1,0-9.2-4.1-9.2-9.2
    s4.1-9.2,9.2-9.2c5.1,0,9.2,4.1,9.2,9.2S55,60.2,49.9,60.2z M75.7,60.2c-5.1,0-9.2-4.1-9.2-9.2s4.1-9.2,9.2-9.2S85,45.9,85,51
    S80.8,60.2,75.7,60.2z"/>
  </symbol>
  <symbol id="hate" viewBox="0 0 92.1 100.3">
    <path d="M58.4,50.6c-3,0-5.3-2.4-5.3-5.3c0-1.5,0.6-2.8,1.6-3.8c0,0,0,0,0-0.1l8.1-8.1c1.1-1.1,2.8-1.1,3.8,0s1.1,2.8,0,3.8
      l-4.5,4.5c0.9,1,1.5,2.3,1.5,3.7C63.7,48.2,61.3,50.6,58.4,50.6L58.4,50.6z"/>
    <path d="M34.1,50.6c2.9,0,5.3-2.4,5.3-5.3c0-1.5-0.6-2.8-1.6-3.8c0,0,0,0,0-0.1l-8.1-8.1c-1.1-1.1-2.8-1.1-3.8,0s-1.1,2.8,0,3.8
      l4.5,4.5c-0.9,1-1.5,2.3-1.5,3.7C28.8,48.2,31.2,50.6,34.1,50.6L34.1,50.6z"/>
    <path d="M30.2,67.7h32.9c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3H30.2c-1.6,0-3-1.3-3-3C27.2,69.1,28.5,67.7,30.2,67.7L30.2,67.7z"/>
      <path d="M79.3,1.6c-1.4,0-2.9,0.2-4.4,0.7c-0.1,0-0.1,0-0.2,0.1c-0.1,0.1-12.9,5.1-29.6,5.1c-9.8,0-19-1.7-27.4-5.1
        c-1.6-0.6-3.2-1-4.8-1C6.7,1.5,2,6.7,2,13.6v39.6c0,24.9,20.3,46,44.3,46c24,0,44.3-21.1,44.3-46V13.6
        C90.5,6.7,85.8,1.6,79.3,1.6L79.3,1.6z M83.6,53.2c0,21.2-17.1,39.1-37.4,39.1C26,92.3,8.9,74.4,8.9,53.2V13.6
        c0-3.1,1.7-5.3,4.2-5.3c0.7,0,1.4,0.2,2.2,0.5c9.2,3.7,19.3,5.6,29.9,5.6c17.4,0,30.5-5,32-5.6c0.7-0.2,1.5-0.4,2.1-0.4
        c2.7,0,4.3,2,4.3,5.1V53.2z M83.6,53.2"/>
  </symbol>
  <symbol id="wow" viewBox="0 0 92.1 100.3">
    <path d="M61.9,37.1c0,3-1.6,5.5-3.6,5.5c-2,0-3.6-2.5-3.6-5.5c0-3,1.6-5.5,3.6-5.5C60.2,31.6,61.9,34.1,61.9,37.1L61.9,37.1z"/>
    <path d="M78.7,1.5c-1.4,0-2.9,0.2-4.4,0.7c-0.1,0-0.1,0-0.2,0.1C74,2.4,61.3,7.5,44.6,7.5c-9.8,0-18.9-1.7-27.3-5.1
      c-1.6-0.6-3.2-1-4.7-1c-6.3,0-11,5.2-11,12.1V53c0,24.9,20.2,45.8,44.1,45.8c23.9,0,44.1-21,44.1-45.8V13.5
      C89.9,6.6,85.2,1.5,78.7,1.5L78.7,1.5z M83,53C83,74.1,66,92,45.7,92S8.4,74.1,8.4,53V13.5c0-3.1,1.7-5.3,4.2-5.3
      c0.7,0,1.4,0.2,2.2,0.5c9.2,3.7,19.2,5.6,29.9,5.6c17.4,0,30.5-5,31.9-5.6c0.7-0.2,1.5-0.4,2.1-0.4c2.7,0,4.3,2,4.3,5.1V53z
       M83,53"/>
    <path d="M33.3,42.7c-2,0-3.6-2.5-3.6-5.5c0-3,1.6-5.5,3.6-5.5c2,0,3.6,2.5,3.6,5.5C36.9,40.2,35.3,42.7,33.3,42.7L33.3,42.7z"/>
    <path d="M56.7,65.1c0,7.3-5.1,13.2-11.4,13.2c-6.3,0-11.4-5.9-11.4-13.2c0-7.3,5.1-13.2,11.4-13.2C51.6,51.9,56.7,57.9,56.7,65.1
      L56.7,65.1z"/>
  </symbol>
  <symbol id="sad" viewBox="0 0 92.1 100.3">
    <path d="M78.8,1.7c-1.4,0-2.9,0.2-4.4,0.7c-0.1,0-0.1,0-0.2,0.1c-0.1,0.1-12.9,5.1-29.6,5.1c-9.8,0-19-1.7-27.4-5.1
      c-1.6-0.6-3.2-1-4.8-1c-6.3,0-11,5.2-11,12.1v39.6c0,24.9,20.3,46,44.3,46c24,0,44.3-21.1,44.3-46V13.7C90,6.7,85.3,1.7,78.8,1.7
      L78.8,1.7z M83.1,53.3c0,21.2-17.1,39.1-37.4,39.1c-20.3,0-37.4-17.9-37.4-39.1V13.7c0-3.1,1.7-5.3,4.2-5.3c0.7,0,1.4,0.2,2.2,0.5
      c9.2,3.7,19.3,5.6,30,5.6c17.4,0,30.6-5,32-5.6c0.7-0.2,1.5-0.4,2.1-0.4c2.7,0,4.3,2,4.3,5.1V53.3z M83.1,53.3"/>
    <path d="M45.7,66.6c-7.6,0-14.6,2.8-18.8,7.5c-1,1.1-0.9,2.9,0.2,3.9c1.1,1,2.9,0.9,3.9-0.2c3.1-3.5,8.7-5.7,14.7-5.7
      c6,0,11.6,2.2,14.7,5.7c0.5,0.6,1.3,0.9,2.1,0.9c0.6,0,1.3-0.2,1.8-0.7c1.1-1,1.2-2.7,0.2-3.9C60.4,69.4,53.3,66.6,45.7,66.6
      L45.7,66.6z M45.7,66.6"/>
    <path d="M36.3,43c1.1-1.1,1.1-2.7,0.1-3.8c-1.1-1.1-2.8-1.1-3.9-0.1c-0.2,0.2-4.6,4.1-13.9-0.5c-1.4-0.7-3-0.1-3.7,1.2
      c-0.7,1.4-0.1,3,1.2,3.7c4.2,2.1,7.7,2.8,10.7,2.8C32.9,46.3,36.2,43.2,36.3,43L36.3,43z M36.3,43"/>
    <path d="M73.2,38.9c-9.2,4.6-13.7,0.6-13.9,0.5c-1.1-1-2.8-1-3.9,0.1c-1.1,1.1-1,2.8,0.1,3.8c0.2,0.2,3.4,3.3,9.5,3.3
      c2.9,0,6.5-0.7,10.7-2.8c1.4-0.7,1.9-2.3,1.2-3.7C76.2,38.8,74.6,38.3,73.2,38.9L73.2,38.9z M73.2,38.9"/>
  </symbol>
  <symbol id="avatar-femme" viewBox="0 0 79.1 99.6">
    <path d="M11.2,47.1c0,4.8,3.2,8.6,7,8.6h10c3.3,3,7.1,4.9,11.2,4.9c4.1,0,7.9-1.9,11.2-4.9h10c3.9,0,7-3.9,7-8.6V34.6h0
      c0-0.9,0.1-1.9,0.1-3C67.6,14.7,55,1,39.4,1C23.8,1,11.2,14.7,11.2,31.6c0,1,0,2,0.1,3h-0.1V47.1z M39.4,57.1
      c-1.8,0-3.5-0.5-5.2-1.4c-1.4-0.7-2.7-1.7-4-2.9c-4.2-3.9-7.5-10.1-9.2-16l-0.3-1.1l-1.2-0.1c-0.6-0.1-1.2-0.4-1.9-1
      c-0.8-0.8-1.6-1.9-2-3.5c-0.5-1.8-0.3-3.6,0.5-4.8c0.3-0.5,0.7-1,1.5-1.2c0.1,0,0.2,0,0.4,0c0.1,0,0.2,0,0.3,0l0.6,0.1
      c2.8,4.3,10.8,3.2,17.7-2.5c1.4-1.2,2.7-2.4,3.8-3.7c2.7-0.3,5.6-0.4,8.4,0.3c6.2,1.6,7.9,5.1,9.7,5.8l0,0.1l0.3,0
      c0.3,0.1,0.6,0,1-0.1l0.4,0c0.2,0,0.5,0,0.7,0c0.7,0.2,1.2,0.8,1.5,1.2c0.7,1.2,0.9,3,0.5,4.8c-0.4,1.5-1.2,2.7-2,3.5
      c-0.6,0.6-1.3,0.9-1.9,1l-1.2,0.2l-0.3,1.1c-1.6,5.9-4.9,12-9,15.9c-1.3,1.2-2.6,2.2-4.1,3C42.9,56.6,41.2,57.1,39.4,57.1
      L39.4,57.1z M60.2,58.9c-2.2,3.7-4.7,6.9-8.1,8.6c-7,3.6-12.1,6.5-12.1,6.5l0,0v-0.1l-0.1,0l-0.1,0V74l0,0c0,0-5.2-2.9-12.1-6.5
      c-3.4-1.7-5.9-4.9-8.1-8.6C9.1,63.1,1.9,72.7,1.9,81.1v17.4h75.7V81.1C77.7,72.7,70.5,63.1,60.2,58.9L60.2,58.9z M60.2,58.9"/>
  </symbol>
</svg>

<div id="wrapper">
  <header>
    <div class="logo">
      <a href="<?php echo APPURL; ?>dashboard/<?php echo $session_id; ?>"><img src="<?php echo CC_JS_IMG; ?>images/keep-app-logo.png" width="87" height="91"></a>
    </div>
    <div class="top-nav">
      <div class="icon-nav">
        <a href="javascript:void(0);" id="view-mainmenu">
          <svg class="icon-menu"><use xlink:href="#main-menu" /></svg>  
        </a>         
      </div>
      
      <div class="icon-nav">
        <a href="javascript:void(0);" id="view-notifications">
          <svg class="icon-notificacion"><use xlink:href="#notificaciones" /></svg>  
        </a>
        <span class="notification-counter">00</span>        
      </div>
      
      <div class="icon-nav">
        <a href="<?php echo APPURL; ?>dashboard/<?php echo $session_id; ?>">
          <svg class="icon-list-people"><use xlink:href="#lista-personas" /></svg>  
        </a>
      </div>
    </div>
    <!-- main navigation sub menus -->    
    <ul class="submenu" id="mainmenu-list" style="display: none">
        <li><a href="/">Cont&aacute;ctanos</a></li>
        <li><a href="/">T&eacute;rminos de uso</a></li>
    </ul>
    <ul class="submenu" id="notification-list" style="display: none">
      <li><a href="">Ingresa mas memorias</a></li>
      <li><a href="">Ingresa otra persona</a></li>
    </ul>
  </header>
  <div id="wrapper">
         @yield('content')
  </div>
  
</div>
<script>
    var validation = "<?php echo $session_id; ?>";
    var callurl = "<?php echo WEBSERVICES; ?>";
    var appurl = "<?php echo APPURL; ?>";
</script>
</body>
</html>

     