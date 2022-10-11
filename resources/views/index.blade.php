@extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')




<div class="row">
    <div class="col-12">
       
     
			<h5 style="color: #000E42;">System Statistics</h5>
			
			
						<div class="row">
						
							<div class="col-lg-5">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="{{ url('admin/users') }}"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">TOTAL USERS</h5></a>
										  <a href="{{ url('admin/users') }}"><p class="card-text" style="font-size: x-large; color: lightgrey;">{{$count}}5623623</p></a>
                                    </div>
                                    
                                </div>
                            </div>
							<div class="col-lg-5">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href=""><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">TIEC CARDS ORDERED</h5></a>
										 <a href=""><p class="card-text" style="font-size: x-large; color: lightgrey;">0</p></a>
                                    </div>
                                    
                                </div>
                            </div>
					    </div>
						
</div>
</div>
<hr></hr>
 <h4>NEW USERS OVER TIME</h4>
 <hr></hr>
<div class="row">
 <div class="card-body">
<canvas id="bar-chart" width="300" height="100"></canvas>
</div>
</div>


<!-- end row -->

<!-- end row -->


@endsection

@section('script')

<script src="{{ URL::asset('assets/js/pages/charts.js')}}"></script>
<script>
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
	beginAtZero: true,
    data: {
      labels: <?=$month?>,
      datasets: [
        {
          label: "Registerd users",
          backgroundColor: <?=$color?>,
          data: <?=$data?>
        }
      ]
    },
    options: {
      legend: { display: false },
	  scales: {
        	yAxes: [{
            	ticks: {
                	beginAtZero: true
            	}
        	}]
    	},
      title: {
        display: true,
        text: 'NEW USERS'
      },
	 
    }
});
</script>
@endsection
