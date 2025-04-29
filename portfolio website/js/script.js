/* ============================== typing animation ============================ */
var typed = new Typed(".typing",{
    strings:["","Full stack developer","Web Developer","Java developer","Windows app developer"],
    typeSpeed:100,
    BackSpeed:60,
    loop:true
})

//age calculater
const myDiv = document.getElementById('age');
     var myDate=new Date("2000-11-17");
     var currentDate=new Date();
     date=Math.floor((currentDate-myDate)/ (1000 * 60 * 60 *24* 365.25));
    myDiv.innerHTML = 'Age : <span>'+date+'</span>';

