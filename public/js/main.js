document.addEventListener('DOMContentLoaded', () => {

    // HEADER FIXED
    let headerSection2 = document.getElementById('header-section-2');
    let currentScrolled = 0; // Pastikan nilai awal adalah angka
    let ticking = false; // Flag untuk memastikan hanya satu requestAnimationFrame aktif

    const handleScroll = () => {
        let windowScrolled = window.scrollY;

        // Cek apakah sudah melewati batas scroll tertentu
        if (windowScrolled > 90) {
            if (windowScrolled < currentScrolled) {
                if (!headerSection2.classList.contains('show')) {
                    headerSection2.classList.add('show');
                }
            } else {
                if (headerSection2.classList.contains('show')) {
                    headerSection2.classList.remove('show');
                }
            }
        } else {
            if (headerSection2.classList.contains('show')) {
                headerSection2.classList.remove('show');
            }
        }

        currentScrolled = windowScrolled;
        ticking = false; // Reset flag setelah fungsi selesai dieksekusi
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(handleScroll); // Optimasi performa dengan requestAnimationFrame
        }
    });

});
