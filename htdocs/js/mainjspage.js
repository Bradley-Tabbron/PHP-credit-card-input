var x = function cardnumber(inputtxt) {  
var mascardno = /^(?:5[1-5][0-9]{14})$/;  
var aecardno = /^(?:3[47][0-9]{13})$/;
var disccardno = /^(?:6(?:011||5[0-9][0-9])[0-9]{12})$/;
var visacardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
if(inputtxt.value.match(mascardno))         {  
    cardnumbercolour('lightgreen');
    logochange();
    var s =document.getElementsByClassName('m');
    s[0].style.opacity=1.0;
    return true;
}     
   else if(inputtxt.value.match(aecardno))         {  
        cardnumbercolour('lightgreen');
      logochange();
       var r =document.getElementsByClassName('ae');
    r[0].style.opacity=1.0;
       return true;
           
}  
   else if(inputtxt.value.match(visacardno))         {  
   cardnumbercolour('lightgreen');
       logochange();
       var q =document.getElementsByClassName('v');
    q[0].style.opacity=1.0;
      return true; 
       
}  
    else if(inputtxt.value.match(disccardno))         {  
        cardnumbercolour('lightgreen');
        logochange();
        var t =document.getElementsByClassName('d');
    t[0].style.opacity=1.0;
       return true;    
}  
else         { 
   cardnumbercolour('lightgray');
    logochange();
 return false;
}
}
var n = function cvv(inputtxt) {  
    var cvvval =/^(?:[0-9]{3})$/;
if(inputtxt.value.match(cvvval)) {  
    cvvnumbercolour('lightgreen');
    return true;
}     

else         { 
   cvvnumbercolour('lightgray');
 return false;
}
}
var g = function datecheck(month,year) {  
    var today=new Date;
    var curmonth=today.getMonth()+1;
    var curyear=today.getFullYear();
    if((year-curyear>0)||((year-curyear==0)&&(month-curmonth>=0))) {  
    datenumbercolour('lightgreen');
    return true;
}     

else         { 
   datenumbercolour('lightgray');
 return false;
}
}
function cardnumbercolour(colour){
    var a= document.getElementsByClassName('card-number');
                  a[0].style.borderColor=colour;
}
function cvvnumbercolour(colour){
    var a= document.getElementsByClassName('cvvinput');
                  a[0].style.borderColor=colour;
}
function datenumbercolour(colour){
    var a= document.getElementsByClassName('mmonth');
    var b= document.getElementsByClassName('yyear')
                  a[0].style.borderColor=colour;
                  b[0].style.borderColor=colour;
}
function logochange(){
    var a = document.getElementsByClassName('m');
    var b = document.getElementsByClassName('v');
    var c = document.getElementsByClassName('ae');
    var d = document.getElementsByClassName('d');
     a[0].style.opacity=0.25;
     b[0].style.opacity=0.25;
     c[0].style.opacity=0.25;
     d[0].style.opacity=0.25;
}
function checkcvv(cvvnum){
     var y=n(cvvnum);
            
                 displayproceedbtn();
              
}
function checkcardnum(card){
    var y=x(card);
       
                 displayproceedbtn();
             
             
}
function checkdate(Month,Year){
    var y=g(Month,Year);
    displayproceedbtn();
}
 function displayproceedbtn(){
            var p=document.getElementsByClassName('card-number');
            var q=document.getElementsByClassName('cvvinput');
           var z=document.getElementsByClassName('yyear');
            if ((p[0].style.borderColor=='lightgreen')&&(q[0].style.borderColor=='lightgreen')&&(z[0].style.borderColor=='lightgreen')){
                 var a= document.getElementsByClassName('proceedbtna')
                  a[0].style.display='block';
                  a[0].addEventListener("click", clickhiddenlink);
                 
              }
              else if((p[0].style.borderColor=='lightgray')||(q[0].style.borderColor=='lightgray')||(z[0].style.borderColor=='lightgray')){
                  var b= document.getElementsByClassName('proceedbtna')
                  b[0].style.display='none';
              }
          }

function clickhiddenlink(){
   var w=document.getElementsByClassName('hiddenbtn');
   var e=w[0];
   e.style.display='block';
   eventFire(e,"click");
}
function eventFire(el, etype){
 if (el.fireEvent) {
   el.fireEvent('on' + etype);
  } 
    else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
   el.dispatchEvent(evObj);
  }
}
