//Create QR code object using imported script from HTML 
var qrcode = new QRCode("qrcode");

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
