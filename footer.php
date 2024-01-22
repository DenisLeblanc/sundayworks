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

        window.addEventListener('load', function() {
            var windowHeight = window.innerHeight;
            var mainHeight = document.getElementById('main').offsetHeight;

            if (windowHeight > mainHeight) {
                var siteFooter = document.querySelector('.site_footer');
                siteFooter.style.position = 'fixed';
                // siteFooter.style.bottom = 0;
            }

            setTimeout(function(){
                // This hides the address bar:
                window.scrollTo(0, 1);
            }, 0);
        });


    </script>

</body>
</html>