function ad() {

    document.getElementById("ad").value = "";
}

var isim="";
var soyisim="";
var email="";
var metin="";
var size=0;
var sayac=0;
var numara="";
function temizle(){
    document.getElementById("isim").value="";
    document.getElementById("soyisim").value="";
    document.getElementById("telefon").value="";
    document.getElementById("mail").value="";
}


function mailkontrolu() {
    var mail = document.getElementById("mail").value;
    size=mail.length;
    var format = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
    
    
    
    if(size==0){
        alert("Mail adresi bos birakilamaz!");
    }
    if (format.test(mail) == true) {
        email=mail;
    } 
    else {
        alert("Hata geçersiz mail adresi girdiniz!");
    }
}
function adkontrol() {
    metin = document.getElementById("isim").value;
    size=metin.length ;
    if (size==0) {
        alert("Isim bos birakilamaz!");
    } 
    else if(size<2) {
        alert("Isim tek harften olusamaz!");
    }
    else{
        isim=metin;
    }
  
}
function soyadkontrol() {
    metin = document.getElementById("soyisim").value;
    size=metin.length;
    if (size==0) {
        alert("Soyisim bos birakilamaz!");
    } 
    else if(size<2) {
        alert("Soyisim tek harften olusamaz!");
    }
    else{
        soyisim=metin;
    }
}
function numarakontrol(){
    metin=document.getElementById("telefon").value;
    size=metin.length;
    var sayilar=[0,5,2,3,4,1,6,7,8,9]
    for(i=0;i<10;i++){
        if(metin[0]!=sayilar[0]){
            var sayac=+1
        }
        if(metin[1]!=sayilar[1]){
            var sayac=+1
        }
    }
    if(sayac>0){
        alert("Numarayi dogru bicimde giriniz!");
    }
    else if(size<11){
        
        alert("Numara 11 haneli olmalidir!");
    
    }
    else{
        numara=metin;
    }
    
}
function isimgonder(){
    document.write(isim);
}