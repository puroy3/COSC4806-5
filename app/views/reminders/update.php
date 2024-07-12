<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="text-center">
    <div style="display: flex; align-items: center; justify-content: center;"> 
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=ucwords($_SESSION['controller']);?></li>
        </ol>
      </nav>
    </div>
    <h1 class="display-5">Update the reminder</h1>
  </div>
  <?php if (isset($data['reminderData'])): ?>
  <form action="/reminders/update/<?= htmlspecialchars($data['reminderData']['id']) ?>" method="post">
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input class="form-control" type="text" name="subject" id="subject" value="<?= htmlspecialchars($data['reminderData']['subject']) ?>" required>
</div>
    <br>
    <div class="text-center">
<button type="submit" class="btn btn-dark">Update</button>
    </div>
  </form>
  <?php else: ?>
  <p> Error: Reminder data missing.</p>
  <?php endif; ?>
</div>
<br>
<?php require_once 'app/views/templates/footer.php' ?>