
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-md-8" style="background-color:#344f9f;">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Accounts</h5>
                    <a href="{{url('accounts')}}" class="h2 font-weight-bold mb-0">{{$accounts->count()}}</a>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-key"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                      <!-- <a href="{{url('User')}}" class="h2 font-weight-bold mb-0">{{$user->membership==0?'Free':'Premium'}}</a> -->
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-collection"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>