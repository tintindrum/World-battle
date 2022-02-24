window.addEventListener('scroll', function(){
    const header =document.querySelector('Buttonretc');
    header.classList.toggle("sticky", window.scrollY > 0 );
});