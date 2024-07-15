var header: HTMLDivElement = document.querySelector("#header-fixed");

function scrolled() : void{
    var windowHeight : number = document.body.clientHeight,
        currentScroll : number = document.body.scrollTop || document.documentElement.scrollTop;

    if(currentScroll >= 132){
        console.log('test');
    }

    header.className = (currentScroll >= 182) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);