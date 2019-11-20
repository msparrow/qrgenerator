//Create QR code object using imported script from HTML 
var qrcode = new QRCode("qrcode");
var submit = document.getElementById("submit");

submit.addEventListener("click", function(){
  
  console.log("Button pressed");
  
  var request = new XMLHttpRequest();

var url = 'https://ms57713.starbucks.net/beta/api/starpay/qrcode/type2/encode';

request.open('POST', url);

request.onload = function() {
  var data = JSON.parse(request.responseText);
  console.log("request.onload activated");
  console.log(request.responseText);
  qrcode.makeCode(data);
  //console.log(data);
  
};
request.send();

});
//Calls the makeCode function on the text input
function makeCode () {      
    var text = document.getElementById("text");
    qrcode.makeCode(text.value);
}
//makeCode function declaration, definition coming from JS Script imported in head of HTML
makeCode();
//Calls the makeCode function when the enter key (keyCode 13) is pressed on the text input 
$("#text").
    on("keyup", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
});


