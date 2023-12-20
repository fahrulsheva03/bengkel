    function performSearch() {
        // Get the input value
        var searchInput = document.getElementById('search').value.toLowerCase();
        
        var workshopTitles = document.querySelectorAll('.feature-title h5');

        workshopTitles.forEach(function(title) {
            var workshopName = title.textContent.toLowerCase();
            var parentElement = title.closest('.single-features-area');

            if (workshopName.includes(searchInput)) {
                parentElement.style.display = 'block'; 
            } else {
                parentElement.style.display = 'none'; 
            }
        });
    }

    document.getElementById('search').addEventListener('input', performSearch);

