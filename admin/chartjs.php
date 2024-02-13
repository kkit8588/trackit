<div>
  <canvas style="max-height: 500px;" id="myChart"></canvas>
</div>

<?php 
   include '../connect.php';
   $sql = "SELECT student_type, COUNT(*) AS count FROM report_tbl GROUP BY student_type";
   $result = $conn->query($sql);

   $employed = ['High School Graduate' => 0, 'Senior High School Graduate' => 0, 'College Graduate' => 0, 'ALS Graduate' => 0, 'Employed' => 0, 'Unemployed' => 0];
   
   while($row = $result->fetch_assoc()):
        $employed[$row['student_type']] = $row['count'];
   endwhile;
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx4 = document.getElementById('myChart4');

new Chart(ctx4, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode(array_keys($employed)); ?>,
    datasets: [{
      label: '# of Students',
      data: <?php echo json_encode(array_values($employed)); ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.8)',   // Color for 'High School Graduate'
        'rgba(255, 159, 64, 0.8)',  // Color for 'Senior High School Graduate'
        'rgba(255, 205, 86, 0.8)',  // Color for 'College Graduate'
        'rgba(75, 192, 192, 0.8)',  // Color for 'ALS Graduate'
        'rgba(54, 162, 235, 0.8)',  // Color for 'Employed'
        'rgba(153, 102, 255, 0.8)', // Color for 'Unemployed'
      ],
      borderWidth: 1
    }]
  },
  options: {
    indexAxis: 'y'
  }
});
</script>
