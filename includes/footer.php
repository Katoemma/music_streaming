    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2023 Audio Cloud App. All rights reserved.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script>
    function changeElementAttribute(mediaQuery) {
      var element = document.querySelector('.mySwiper');
      if (mediaQuery.matches) {
        // Change attribute when media query matches
        element.setAttribute('slides-per-view','1');
      } else {
        // Revert attribute when media query doesn't match
        element.setAttribute('slides-per-view','4');
      }
    }

    var mediaQuery = window.matchMedia('(max-width: 768px)');

    // Call the function on page load
    changeElementAttribute(mediaQuery);

    // Call the function whenever the screen size changes
    mediaQuery.addEventListener('change', changeElementAttribute);
  </script>
  <!-- JavaScript code to toggle mobile menu -->
  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>

