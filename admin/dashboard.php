<?php //include 'sessionLimit.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main class="content px-4 pt-4 pe-lg-5">
        <h4 class="my-1">Dashboard</h4>
        <div class="p-2 mt-4">
            <div id="cardDiv" class="row row-gap-3 mb-auto">
              
               <!-- Total Enrollees --> 
               <div class="col-12 col-lg-4">
                    <h5>Enrollees</h5>
                    <div class="shadow p-5">
                        <?php 
                           include '../connect.php';
                           $sql = "SELECT school_yr2, SUM(student_num2) AS total_students FROM enrolled_tbl GROUP BY school_yr2";
                           $result = $conn->query($sql);

                           $created_yr = [];
                           $total_students = [];

                           while($row = $result->fetch_assoc()):
                                $created_yr2[] = $row['school_yr2'];
                                $total_students2[] = $row['total_students'];
                           endwhile;
                        ?>
                        <canvas style="min-height: 200px; max-width: 500px;" id="myChart1"></canvas>
                    </div>
               </div>

               <!-- Total Graduates --> 
               <div class="col-12 col-lg-4">
                    <h5>Graduates</h5>
                    <div class="shadow p-5">
                        <?php 
                           $sql = "SELECT school_yr, SUM(student_num) AS total_students FROM graduates_tbl GROUP BY school_yr";
                           $result = $conn->query($sql);

                           $created_yr = [];
                           $total_students = [];

                           while($row = $result->fetch_assoc()):
                                $created_yr[] = $row['school_yr'];
                                $total_students[] = $row['total_students'];
                           endwhile;
                        ?>
                        <canvas style="min-height: 200px; max-width: 500px;" id="myChart2"></canvas>
                    </div>
               </div>

               <!-- Total Employability --> 
               <div class="col-12 col-lg-4">
                    <h5>Employability</h5>
                    <div class="shadow p-5">
                        <?php
                           $sql = "SELECT created_yr, employed, COUNT(*) AS count FROM report_tbl GROUP BY created_yr, employed";
                           $result = $conn->query($sql);

                           $data = [];
                           
                           while($row = $result->fetch_assoc()):
                                $data[$row['created_yr']][$row['employed']] = $row['count'];
                           endwhile;
                        ?>
                        <canvas style="min-height: 200px; max-width: 500px;" id="myChart3"></canvas>
                    </div>
               </div>

               <!-- Total of type of students --> 
               <div class="col-12">
                    <h5>Type of Students</h5>
                    <div class="shadow p-5">
                        <?php 
                           $sql = "SELECT student_type, COUNT(*) AS count FROM report_tbl GROUP BY student_type";
                           $result = $conn->query($sql);

                           $employed = ['High School Graduate' => 0, 'Senior High School Graduate' => 0, 'College Graduate' => 0, 'ALS Graduate' => 0, 'Employed' => 0, 'Unemployed' => 0];
                           
                           while($row = $result->fetch_assoc()):
                                $employed[$row['student_type']] = $row['count'];
                           endwhile;
                        ?>
                        <canvas class="w-100" style="height: 500px;" id="myChart4"></canvas>
                    </div>
               </div>

           </div>
        </div>
    </main>
    
</body>
    <?php include 'footer.php' ;?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Total Enrollees
    const ctx1 = document.getElementById('myChart1').getContext('2d');

    new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($created_yr2); ?>,
        datasets: [{
          label: 'Total Enrolled',
          data: <?php echo json_encode($total_students2); ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.8)',   
            'rgba(255, 159, 64, 0.8)',  
            'rgba(255, 205, 86, 0.8)', 
            'rgba(75, 192, 192, 0.8)', 
          ],
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

    // Total Graduates
    const ctx2 = document.getElementById('myChart2').getContext('2d');

    new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($created_yr); ?>,
        datasets: [{
          label: 'Total Graduates',
          data: <?php echo json_encode($total_students); ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.8)',   
            'rgba(255, 159, 64, 0.8)',  
            'rgba(255, 205, 86, 0.8)', 
            'rgba(75, 192, 192, 0.8)', 
          ],
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

    // Total Employability
    const ctx3 = document.getElementById('myChart3');

    const years = <?php echo json_encode(array_keys($data)); ?>;
    const yesCounts = <?php echo json_encode(array_column($data, 'Yes')); ?>;
    const noCounts = <?php echo json_encode(array_column($data, 'No')); ?>;

    new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: years,
        datasets: [{
          label: 'Yes',
          data: yesCounts,
          backgroundColor: 'rgba(255, 99, 132, 0.8)',
          borderWidth: 1
        }, {
          label: 'No',
          data: noCounts,
          backgroundColor: 'rgba(255, 159, 64, 0.8)',
          borderWidth: 1
        }]
      },
      options: {
        stacked: true
      }
    });

    //Type of Students
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
</html>
