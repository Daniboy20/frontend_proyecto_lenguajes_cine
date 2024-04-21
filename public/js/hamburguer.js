const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const closeBtn = document.getElementById('close-btn');
        menuBtn.addEventListener('click', function() {
            sidebar.style.right = sidebar.style.right === '-250px' ? '0' : '-250px';
        });
        closeBtn.addEventListener('click', function() {
            sidebar.style.right = '-250px';
        });
        document.body.addEventListener('click', function(event) {
        
            if (event.target !== sidebar && event.target !== menuBtn && !sidebar.contains(event.target)) {
                sidebar.style.right = '-250px';
            }
        });