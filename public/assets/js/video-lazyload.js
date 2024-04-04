document.addEventListener("DOMContentLoaded", function() {
    let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let video = entry.target;
                let dataSrc = video.querySelector('source').getAttribute('data-src');

                if (dataSrc) {
                    video.querySelector('source').src = dataSrc; // video.querySelector('source')
                    video.load();
                    video.play();
                }

                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: "0px",
        threshold: 0.1
    });

    document.querySelectorAll('video[video][lazyload]').forEach(video => {
        observer.observe(video);
    });
});