const slidingNewsletter = document.querySelector(".slide-scroll");

window.addEventListener("scroll", () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport =  slidingNewsletter.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() 
    - clientHeight * 0.40) {
        slidingNewsletter.classList.add("active");
    }else{
        slidingNewsletter.classList.remove("active");
    }
});

const slidingNewsletter2 = document.querySelector(".slide-scroll2");

window.addEventListener("scroll", () => {
    const {scrollTop, clientHeight} = document.documentElement;

    const topElementToTopViewport =  slidingNewsletter2.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() 
    - clientHeight * 0.40) {
        slidingNewsletter2.classList.add("active");
    }else{
        slidingNewsletter2.classList.remove("active");
    }
});