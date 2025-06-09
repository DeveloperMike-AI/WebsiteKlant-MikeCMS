        </main>
    </div>

    <script>
    // Toggle sidebar en overlay (mobiel)
    $('#toggleMenu').on('click', function () {
        $('#sidebar').toggleClass('hidden');
        $('#overlay').toggleClass('hidden');
        $('body').toggleClass('overflow-hidden');
    });

    // Sluit sidebar als overlay wordt geklikt
    $('#overlay').on('click', function () {
        $('#sidebar').addClass('hidden');
        $('#overlay').addClass('hidden');
        $('body').removeClass('overflow-hidden');
    });

    // Gebruikersdropdown toggle
    $('#userDropdownBtn').on('click', function () {
        $('#userDropdown').toggleClass('hidden');
    });

    // Klik buiten dropdown sluit hem
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#userDropdownBtn, #userDropdown').length) {
            $('#userDropdown').addClass('hidden');
        }
    });
    </script>

</body>
</html>
