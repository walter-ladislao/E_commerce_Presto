let watch= document.querySelectorAll('.watch')



function callback(items) {
    items.forEach(item => {
        if (item.isIntersecting) {
            item.target.classList.add("in-page");
        }else{
            item.target.classList.remove("in-page");
        }
    });
}

let observer = new IntersectionObserver(callback,{threshold:0.1});

watch.forEach(element => {
    observer.observe(element);
});