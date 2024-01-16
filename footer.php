    </main>

    <script> 
        // just plain javascript!!!
        // Found on https://codepen.io/bradtraversy/pen/odmVYB
        var slidingMenu = function() {
            var menuToggle = document.querySelector('.slide-nav-toggle');
            var body       = document.body;
            menuToggle.addEventListener('click', function(ev) {
                ev.preventDefault();
                body.classList.toggle('menu-active');
                this.classList.toggle('active');
            });
        }
        slidingMenu();
    </script>

</body>
</html>