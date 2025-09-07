const menu = document.querySelector("#hambuger-menu");
menu.onclick = responsive_handler;

function responsive_handler() {
    const link_container = document.querySelector("#link-container")
    // console.log(link_container)
    
    if (link_container.style.display === "block") {
        link_container.style.display = "none";
    } else {
        link_container.style.display = "block";
    }

}