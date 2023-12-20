// JavaScript

// Mengambil semua elemen kartu (cards)
const cards = document.querySelectorAll('.card');

// Menambah event listener pada setiap kartu
cards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    const poster = card.querySelector('.poster');
    const details = card.querySelector('.details');

    // Menampilkan animasi pada hover
    poster.style.transform = 'scale(1.1)';
    details.style.bottom = '0';
  });

  card.addEventListener('mouseleave', () => {
    const poster = card.querySelector('.poster');
    const details = card.querySelector('.details');

    // Menghilangkan animasi pada hover
    poster.style.transform = 'scale(1)';
    details.style.bottom = '-100%';
  });
});
