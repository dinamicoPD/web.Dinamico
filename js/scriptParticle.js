const particle = document.querySelector(".particle");

document.addEventListener("mousemove", (e) => {

    const mouseX = e.clientX;
    const mouseY = e.clientY;

    particle.style.transition = "transform 1s";
    particle.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
});

particle.addEventListener("transitionend", () => {
    particle.style.transition = "none";
});