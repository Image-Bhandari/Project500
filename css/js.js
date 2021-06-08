
var firstname,lastname,email,update;
var bol=0;
function disable(){
    if(bol==0){
    firstname = document.getElementById("firstname");
    lastname = document.getElementById("lastname");
    email = document.getElementById("email");
    update = document.getElementById("update");
    firstname.disabled=true;
    lastname.disabled=true;
    email.disabled=true;
    update.disabled=true;
    bol=1;
    }
}

function enable(){
    if(bol==1){
        document.getElementById("firstname").disabled=false;
         document.getElementById("lastname").disabled=false;
        document.getElementById("email").disabled=false;
        update = document.getElementById("update").disabled=false;
        bol=0;
     }
         else{
        disable();
            }
}

function creditInfo(bid){
    var cardnum = prompt("Please Enter Your Credit Card Number: ","");
    var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    
    if(cardnum.match(cardno)){
        var path = "index.php?page=history&book_id=";
        var items = "&cred-detail=";
        var fullpath = path.concat(bid,items,cardnum);
        window.location.href =fullpath;
        
 
    }
        else
        {
            alert("Not a valid Visa credit card number!");
        }

}

function start(){
}
document.addEventListener('DOMContentLoaded', start);