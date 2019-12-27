@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>
        <div class="row mb-5">
          <div class="col-md-4">
            <div class="row mt-5">
                <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Morning Usage (08:00 - 11:00)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$mornings}}</div>
                      </div>
                      <div class="col-auto">
                        {{-- <i class="fas fa-clock fa-2x text-gray-300"></i> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Noon Usage (11:00 - 15:00)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$noons}}</div>
                      </div>
                      <div class="col-auto">
                        {{-- <i class="fas fa-clock fa-2x text-gray-300"></i> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Afternoon Usage (15:00 - 17:00)</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$afternoons}}</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        {{-- <i class="fas fa-clock fa-2x text-gray-300"></i> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-8">
          <canvas id="myChart" width="400" height="250"></canvas>
        </div>
    <!-- Content Row -->
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script>
      let meetings = {!! $meetings !!}
      let data = []
      let labels = []
      let colors = []
      function random_rgba() {
          var o = Math.round, r = Math.random, s = 255;
          return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
      }
      Object.keys(meetings).map(meeting => {
        labels.push(meetings[meeting][0].room.nama_ruangan)
        data.push(meetings[meeting].length)
        colors.push(random_rgba())
      })
      var ctx = document.getElementById('myChart');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels,
              datasets: [{
                  label: '# of Usages',
                  data,
                  backgroundColor: colors,
                  borderColor: colors,
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    </script>
@endpush