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


const questions = document.querySelectorAll('.jewelry-service__question');
const answers = document.querySelectorAll('.jewelry-service__answer');
const icons = document.querySelectorAll(".jewelry-service__icon");

questions.forEach((element) => {
    element.addEventListener("click", function() {
        const answer = this.nextElementSibling;
        const icon = this.querySelector('.jewelry-service__icon');
        const isVisible = answer.classList.contains('jewelry-service__answer--visible');

        // Закрываем все ответы и сбрасываем иконки
        answers.forEach((answer) => {
            answer.classList.remove('jewelry-service__answer--visible');
        });

        icons.forEach((icon) => {
            icon.classList.remove('icon-minus');
            icon.classList.add('icon-plus');
        });

        // Если текущий ответ уже открыт, не открываем его снова
        if (!isVisible) {
            answer.classList.add('jewelry-service__answer--visible');
            icon.classList.remove('icon-plus');
            icon.classList.add('icon-minus');
        }
    });
});

