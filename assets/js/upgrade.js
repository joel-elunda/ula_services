
    let links = document.querySelectorAll('#link')
    
    for(let i = 0; i < links.length; ++i) {
        links[i].addEventListener('click', function(e){
            links[i].className = 'active'
        }, false)
    }