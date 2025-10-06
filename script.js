function playSound(id) {
    let path = "";
    switch(id) {
        case "w": path = "music/tom-1.mp3"; break;
        case "a": path = "music/tom-2.mp3"; break;
        case "s": path = "music/tom-3.mp3"; break;
        case "d": path = "music/tom-4.mp3"; break;
        case "j": path = "music/snare.mp3"; break;
        case "k": path = "music/crash.mp3"; break;
        case "l": path = "music/kick-bass.mp3"; break;
    }
    if(path !== "") {
        let audio = new Audio(path);
        audio.play();
    }
}

// Listen to keypress (keyboard)
document.addEventListener("keypress", function(event) {
    let key = event.key;
    playSound(key);
    animateButton(key);
});

// Listen to mouse clicks (buttons)
document.querySelectorAll("button").forEach(function(button) {
    button.addEventListener("click", function() {
        let id = button.id;
        playSound(id);
        animateButton(id);
    });
});
// Function to animate button
function animateButton(id) {
    let btn = document.getElementById(id);
    if(btn) {
        btn.classList.add("add");
        setTimeout(() => btn.classList.remove("add"), 100);
    }
}



