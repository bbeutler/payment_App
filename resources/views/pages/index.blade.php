<!DOCTYPE html>
<html>
<head>
	<title>Currency Converter App</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<style type="text/css">
		body{

			font-family: 'Lato', sans-serif;
		}
	</style>
</head>
<body class="bg-light">

	

	<section>
	

		<div class=" mb-5">
			
			<div class="offset-md-2 col-md-8 offset-md-2 border border-light p-5 bg-white">

				<div class="error-div">
					
					@if(Session::has('error'))

                            <div class="alert alert-danger">
                                    
                                 {{Session::get('error')}}
                                    
                            </div>

                    @endif

                    @if($errors->any())
                        <div class="alert alert danger">
                            <ul>
                                @foreach($errors->all() as $error)

                                	<div class="alert alert-danger">
                                		
                                   		 <li>{{ $error }}</li>

                                	</div>

                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <header>

							<ul class="nav">
								 <li class="nav-item">
								    <img src="{{asset('img/sprout-logo-new.png')}}" >
								 </li>
								 
							</ul>
				
					</header>
				</div>
				
				

				<form method="POST" action="{{url('/save')}}">

					@csrf

					<div class="row">
						
						<div class="col">
							<div class="form-group mt-5">
							    <label for="exampleInputEmail1" class="font-weight-bold">First Name</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName" value="{{old('firstName')}}">
							
							</div>
						</div>

						<div class="col">
							<div class="form-group mt-5">
							    <label for="exampleInputEmail1" class="font-weight-bold">Last Name</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastName" value="{{old('lastName')}}">
							</div>
						</div>

					</div>


					<div class="row">
						
						<div class="col">
							<div class="form-group mt-3">
							    <label for="exampleInputEmail1" class="font-weight-bold">Email address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
							    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
						</div>

						<div class="col">
							<div class="form-group mt-3">
							    <label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phoneNumber" value="{{old('phoneNumber')}}">
							</div>
						</div>

					</div>

					
					<div class="form-group">
					    <label for="exampleInputPassword1" class="font-weight-bold">Amount (USD)</label>
					    <input type="number" class="form-control" id="amount_to_change" name="amount" placeholder="Amount to Safevest in USD" value="{{old('amount')}}">
					</div>


					<div class="form-group">
					    <label for="exampleFormControlSelect1" class="font-weight-bold"> Payment Currency</label>
					    <select class="form-control" id="myselect" name="currency" >
					      <option value="NGN">NGN</option>
					      <option value="KES">KES</option>
					      <option value="GHS">GHS</option>
					      <option value="EUR">EUR</option>
					      <option value="GBP">GBP</option>
					      <option value="USD">USD</option>
					    </select>
					</div>
 
					<div class="form-group mt-4">
					    <label for="exampleInputPassword1" class="font-weight-bold">Amount Due To Pay</label> <h5><strong<span id="total_amount_to_pay"></span></strong>
                        </h5>
					</div>

					<button type="submit" class="btn btn-primary">Pay Now</button>
					
				</form>

			</div>

		</div>
	</section>


	

<script type="text/javascript" src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>


</script>
</body> 
</html>