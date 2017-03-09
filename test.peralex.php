
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>A scaled corrected CSS parallax demo by Keith Clark</title>
<style>

  /* Parallax base styles
  --------------------------------------------- */

  .parallax {
    height: 100vh;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-perspective: 1px;
    perspective: 1px;
  }

  .parallax__layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .parallax__layer--base {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
  }

  .parallax__layer--back {
    -webkit-transform: translateZ(-1px) scale(2);
    transform: translateZ(-1px) scale(2);
  }


  /* demo styles
  --------------------------------------------- */

  * {
    margin:0;
    padding:0;
  }

  body {
    font: 100% / 1.5 Arial;
  }

  .parallax {
    font-size: 200%;
  }

   /* add some padding to force scrollbars */
  .parallax__layer {
    padding: 100vh 0;
  }

   /* centre the content in the parallax layers */
  .title {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }


</style>
</head>

<body>
  <div class="parallax">
    <div class="parallax__layer parallax__layer--back">
      <div class="title">This is the background</div>
    </div>
    <div class="parallax__layer parallax__layer--base">
      <div class="title">This is the foreground</div>
    </div>
  </div>


</body>
</html>