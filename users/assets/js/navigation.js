// Ambil semua tautan di navbar
const navLinks = document.querySelectorAll('.navbar .nav-link');

// Loop melalui setiap tautan
navLinks.forEach(link => {
    // Tambahkan event listener untuk setiap tautan
    link.addEventListener('click', function() {
        // Hapus kelas 'active' dari semua tautan
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
        // Tambahkan kelas 'active' ke tautan yang sedang diklik
        this.classList.add('active');
    });
});

// Cek URL halaman saat ini
const currentPageUrl = window.location.href;

// Loop melalui setiap tautan dan periksa URL untuk menetapkan tautan yang aktif
navLinks.forEach(link => {
    if (link.href === currentPageUrl) {
        link.classList.add('active');
    }
});
