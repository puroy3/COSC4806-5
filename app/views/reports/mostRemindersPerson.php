<?php require_once 'app/views/templates/header.php' ?>
<h1>User with the most reminders</h1>
<canvas id="mostRemindersPersonChart"></canvas>
<script>
  const ctx = document.getElementById('mostRemindersPersonChart');
  chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode(array_column($data['users'], 'username')) ?>,
      datasets: [{
        label: 'Number of reminders',
        data: <?= json_encode(array_column($data['users'], 'reminder_count')) ?>
          }]
    },
    options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
        }
      });
    </script>
    <?php require_once 'app/views/templates/footer.php' ?>