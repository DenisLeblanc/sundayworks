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

        /* https://github.com/scottjehl/Hide-Address-Bar */

/*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
(function( win ){
	var doc = win.document;
	
	// If there's a hash, or addEventListener is undefined, stop here
	if( !location.hash && win.addEventListener ){
		
		//scroll to 1
		win.scrollTo( 0, 1 );
		var scrollTop = 1,
			getScrollTop = function(){
				return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
			},
		
			//reset to 0 on bodyready, if needed
			bodycheck = setInterval(function(){
				if( doc.body ){
					clearInterval( bodycheck );
					scrollTop = getScrollTop();
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
				}	
			}, 15 );
		
		win.addEventListener( "load", function(){
			setTimeout(function(){
				//at load, if user hasn't scrolled more than 20 or so...
				if( getScrollTop() < 20 ){
					//reset to hide addr bar at onload
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
				}
			}, 0);
		}, false );
	}
})( this );


    </script>

</body>
</html>