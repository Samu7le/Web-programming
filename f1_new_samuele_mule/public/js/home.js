const news_items = document.querySelectorAll(".news-item");
for(let item of news_items){
    item.querySelector("button").onclick= handler_click;
}
function handler_click(event){
    console.log(event.target);
    event.stopPropagation();
    const title = event.target.innerText;
    const url = event.target.querySelector("#url").value;
    const img = event.target.querySelector("#img").value;
    console.log(title,url,img);
    const main_item = document.querySelector("#main-item");
    
    main_item.children[0].children[1].innerHTML=title;
    main_item.children[0].children[0].src=img;
    main_item.children[0].href=url;
    event.preventDefault();
}