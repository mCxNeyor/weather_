{{-- <div>
    <div class="container">
        <h1 class="mt-4 mb-4 text-center">Weather Station</h1>
        <div class="card"><div class="card-head"><p><h3>current data</h3></p></div>
    <div class="card-body"> <livewire:table/>  </div>
    </div>



   </div>
</div> --}}


<div class="container" >
    <h1 class="mt-4 mb-4 text-center">Weather Station</h1>

    <!-- First row with two columns -->
    <div class="row">
        <div class="row">
            <div class="col-lg-4  mb-3  d-flex">
              <!-- Livewire component -->
              <div class="card custom-card">
                <div class="card-body">
                  <h5 class="card-title">Live data</h5>
                  <livewire:table />
                </div>
              </div>
            </div>

            <div class="col-lg-8 mb-3 d-flex">
              <!-- Additional content -->
              <div class="card custom-card flex-fill">
                <div class="card-body">
                  <h5 class="card-title">Wind Pattern</h5>
                  <livewire:wind-direction />
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-- Second row below the first row -->
    <div class="row">
          <div class="col-lg-12">
        <!-- Custom card -->
        <div class="card custom-card">
          <div class="card-body">
            <h5 class="card-title">latest data gauge</h5>
            <livewire:gauge-charts />
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
      <!-- Custom card -->
      <div class="card custom-card">
        <div class="card-body">
          <h5 class="card-title">All records</h5>
          <livewire:page />
        </div>
      </div>
    </div>
  </div>
  </div>
