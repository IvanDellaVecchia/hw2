function likeJson(json){
    const array = document.querySelectorAll(".actions div");
    for(let res of array){
        if(res.dataset.postID == json.id){
            res.textContent = json.nlikes;
        }
    }
}

function addLike(event){
    const b = event.currentTarget;
    b.classList.remove('unliked');
    b.classList.add('liked');
    
    fetch(BASE_URL + "/addLike/" + (parseInt(b.dataset.postID))).then(onResponse).then(likeJson);
    b.removeEventListener('click', addLike);
    b.addEventListener('click', removeLike);
}

function removeLike(event){
    const b = event.currentTarget;
    b.classList.remove('liked');
    b.classList.add('unliked');
    
    fetch(BASE_URL + "/removeLike/" + (parseInt(b.dataset.postID))).then(onResponse).then(likeJson);
    b.removeEventListener('click', removeLike);
    b.addEventListener('click', addLike);
}