<?php require_once 'app/views/templates/header.php' ?>
<div style="display: flex; align-items: center; justify-content: center;"> 
<h1>Total logins by username report</h1>
</div>
<div style="display: flex; justify-content: center;">
  <div style="width: 2000px; height 2000px;">
<canvas id="loginsTotalChart"></canvas>
  </div>
</div>
<script>
  const ctx = document.getElementById('loginsTotalChart');
  chart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: <?php echo json_encode(array_column($data['logins'], 'username')); ?>,
      datasets: [{
        label: 'Total Logins',
        data: <?php echo json_encode(array_column($data['logins'], 'login_count')); ?>,
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      reponsive: true
    }
  });
</script>
<?php require_once 'app/views/templates/footer.php' ?>