@extends('layouts.layouts')

@push('css')
<style>
    
    .nav-link{
        font-weight: bolder;
    }
    .todo-list > li {
        border-radius: 2px;
        padding: 10px;
        background: #f4f4f4;
        border-left: 2px solid #e6e7e8;
        color: #444;
        list-style: none;
        margin: 1px;
}
    }
</style>
@endpush

@section('content')
<div class="container-fluid mt--7" style="background-color:powderblue;">

  
  <br>
  <br><br>
  <br>
      
       
     
      </div>

</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    function startTime() {
        var today=new Date(),
        curr_hour=today.getHours(),
        curr_min=today.getMinutes(),
        curr_sec=today.getSeconds();
        curr_hour=checkTime(curr_hour);
        curr_min=checkTime(curr_min);
        curr_sec=checkTime(curr_sec);
        document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
    }
    function checkTime(i) {
        if (i<10) {
            i="0" + i;
        }
        return i;
    }
    setInterval(startTime, 500);
</script>
    
@endpush