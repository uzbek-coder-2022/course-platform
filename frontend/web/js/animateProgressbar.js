function animateProgressBar(bar, target) {
    let current = 0;
    const interval = setInterval(() => {
        current++;
        bar.style.width = current + "%";
        bar.innerText = current + "%";
        if (current >= target) {
            clearInterval(interval);
        }
    }, 15);
}

document.addEventListener("DOMContentLoaded", () => {
    const bars = document.querySelectorAll('.progress-bar');

    bars.forEach(bar => {
        const percent = parseInt(bar.getAttribute('data-percent'));
        bar.style.width = "0%";
        bar.innerText = "0%";
        animateProgressBar(bar, percent);
    });
});
