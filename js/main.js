window.addEventListener('scroll',function(){
    const header=document.querySelector('header');
    header.classList.toggle("sticky",window.scrollY > 0);
    const nav=document.querySelector('.nav');
    nav.classList.toggle("navdisplay",window.scrollY>0);
   
    var con=document.querySelector('.con');
    var second=document.querySelector('#second');
    var third=document.querySelector('#third');
   
    var conPosition=con.getBoundingClientRect().top;
    var screenPosition=window.innerHeight/1.3;
    if(conPosition<screenPosition){
        con.classList.add('conshow');
        second.classList.add('conshow');
        third.classList.add('conshow');
    }
   
    
    
    
   
});