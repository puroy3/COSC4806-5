<?php require_once 'app/views/templates/header.php' ?>
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