document.addEventListener('DOMContentLoaded', function() {
    var mapUrls = {
        'maps1': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.74339991647!2d119.43546537423568!3d-5.144952952016806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b44a6c4473%3A0x8380f1e9c082b53!2sBengkel%20Mahaputra!5e0!3m2!1sen!2sid!4v1701944156193!5m2!1sen!2sid',
        'maps2': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5766459402616!2d119.44781277423589!3d-5.17158785221455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2f0fb7efb91%3A0x3e400b6313a07464!2sBengkel%20Motor%20Sanjaya!5e0!3m2!1sen!2sid!4v1701944182026!5m2!1sen!2sid',
        'maps3': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089323791!2d119.4782099737319!3d-5.140356638642482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1701944208974!5m2!1sen!2sid',
        'maps4': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089323791!2d119.4782099737319!3d-5.140356638642482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1701944208974!5m2!1sen!2sid',
        'maps5': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089323791!2d119.4782099737319!3d-5.140356638642482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1701944208974!5m2!1sen!2sid',
        'maps6': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.772089323791!2d119.4782099737319!3d-5.140356638642482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1701944208974!5m2!1sen!2sid',
        
    };

    function displayMap(event) {
        event.preventDefault();

        var mapId = this.id; 

        var mapUrl = mapUrls[mapId] || 'https://DEFAULT-PETA';

        var mapContent = '<iframe src="' + mapUrl + '" width="349.99px" height="524.719px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        var backButton = '<a href="#" class="back-button">return</a>';

        var parentFeatureArea = this.closest('.single-features-area');
        var previousContent = parentFeatureArea.innerHTML;

        parentFeatureArea.innerHTML = mapContent + backButton;

        var backBtn = parentFeatureArea.querySelector('.back-button');

        backBtn.addEventListener('click', function(e) {
            e.preventDefault();
            parentFeatureArea.innerHTML = previousContent;

            // Panggil fungsi untuk menambahkan kembali event listener setelah mengklik 'return'
            attachMapListeners();
        });
    }

    function attachMapListeners() {
        var mapIcons = document.querySelectorAll('.ratings-map-area a');

        mapIcons.forEach(function(mapIcon) {
            mapIcon.addEventListener('click', displayMap);
        });
    }

    // Panggil fungsi untuk melekatkan event listener pada ikon-ikon map saat DOM dimuat
    attachMapListeners();
});
