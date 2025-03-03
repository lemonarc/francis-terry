document.addEventListener("DOMContentLoaded", function () {
    let container = document.getElementById("blog-posts");
    if (!container) return;
  
    let posts = Array.from(container.children);
    
    // Fisher-Yates Shuffle Algorithm
    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }
  
    shuffle(posts);
  
    // Clear the existing list and re-append shuffled items
    container.innerHTML = "";
    posts.forEach(post => container.appendChild(post));
});