let nav = document.querySelector(`#nav`)
let linkScroll = document.querySelectorAll('.linkScroll');
let borderScroll = document.querySelectorAll('.borderScroll')

window.addEventListener(`scroll`, ()=>{
    let scrolled = window.scrollY
    if (scrolled > 1){
        linkScroll.forEach(element => {
            element.classList.add('link-scroll')
        });
        // borderScroll.classList.add('border-scroll')
        borderScroll.forEach(element => {
            element.classList.add('border-scroll')
        })
        nav.classList.add(`navbarScroll`)
    }else{
        linkScroll.forEach(element => {
            element.classList.remove('link-scroll')
        });
        // borderScroll.classList.remove('border-scroll')
        borderScroll.forEach(element => {
            element.classList.remove('border-scroll')
        })
        nav.classList.remove(`navbarScroll`)
    }
})

