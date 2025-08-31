function handlerClick(event){
    console.log(event.currentTarget)
}

const news_list = document.querySelectorAll(".news-item-list");
for (let news of news_list){
    news.addEventListener("click", handlerClick)
}