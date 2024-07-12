<?php require_once 'app/views/templates/header.php' ?>
<div style="display: flex; align-items: center; justify-content: center;"> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?=ucwords($_SESSION['controller']);?></li>
    </ol>
  </nav>
</div>
<h1>All Reminders</h1>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>User</th>
      <th>Subject</th>
      <th>Created At</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['reminders'] as $reminder) { ?>
    <tr>
      <td><?= htmlspecialchars($reminder['id']) ?></td>
      <td><?= htmlspecialchars($reminder['username']) ?></td>
      <td><?= htmlspecialchars($reminder['subject']) ?></td>
      <td><?= htmlspecialchars($reminder['created_at']) ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php require_once 'app/views/templates/footer.php' ?>