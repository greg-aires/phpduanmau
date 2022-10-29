<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .chartCard {
      /* width: 100vw; */
      /* height: calc(100vh - 40px); */
      height: 500px;
      display: flex;
      align-items: center;
      /* justify-content: center; */

    }

    .chartBox {
      width: 700px;
      padding: 20px;
      border-radius: 20px;
      border: solid 3px rgb(0, 0, 2);
      background: white;
    }
  </style>
</head>

<body>
  <div class="c-9 col">
    <div class="header__search">
      <form action="#">
        <div class="header__search-group">
          <div class="fa-solid fa-bars" id="btn-menu"></div>
          <div class="admin__user">
            <div class="image__user"></div>
            <div class="name__user">hominhthanh</div>
          </div>
          <div class="search__group-form">
            <input type="text" placeholder="Search here ....">
            <button>
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-12 display__item">
      <h2 class="title">
        Chart
      </h2>

      <!-- biểu đồ biểu thị doanh thu -->
      <div class="chartCard">
        <p></p>
        <div class="chartBox">
          <canvas id="myChart">
          </canvas>
          <h3 style="text-align: center;">Biểu đồ biểu thị doanh thu trong năm</h3>
        </div>
      </div>
    </div>
  </div>



</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // setup 
  const data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
        label: 'Red Line',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          // 'rgba(54, 162, 235, 0.2)',
          // 'rgba(255, 206, 86, 0.2)',
          // 'rgba(75, 192, 192, 0.2)',
          // 'rgba(153, 102, 255, 0.2)',
          // 'rgba(255, 159, 64, 0.2)',
          // 'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          // 'rgba(54, 162, 235, 1)',
          // 'rgba(255, 206, 86, 1)',
          // 'rgba(75, 192, 192, 1)',
          // 'rgba(153, 102, 255, 1)',
          // 'rgba(255, 159, 64, 1)',
          // 'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 3,
        type: 'bar'
        // tension: 0.25,
      },
      {
        label: 'Weekly Sales',
        data: [9, 15, 12, 6, 15, 8, 3],
        backgroundColor: [
          // 'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          // 'rgba(255, 206, 86, 0.2)',
          // 'rgba(75, 192, 192, 0.2)',
          // 'rgba(153, 102, 255, 0.2)',
          // 'rgba(255, 159, 64, 0.2)',
          // 'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          // 'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          // 'rgba(255, 206, 86, 1)',
          // 'rgba(75, 192, 192, 1)',
          // 'rgba(153, 102, 255, 1)',
          // 'rgba(255, 159, 64, 1)',
          // 'rgba(0, 0, 0, 1)'
        ],
        // borderWidth: 3
        tension: 0.4,
        type:'line'
      }
    ]
  };

  // config 
  const config = {
    
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // render init block
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</html>