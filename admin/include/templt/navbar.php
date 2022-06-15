<style>

</style>


<div class="w3-sidebar " style="text-align:center;width:15%;background-color: #4BAE55;">
  <br>
  <h3 class="w3-bar-item">admin Login</h3>

    <br>

  <br>

  <label for="exampleInput1" class="bmd-label-floating"><?php echo  $_SESSION['admin_name']; ?></label>
  <br>
  <br>

  <button>
  <a href="MainPage.php" class="w3-bar-item w3-button">Home</a>
  </button>
    <hr>
  <button>
  <a href="MyProfile.php" class="w3-bar-item w3-button">My Profile</a>
  </button>
  <hr>
  <button>
  <a href="manga.php" class="w3-bar-item w3-button">insert emplooy</a>
  </button>
  <hr>
  <button>
  <a href="manga.php?do=update" class="w3-bar-item w3-button">update emplooy</a>
  </button>
  <hr>
  <button>
  <a href="manga.php?do=delete" class="w3-bar-item w3-button">delete emplooy</a>
  </button>
  <hr>
   <button>
  <a href="Aboutus.php" class="w3-bar-item w3-button">About us</a>
   </button>
   <hr>
   <button>
   <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
   </button>

</div>
