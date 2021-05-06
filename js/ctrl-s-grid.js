const performWhenDocumentIsLoaded = callback => {
	if (/comp|inter|loaded/.test(document.readyState))
		cb();
	else
		document.addEventListener('DOMContentLoaded', callback, false);
}

performWhenDocumentIsLoaded(() => {
    const gallery = document.querySelector('.ctrl_s_atlas');
    const galleryForeground = document.querySelector('.wp-block-getwid-section__foreground');
    let isGalleryVisibileOnScreen = false;

    function handleIntersection(entries) {
        entries.map((entry) => {
            isGalleryVisibileOnScreen = entry.isIntersecting;
        });
    }

    if (gallery&& galleryForeground) {

        const observer = new IntersectionObserver(handleIntersection);
        observer.observe(gallery);

        let updatesCounter = 0;
        function updateMousePosition (mouseEvent) {
            if (isGalleryVisibileOnScreen) {
                updatesCounter++;
                
                const x = mouseEvent.pageX,
                    y = mouseEvent.pageY,
                    scrollY = gallery.offsetTop;
                
                if ( updatesCounter >= 5 && (x !== 0 || y !== 0) ) {
                    galleryForeground.style.setProperty('clip-path', 'circle(100px at ' + x + 'px ' + (y - scrollY) + 'px)');
                    
                    updatesCounter = 0;
                }
            }
        }

        window.onmousemove = updateMousePosition;
    }
});
