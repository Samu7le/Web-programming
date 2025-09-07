const input_img = document.querySelector("#url_image");
const avatar_img = document.querySelector("#avatar-img");
const button_img = document.querySelector("#button-img");

button_img.onclick = handler_click
function handler_click(event){
    const random_seed = Math.random()*10000;
    input_img.value = "https://api.dicebear.com/9.x/identicon/svg?seed=" + random_seed;
    avatar_img.src = "https://api.dicebear.com/9.x/identicon/svg?seed=" + random_seed;
}