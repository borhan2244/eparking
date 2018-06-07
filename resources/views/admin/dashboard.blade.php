	@extends('admin_layout')
	@section('admin_content')	
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="#">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>
			
			<div class="row-fluid">
				
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number">854<i class="icon-arrow-up"></i></div>
					<div class="title">Total Car Park</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>	
				</div>	
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					<div class="number">&#2547;1000<i class="icon-arrow-up"></i></div>
					<div class="title">Total Vehicle Owner's Paid Amount</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
					<div class="number">&#2547;982<i class="icon-arrow-up"></i></div>
					<div class="title">Total Park Owner's Earned Amount</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
					<div class="number">100<i class="icon-arrow-down"></i></div>
					<div class="title">Total Service Hours</div>
					<div class="footer">
						<a href="#"> read full report</a>
					</div>
				</div>	
				
			</div>		

           <div class="control-group">
							  
							  <div class="controls">
								Date Input <input type="text" class="input-xlarge datepicker" id="date01" value="06/01/18">
								to <input type="text" class="input-xlarge datepicker" id="date02" value="06/01/18">

							  </div>
							</div>          

							

							<div class="box-header">
						<h2><span class="break"></span>Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>


					<div class="row-fluid">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Order ID</th>
								  <th>Park Owner ID</th>
								  <th>Car Owner ID</th>
								  <th>Service Hour</th>
								  <th>Total Amount</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<tr>
								<td>001</td>
								<td class="center">001</td>
								<td class="center">001</td>
								<td class="center">10</td>
								<td class="center">100</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

							<tr>
								<td>002</td>
								<td class="center">002</td>
								<td class="center">002</td>
								<td class="center">20</td>
								<td class="center">200</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>

							<tr>
								<td>003</td>
								<td class="center">003</td>
								<td class="center">003</td>
								<td class="center">30</td>
								<td class="center">300</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						
						  </tbody>
						</table>
					</div>

			
			
			
						
			
			
			
			
			
			
       

	</div><!--/.fluid-container-->

	@endsection