function resmiGoster1() {
    setActiveImage("resim1");
}

function resmiGoster2() {
    setActiveImage("resim2");
}

function resmiGoster3() {
    setActiveImage("resim3");
}

function setActiveImage(activeId) {
    const images = ["resim1", "resim2", "resim3"];
    
    images.forEach(id => {
        const img = document.getElementById(id);
        if (id === activeId) {
            img.classList.add("active"); 
            img.style.zIndex = 2; 
        } else {
            img.classList.remove("active"); 
            img.style.zIndex = 1; 
        }
    });
}