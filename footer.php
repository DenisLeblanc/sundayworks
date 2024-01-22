        <footer class="site_footer">
            <div class="gradient"></div>
            <div class="copyright_wrap">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All rights reserved.</p>
            </div>
        </footer>
    
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