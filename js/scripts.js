window.onscroll = function(){
        if(document.documentElement.scrollTop > 160){
        document.querySelector('.go-top-container')
        .classList.add('show');     
    }else{
        document.querySelector('.go-top-container')
        .classList.remove('show'); 
    }
}

document.querySelector('.go-top-container')
.addEventListener('click', () => {
    window,scrollTo({
        top: 0,
        behavior: "smooth"
    })
})

document.querySelector('.scroll-up')
.addEventListener('click', () => {
    window,scrollTo({
        top: 0,
        behavior: "smooth"
    })
})