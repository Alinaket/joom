let temp_scroll = 0
let ticking = false;
let lastKnownScrollPosition = 0;
let is_scroll = true
let old_item = null
let number = 1
const list_wrapper = document.querySelector(".all_img_product .list_wrapper")
const list_wrapper_items = list_wrapper.querySelectorAll(".img")
const img_title = document.querySelector(".title_img img")
const none_list = document.querySelector(" ul .none")
const height = document.querySelector(".comments .cardList")
const modal_input = document.querySelector(".reviews .modal_input")
const disable = document.querySelectorAll(".disable")
const new_item = document.querySelector(".marks ul .black")
const product_all = document.querySelectorAll(" .other_product .card")
product_all.forEach(item=>{
    item.classList.add("disable")
})

function add_product_list (){
    for(let i=0; i<5*number; i++){
        product_all[i].classList.remove("disable");
    }
    number++
}
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
        if (temp_scroll > 0 && coordination === -1) {
            doSomething(coordination)
        } else if (coordination === 1 && temp_scroll < list_wrapper_items.length * 84 - 84 * 4) {
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

function change_big_img(img) {
    img_title.src = img.src
}

function open_description() {

    if (none_list.style.display === "block") {
        none_list.style.display = "none"
        height.style.height = "40vh"
    } else {
        none_list.style.display = "block"
        height.style.height = "50vh"
    }
}
function open_comment() {
    modal_input.classList.toggle("open")
}
function filter_star(key, element) {
    const card = document.querySelectorAll(".comments .card")
    card.forEach((item) => {
        item.classList.remove("disable")
    })
    if (key === undefined) {
        // card.forEach((item) => {
        //     item.classList.remove("disable")
        // })

    } else {
        let found_class = "";
        let no_img2 = true;
        if(key === "img"){
            found_class = "img_have";
        }else if(key === "no_img"){
            no_img2 = false;
            found_class = "img_have";
        }else{
            found_class = "star_" +key;
        }
        const active = document.querySelectorAll(".comments ."+ found_class);
        if(no_img2 === true){
            console.log(active);
            card.forEach((item) => {
                item.classList.add("disable")
            })
            active.forEach((item) => {
                item.classList.remove("disable")
            })
        }else{
            active.forEach((item)=>{
                item.classList.add("disable")
            })

        }
    }
     if(old_item == null){
         new_item.classList.remove("black")
     }else{
         old_item.classList.remove("black")
     }
     old_item = element
     element.classList.add("black")
}







