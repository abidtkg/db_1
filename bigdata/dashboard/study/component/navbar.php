<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #252936">
  <a class="navbar-brand" href="#">
    <img src="../../assets/img/box.svg" height="25px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../invoices">Invoices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Spending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../study">Study</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Support</a>
          <a class="dropdown-item" href="#">Developer</a>
          <a class="dropdown-item" href="#">Account & Security</a>
          <div class="dropdown-divider"></div>
          <form action="../../inc/logout.php" method="POST">
            <button name="logout" class="dropdown-item" href="#"><i class="fas fa-running"></i> Logout</button>
          </form>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>