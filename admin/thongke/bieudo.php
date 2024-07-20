<div class="row">
    <div class="row frmtitle">
      <h1>BIỂU ĐỒ</h1>
    </div>
    <div class="row fromconten ">
      <div
              id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
      </div>

      <script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// // Set Data
// const data = google.visualization.arrayToDataTable([
//   ['Contry', 'Mhl'],
//   ['Italy',55],
//   ['France',49],
//   ['Spain',44],
//   ['USA',24],
//   ['Argentina',15]
// ]);
const data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng'],
            <?php 
            foreach ($dsthongke as $thongke) {
              extract($thongke);
              echo "['$name', $soluong],";
            }
            ?>
          ]);

// Set Options
          const options = {
            title:'Biểu Đồ Sản Phẩm Số Lượng Trong Danh Mục',
            is3D:true
          };

// Draw
const chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</body>

  </div>
  </div>