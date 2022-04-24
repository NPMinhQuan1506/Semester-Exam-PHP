<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Market online</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Vegetable</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <?php
         if (isset($_SESSION['customer_id']) && isset($_SESSION['customer_name'])) {
          $customer_name = $_SESSION['customer_name'];
          echo '<li class="nav-item">';
          echo '<a class="nav-link" href="#">History</a>';
          echo '</li>';
          echo '<li class="nav-item">';
          echo ' <a class="nav-link" href="#">Logout</a>';
          echo '</li>';
          echo '<button type="button" class="btn btn-info">'.$customer_name.'</button>';
         }
      ?>
    </ul>
  </div>
</nav>