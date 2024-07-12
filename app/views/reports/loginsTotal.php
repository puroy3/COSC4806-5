<canvas id="loginsTotalChart"></canvas>
<script>
  const ctx = document.getElementById('loginsTotalChart');
  chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode(array_column($data['logins'], 'username')); ?>,
      datasets: [{
        label: 'Total Logins by Username',
        data: <?php echo json_encode(array_column($data['logins'], 'login_count')); ?>,
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