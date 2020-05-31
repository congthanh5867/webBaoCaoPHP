<div class="container-fluid">
        <div class="container">
            <footer>
                <p>CopyRight by Congthanh97 5/2020</p>
            </footer>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.sidebar-left2 .sidebar-menu li.has-child > a .icon').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('menu-open').next('ul').slideToggle();
            });
        })
    </script>
    <script src="frontEnd/js/jquery.min.js"></script>
    <script src="frontEnd/js/scriptApp.js"></script>
    <script src="frontEnd/js/bootstrap.min.js"></script>
</body>

</html>