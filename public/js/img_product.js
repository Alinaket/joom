let temp_scroll = 0
let ticking = false;
let lastKnownScrollPosition = 0;
let is_scroll = true
const list_wrapper = document.querySelector(".all_img_product .list_wrapper")
const list_wrapper_items = list_wrapper.querySelectorAll(".img")
const img_title = document.querySelector(".title_img img")
const none = document.querySelector(" ul .none")
const height = document.querySelector(".comments .cardList")

function scroll_button(coordination) {
    scrolls_img(coordination)
}

list_wrapper.addEventListener("scroll", (e, x) => {
    scrolls_img(1)
})

function scrolls_img(coordination) {
    console.log(list_wrapper_items.length)
    if (is_scroll) {
        list_wrapper.style.overflow = "hidden"
        if(temp_scroll > 0 && coordination === -1){
            doSomething(coordination)
        }else if(coordination === 1 && temp_scroll < list_wrapper_items.length*84 - 84*4){
            doSomething(coordination)
        }
    }
}

function doSomething(coordination) {
    // Do something with the scroll position
    is_scroll = false
    let temp_interval = 0
    let set_interval = false;
    console.log(temp_scroll)
    set_interval = setInterval(() => {
        list_wrapper.scrollTo(0, temp_scroll += coordination)
        temp_interval++;
        if (temp_interval >= 84) {
            list_wrapper.style.overflow = "scroll"
            clearInterval(set_interval)
            // is_scroll = true
            setTimeout(() => {
                is_scroll = true

            }, 100)
        }

    }, 1)
}

function change_big_img(img){
    img_title.src = img.src
}
function open_description(){

    if(none.style.display === "block"){
        none.style.display = "none"
        height.style.height = "40vh"


    }else {
        none.style.display = "block"
        height.style.height = "50vh"

    }
}


