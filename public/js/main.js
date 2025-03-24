window.addEventListener('DOMContentLoaded', () => {

    // HEADER FIXED

    let headerSection1 = document.getElementById('header-section');
    let headerSection2 = document.getElementById('header-section-2');
    let heroSection = document.getElementById('hero-section');

    let currentScrolled;
    let ticking = false; // Flag untuk memastikan hanya satu requestAnimationFrame aktif

    const handleScroll = () => {
        let windowScrolled = window.scrollY;

        if (windowScrolled > 100) {
            heroSection.style.marginTop = '100px';

            if (windowScrolled < currentScrolled) {
                headerSection2.classList.add('show');
            } else {
                headerSection2.classList.remove('show');
            }

            headerSection1.classList.add('hide');
            currentScrolled = windowScrolled;
        } else {
            setTimeout(() => {
                heroSection.style.marginTop = '0';
                headerSection1.classList.remove('hide');
            }, 20);
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
