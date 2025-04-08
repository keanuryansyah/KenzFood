document.addEventListener('DOMContentLoaded', () => {

    // HEADER FIXED
    let headerSection2 = document.getElementById('header-section-2');
    let currentScrolled = 0; // Pastikan nilai awal adalah angka
    let reqAnFrame = false; // Flag untuk memastikan hanya satu requestAnimationFrame aktif

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
        reqAnFrame = false; // Reset flag setelah fungsi selesai dieksekusi
    };

    window.addEventListener('scroll', () => {
        if (!reqAnFrame) {
            reqAnFrame = true;
            requestAnimationFrame(handleScroll); // Optimasi performa dengan requestAnimationFrame
        }
    });

});
