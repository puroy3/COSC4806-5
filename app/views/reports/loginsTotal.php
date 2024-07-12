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
<h1>Total logins by username report</h1>
</div>
<canvas id="loginsTotalChart"></canvas>
<script>
  const ctx = document.getElementById('loginsTotalChart');
  chart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode(array_column($data['logins'], 'username')); ?>,
      datasets: [{
        label: 'Total Logins',
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
<?php require_once 'app/views/templates/footer.php' ?>