let temp_scroll = 0
let ticking = false;
let lastKnownScrollPosition = 0;
let is_scroll = true
const list_wrapper = document.querySelector(".all_img_product .list_wrapper")

function scroll_button(coordination){
    console.log(list_wrapper.scrollTop)
}

list_wrapper.addEventListener("scroll",(e,x)=>{
    if(is_scroll){
        list_wrapper.style.overflow = "hidden"
        doSomething()
        console.log("sdftgyuhijo")
    }
})

function doSomething(scrollPos) {
    // Do something with the scroll position
    is_scroll = false
    let temp_interval = 0
   let set_interval = false;
    set_interval = setInterval(()=>{
       list_wrapper.scrollTo(0,temp_scroll+=1)
       temp_interval ++;
        if(temp_interval>=84){
            list_wrapper.style.overflow = "scroll"
            clearInterval(set_interval)
            // is_scroll = true
            setTimeout(()=>{
                is_scroll = true

            }, 100)
        }

   }, 1)
}



