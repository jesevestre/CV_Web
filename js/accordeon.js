/* Ouverture fermeture de l'accordéon */
function handleQuestionToogle1(){
    const faq = document.getElementById("content-container-1");
    const icone = document.getElementById("content-container-1-icone");

    if(faq.className === "faq__content-container--active") {
        faq.classList.remove("faq__content-container--active");
        faq.classList.add("faq__content-container");

        icone.classList.remove("down");
        icone.classList.add("left");
    } else {
        faq.classList.remove("faq__content-container");
        faq.classList.add("faq__content-container--active");

        icone.classList.remove("left");
        icone.classList.add("down");
    }
}

function handleQuestionToogle2(){
    const faq = document.getElementById("content-container-2");
    const icone = document.getElementById("content-container-2-icone");

    if(faq.className === "faq__content-container--active") {
        faq.classList.remove("faq__content-container--active");
        faq.classList.add("faq__content-container");

        icone.classList.remove("right");
        icone.classList.add("down");
    } else {
        faq.classList.remove("faq__content-container");
        faq.classList.add("faq__content-container--active");

        icone.classList.remove("down");
        icone.classList.add("right");
    }
}

function handleQuestionToogle3(){
    const faq = document.getElementById("content-container-3");
    const icone = document.getElementById("content-container-3-icone");

    if(faq.className === "faq__content-container--active") {
        faq.classList.remove("faq__content-container--active");
        faq.classList.add("faq__content-container");

        icone.classList.remove("right");
        icone.classList.add("down");
    } else {
        faq.classList.remove("faq__content-container");
        faq.classList.add("faq__content-container--active");

        icone.classList.remove("down");
        icone.classList.add("right");
    }
}

function handleQuestionToogle4(){
    const faq = document.getElementById("content-container-4");
    const icone = document.getElementById("content-container-4-icone");

    if(faq.className === "faq__content-container--active") {
        faq.classList.remove("faq__content-container--active");
        faq.classList.add("faq__content-container");

        icone.classList.remove("right");
        icone.classList.add("down");
    } else {
        faq.classList.remove("faq__content-container");
        faq.classList.add("faq__content-container--active");

        icone.classList.remove("down");
        icone.classList.add("right");
    }
}