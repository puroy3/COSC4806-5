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
<h1>User with the most reminders report</h1>
</div>
<div style="display: flex; justify-content: center;">
  <div style="width: 500px; height: 500px;">
    <canvas id="mostRemindersPersonChart"></canvas>
</div>
</div>
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
        maintainAspectRatio: false,
        reponsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
        }
      });
    </script>
    <?php require_once 'app/views/templates/footer.php' ?>