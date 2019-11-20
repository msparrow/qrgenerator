<DOCTYPE !html>
<html>
<head>
  <title>Sample QR Generator</title>
  <!-- Import of JQuery and JS Script for generating QR Codes -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  <script src="js/qrgenerator.js"></script>
<style>
  #qrcode {
  width:240px;
  height:200px;
  margin-top:20px;
  margin-left:auto;
  margin-right:auto;
  position:relative;
  /*zoom:200%;*/
}
  input{
    /*zoom:200%;*/
    text-align:center;
  }
  body{
    zoom:200%;
  }
</style>
</head>
<body>
  <!-- Text input which will be converted into a QR Code-->
  <div id="body">
  <input id="text" type="text" value="Hello World" style="width:100%"></input> 
  <br />
  <div id="qrcode"></div>
  <br />
  <br />
  <br />
  <br />
  <input id="submit" type="button" value="Request QR Data"></input>
  </div>
</body>
</html>
