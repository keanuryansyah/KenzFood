window.addEventListener('DOMContentLoaded', () => {

    // HEADER FIXED

    let headerSection2 = document.getElementById('header-section-2');

    let currentScrolled;
    let ticking = false; // Flag untuk memastikan hanya satu requestAnimationFrame aktif

    const handleScroll = () => {
        let windowScrolled = window.scrollY;

        if (windowScrolled > 100) {
            if (windowScrolled < currentScrolled) {
                headerSection2.classList.add('show');
            } else {
                headerSection2.classList.remove('show');
            }

            currentScrolled = windowScrolled;
        } else {
            headerSection2.classList.remove('show');
            currentScrolled = '';
        }

        ticking = false; // Reset flag setelah fungsi selesai dieksekusi
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(handleScroll); // Optimasi performa dengan requestAnimationFrame
        }
    });
});
