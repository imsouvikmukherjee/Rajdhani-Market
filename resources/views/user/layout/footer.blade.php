  <!-- Bootstrap JS -->
  <script src="{{url('user-asset/js/bootstrap.bundle.min.js')}}"></script>
  <!-- jQuery -->
  <script src="{{url('user-asset/js/jquery.min.js')}}"></script>

  <script>
      // JavaScript to control the sidebar
      const toggleSidebar = document.getElementById('toggleSidebar');
      const sidebarMenu = document.getElementById('sidebarMenu');
      const overlay = document.getElementById('overlay');

      toggleSidebar.addEventListener('click', function () {
          sidebarMenu.classList.toggle('show');
          overlay.classList.toggle('show');
      });

      overlay.addEventListener('click', function () {
          sidebarMenu.classList.remove('show');
          overlay.classList.remove('show');
      });
  </script>

</body>

</html>
