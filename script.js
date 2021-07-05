const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

function generateString(length) {
    let result = ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    return result;
}

console.log(generateString(5));
function func(){
   var nvid= generateString(5);
  var node = document.createElement("div");
  node.setAttribute('id',nvid);
  node.setAttribute('class','col-3');
  document.getElementById("test").appendChild(node); 
  var nod= document.createElement("img");
   nod.src="images/buy-2.jpg";
   document.getElementById(nvid).appendChild(nod); 

}

//rating

/*console.log(generateString(5));
function star(){
    var num=document.getElementById("test").value;
    if(num>5 || num<0){
        alert("ahbat awa hbat")
       exit(); 
    }
    else{
        while(num>=0){

  var node = document.createElement("i");
  node.setAttribute('class','fa fa-star');
  document.getElementById("star").appendChild(node); 
  var nod= document.createElement("img");}
  num=num-1;
    }
    
  

}*/

// program to generate random strings

// declare all characters
 var  MenuItems=document.getElementById("MenuItems");
 MenuItems.style.maxHeight="0px";
 function menutoggle(){
     if(MenuItems.style.maxHeight=="0px")
     {
         MenuItems.style.maxHeight="200px";
     }
     else{
         MenuItems.style.maxHeight="0px"
     }
 }

/* js for toggle form */

   var LoginForm =document.getElementById("LoginForm");
   var RegForm =document.getElementById("RegForm");
   var Indicator = document.getElementById("Indicator");

      function register() {
         RegForm.style.transform ="translateX(0px)";
         LoginForm.style.transform ="translateX(0px)";
         Indicator.style.transform ="translateX(100px)";
      }

      function Login() {
        RegForm.style.transform = " translateX(300px)";
        LoginForm.style.transform = " translateX(300px)";
        Indicator.style.transform = " translateX(0px)";
     }

 /*js for product gallery*/
 var ProductImg=document.getElementById("ProductImg");
 var SmallImg=document.getElementsByClassName("small-img");
 SmallImg[0].onclick=function(){
     ProductImg.src=SmallImg[0].src;
 }
 SmallImg[1].onclick=function(){
    ProductImg.src=SmallImg[1].src;
}
SmallImg[2].onclick=function(){
    ProductImg.src=SmallImg[2].src;
}
SmallImg[3].onclick=function(){
    ProductImg.src=SmallImg[3].src;
}

 //remove element frm cart
 function remove() {
    // Removes an element from the document
    var element1 = document.getElementById("test1");
    var element2 = document.getElementById("test2");
    var element3 = document.getElementById("test3");

    element1.remove();
    element2.remove();
    element3.remove();

}
