let search_container= document.querySelector('#search-container');
let search= document.querySelector('.search');
let btn_search= document.querySelector('.btn-search');

search.addEventListener('click', ()=>{
    search_container.classList.toggle('active');
    btn_search.classList.toggle('d-none');
    search.classList.toggle('bi-search')
    search.classList.toggle('bi-x-lg')
    if(search){
        search.classList.add('text-white')
    }
})