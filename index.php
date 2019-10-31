<DOCTYPE !html>
<html>
<head>
  <title>Sample QR Generator</title>
  <!-- Import of JQuery and JS Script for generating QR Codes -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  
<style>
  #qrcode {
  width:180px;
  height:180px;
  margin-top:20px;
}
</style>
</head>
  
<body>
  <!-- Text input which will be converted into a QR Code-->
  <input id="text" type="text" value="Hello World" style="width:80%" /><br />
  <div id="qrcode"></div>
  <script src="./js/qrgenerator.js"></script>
</body>
</html>