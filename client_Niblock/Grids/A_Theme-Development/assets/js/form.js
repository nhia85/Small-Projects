function getCamp(name) {
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    return (results && results[1]) || undefined;
}
var camp = getCamp('utm_campaign');
if (camp > '') {
    console.log( 'got it: ' + camp);
    document.getElementById('haa-camp').value = camp;
} else {
    console.log('campaign is missing');
}

var lpurl = document.location.href;
document.getElementById('haa-url').value = lpurl;


function validateForm() {
    var n = document.forms["contact-form"]["first-name"].value;
    var l = document.forms["contact-form"]["last-name"].value;
    var e = document.forms["contact-form"]["email"].value;
    var t = document.forms["contact-form"]["message"].value;

    if (n == "") {
        document.getElementById("status").innerHTML = "Error! First Name - All fields are required";
        return false;
    }
    if (l == "") {
        document.getElementById("status").innerHTML = "Error! Last Name - All fields are required";
        return false;
    }
    else if  (e == "") {
        document.getElementById("status").innerHTML = "Error! Email - All fields are required";
        return false;
    }
    else if (t =="") {
        document.getElementById("status").innerHTML = "Error! Message Type - All fields are required";
        return false;
    }

    else {
        formPost();
    }
}

function formPost(){
    var xhr = new XMLHttpRequest(),
        method = "POST",
        url = "";
        //******************************* ADD NEW URL HERE FOR FORMS **************************** */

    var _first_name  = document.getElementById('first-name').value;
    var _last_name   = document.getElementById('last-name').value;
    var _phone       = document.getElementById('phone').value;
    var _email       = document.getElementById('email').value;
    var _message     = document.getElementById('message').value;
    var _haa_phone   = document.getElementById('haa-phone').value;
    var _haa_camp    = document.getElementById('haa-camp').value;
    var _haa_url     = document.getElementById('haa-url').value;


    var vars = "first_name="+_first_name+"&phone="+_phone+"&email="+_email+"&message="+_message+"&last-name="+_last_name+
        "&haa-phone="+_haa_phone+"&haa-camp="+_haa_camp+"&haa-url="+_haa_url;
    xhr.open(method, url, true);
    // Set content type header information for sending url encoded variables in the request
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var return_data = xhr.responseText;
            window.location = "thankYou/thank-you.php";
        }
        else {
            console.log('Error! here is your data: ' + vars);
        }
    }
    xhr.send(vars);
    document.getElementById("status").innerHTML = "processing...";
}