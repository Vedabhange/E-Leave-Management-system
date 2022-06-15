<style>

</style>


<div class="w3-sidebar " style="text-align:center;width:15%;background-color: #4BAE55;">
  <br>
  <h3 class="w3-bar-item">Employee Login</h3>

    <br>

  <a href="Profile.php">
  <?php
echo  "<img src='..\image_emp\\".$_SESSION['image']."'  width=200' height='133' style='border-radius: 50px 10px;'>" ;
  //<img src="layout\image\profile3.png" width="200" height="133" style="border-radius: 50px 10px;">
?></a>
  <br>

  <label for="exampleInput1" class="bmd-label-floating"><?php echo $_SESSION['emp_name']; ?></label>
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
  <a href="Leave_balance.php" class="w3-bar-item w3-button">Leave Balance</a>
  </button>
  <hr>
  <button>
  <a href="Calendar.php" class="w3-bar-item w3-button">Calendar</a>
  </button>
  <hr>
  <button>
  <a href="Leavepolicy.php" class="w3-bar-item w3-button">Company Leave Policy</a>
  </button>
  <hr>
  <button>
 <a href="Applyleave.php" class="w3-bar-item w3-button">Apply Leave</a>
 </button>
 <hr>
 <button>
  <a href="Leavetransactions.php" class="w3-bar-item w3-button">My Leave Transactions accept</a>
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
