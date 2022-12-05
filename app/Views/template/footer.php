<footer>
    <div class="copyrights">
        <p>&copy; <?= date('Y') ?> Luis A. Duran. CRUD elaborado para la materia de Programación Web II.</p>
    </div>
</footer>
</body>
<!-- SCRIPTS -->
<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>
</html>