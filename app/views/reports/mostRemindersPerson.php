<?php require_once 'app/views/templates/header.php' ?>
<div style="display: flex; align-items: center; justify-content: center;"> 
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?=ucwords($_SESSION['controller']);?></li>
    </ol>
  </nav>
</div>
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
        data: <?= json_encode(array_column($data['users'], 'reminder_count')) ?>,
        borderWidth: 1
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