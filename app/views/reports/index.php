<?php require_once 'app/views/templates/header.php' ?>
<div style="display: flex; align-items: center; justify-content: center;"> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?=ucwords($_SESSION['controller']);?></li>
    </ol>
  </nav>
</div>
<div style="display: flex; align-items: center; justify-content: center;">
<h1>Reports</h1>
  </div>
<div style="display: flex; align-items: center; justify-content: center;">
<ul class="list-group">
  <li class="list-group-item"><a href="reports/everyReminder">View all reminders</a></li>
    <li class="list-group-item"><a href="reports/mostRemindersPerson">View the user with the most reminders</a></li>
      <li class="list-group-item"><a href="reports/loginsTotal">View how many total logins by username</a></li>
</ul>
</div>
</div>
        
<?php require_once 'app/views/templates/footer.php' ?>