const header = document.querySelector(".header")
const logo = document.querySelector(".logo")
const menuItems = document.querySelector(".menu__items")

const removeStyle = () => {
    logo.classList.remove("logo-scroll")
    header.classList.remove("header-scroll")
    menuItems.classList.remove("menu-items-scroll")
}


const device = () =>{
    const scrollHeight = window.scrollY
    const scrollWindowTrigger = 50
    if (scrollHeight > scrollWindowTrigger){
        // logo.classList.add("logo-scroll")
        header.classList.add("header-scroll")
        menuItems.classList.add("menu-items-scroll")
    }else{
        removeStyle()
    }
}

const windowMobileSzie = 867

const checkWindowStatus = () =>{
    const windowSize = window.innerWidth
    if(windowSize <= windowMobileSzie){
        removeStyle()
        window.removeEventListener("scroll", device)
        header.classList.add("header-mobile-style")
    }else{
        header.classList.remove("header-mobile-style")
        window.addEventListener("scroll", device)
    }  
}

window.addEventListener("load", checkWindowStatus);

window.addEventListener("resize", checkWindowStatus)

window.addEventListener("load", window.onbeforeunload = () => window.scrollTo(0, 0))


document.addEventListener("DOMContentLoaded", () => {
    const questions  = document.querySelectorAll('.jewelry-service__question')
    const answers = document.querySelectorAll('.jewelry-service__answer--visible')
    const icons = document.querySelectorAll(".icon-plus")
    questions.forEach((element, index) => {
        element.addEventListener("click", function(){
            const answer = this.nextElementSibling;
            answer.classList.toggle('jewelry-service__answer--visible');
            const icon = this.querySelector('.jewelry-service__icon');
            icon.classList.toggle('icon-plus');
            icon.classList.toggle('icon-minus');
        })
    })
})