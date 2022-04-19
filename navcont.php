<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="contact.php">Contact list</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex">
      <a href="profil.php"class="navbar-brand"><?php session_start(); echo $_SESSION['name'];?> </a>
            <a href="contact.php"class="navbar-brand">Contacts</a>
            <a href="index.php" class="navbar-brand">Logout</a>
      </form>
    </div>
  </div>
</nav>