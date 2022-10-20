@extends('layouts.admin')

@section('title', '| Dashboard')

@section('content')
<style>
  .button-month:focus{
  background-color: blue;
  color:white;
  border: none;
  outline: none;
  border-radius: 2px;
  }
</style>

<div class="container-fluid py-4">
    <div class="row">
    <!-- <form action="{{ route('admin.profit') }}">
          <div class="box-inline mar-btm pad-rgt">
            {{ __('Ngày Bắt đầu') }}:
            <input class="form-control datepicker input-sm" type="text" id="start_date" name="start_date">
          </div>
          <div class="box-inline mar-btm pad-rgt">
            {{ __('Ngày Kết Thúc') }}:
            <input class="form-control datepicker input-sm" type="text" id="end_date" name="end_date"  >
          </div>
        <button class="btn btn-lg btn-block btn-primary btn-h1-spacing" type="submit">{{ __('Search') }}</button>
      </form>
      <br> -->
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <p class="mb-0" style="font-size: 18px;
                                    color: aliceblue;
                                    margin-top: 16px;
                                    margin-right: 7px;">Tháng</p>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Lợi nhuận</p>
              
                <h4 class="mb-0">{{ number_format($total_final) }}đ</h4>
              
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <!-- <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week</p>
          </div> -->
          <div class="card-footer p-3">
            <div class="row">
              <div class="col-md-6 " style="text-align: center;">
                <!-- <button class="button-month" onClick="handleClick('thang_loi_nhuan')">Tháng</button> -->
              </div>
              <div class="col-md-6" style="text-align: center;">
                
              </div>
            </div>          
          </div>
        </div>
      </div>
      {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">New Clients</p>
              <h4 class="mb-0">3,462</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
          </div>
        </div>
      </div> --}}
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <p class="mb-0" style="font-size: 18px;
                                    color: aliceblue;
                                    margin-top: 16px;
                                    margin-right: 7px;">Tháng</p>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Doanh thu</p>
              <h4 class="mb-0">{{number_format($sumtotal)}}đ</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
            <div class="row">
              <div class="col-md-6 " style="text-align: center;">
                <button class="button-month" onClick="handleClick('Thang')">Tháng</button>
              </div>
              <div class="col-md-6" style="text-align: center;">
                <button class="button-month" onClick="handleClick('Quy')">Quý</button>
              </div>
            </div>          
          </div>
        </div>
      </div>
      {{-- <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
           
            <div class="text-end pt-1">
              
            </div>
          </div>          
      </div> --}}
    </div>
    <div class="row mt-4">
      <div class="col-lg-4 col-md-6 mt-4 mb-4" style="display: none">
        <div class="card z-index-2  ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas" height="170">
                </canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 "> Doanh thu tuần này </h6>
            {{-- <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p> --}}
            <hr class="dark horizontal">
            <div class="d-flex ">
              {{-- <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm"> updated 4 min ago </p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Lợi nhuận tháng</h6>
            {{-- <p class="text-sm ">Last Campaign Performance</p> --}}
            <hr class="dark horizontal">
            <div class="d-flex ">
              {{-- <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4 mb-3">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Doanh thu tháng</h6>
            {{-- <p class="text-sm ">Last Campaign Performance</p> --}}
            <hr class="dark horizontal">
            <div class="d-flex ">
              {{-- <i class="material-icons text-sm my-auto me-1">schedule</i>
              <p class="mb-0 text-sm">just updated</p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection 

@section('scripts')

<script>
  var week = document.getElementById("chart-bars").getContext("2d");

  new Chart(week, {
    type: "bar",
    data: {
      labels: ["M", "T", "W", "T", "F", "S", "Su"],
      datasets: [{
        label: "Week",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [0, 0, 0, 0, 0, 0, 0],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });


  var month = document.getElementById("chart-line").getContext("2d");
  let config = (labels,data) => {
   return {
    type: "line",
    data: {
      labels,
      datasets: [{
        label: "Month",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data,
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    }
    }
  }
  var chart = null;
  let handleClick = (state ='Thang') => {
    let labels = null,
    data =  null;
    if(state ==='Thang'){
      labels = ["Tư", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười Một", "Mười Hai"];
      data = [0, 0, 0, 0, 0, 0,{{$sumtotal}}, 0, 0];
    }
    else {
      labels = ["Quý 1", "Quý 2", "Quý 3", "Quý 4"];
      data = [0, 0, 0, {{$sumtotal}}];
    }
    if(chart) {
      chart.destroy();
    }
     chart = new Chart(month, config(labels, data));
  }
  handleClick();

  var monthP = document.getElementById("chart-line-tasks").getContext("2d");

  new Chart(monthP, {
    type: "line",
    data: {
      labels: ["Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười Một", "Mười Hai"],
      datasets: [{
        label: "Month Profit",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [0, 0, 0, 0, 0, 0, {{$total_final}}, 0, 0],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#f8f9fa',
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

  $(function(){
        $('#end_date').datepicker({
            dateFormat: 'yy-mm-dd',
        })
        .on('dp.change',function(ev){
            var data = $('#end_date').val();
            $this.set('end_date',data);
        })
    }); 
    $(function(){
        $('#start_date').datepicker({
            dateFormat: 'yy-mm-dd',
        })
        .on('dp.change',function(ev){
            var data = $('#start_date').val();
            $this.set('start_date',data);
        })
    });  
</script>

@endsection