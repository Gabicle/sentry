<!--left navigational bar-->
<div class="left_nav">
  <i class="fas fa-home fa-4x"></i>
  <li><?php echo $data['user']->FIRST_NAME; ?>'s Home</li>
  <br>

  <li><a href="<?php echo URLROOT; ?>/dashboard/room">Rooms</a></li>

  <br>
  <br>
  <li>--------</li>
    <li><a href="<?php echo URLROOT; ?>/rooms/newroom">Add New Room</a></li>
    <li><a href="<?php echo URLROOT; ?>/users/setting">Settings</a></li>
    </div>