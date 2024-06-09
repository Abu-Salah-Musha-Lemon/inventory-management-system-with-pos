
@extends('layout')
@section('main')

<style>
label{
width:auto;
}
</style>

<!-- modal -->
<div id="finalInvoice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog"> 
<div class="modal-content" > 
<div class="modal-header"> 
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button> <br>
		<h4 class="modal-title text-info">Final Invoice <span style="float:right">Total: {{Cart::total();}}</span></h4> {{$customer->name}} 
</div> 
<form role="form" action="{{ URL::to('/final-invoice/') }}" method="HEAD">
		@csrf
		<div class="modal-body">
				<div class="row">
						<div class="col-md-4">
								<label for="payment_status">Payment Method</label>
										@if ($errors->any())
												<div class="alert alert-danger">
														<ul>
																@foreach ($errors->all() as $error)
																		<li>{{ $error }}</li>
																@endforeach
														</ul>
												</div>
										@endif
								<select name="payment_status" class="form-control">
										<!-- <option value="">Select</option> -->
										<option value="HandCase">HandCase</option>
										<option value="Bank">Bank</option>
										<option value="Check">Check</option>
								</select>
								<span class='text-danger fs-bolder'>@error('payment_status'){{ $message }} @enderror</span>
						</div>
						<div class="col-md-4">
								<label for="pay">Case</label>
								<input type="number" name="pay" id="pay" class="form-control"step="0.01">
								<span class='text-danger fs-bolder'>@error('pay'){{ $message }} @enderror</span>
						</div>
						<!-- <div class="col-md-4">
								<label for="due">Due</label>
								<input type="number" name="due" class="form-control">
								<span class='text-danger fs-bolder'></span>
						</div> -->
						<div class="col-md-4">
								<label for="cashDue">Cash Due</label>
								<input type="number" id="due" name="due" class="form-control" step="0.01">
								<span class="text-danger fs-bolder">@error('due'){{ $message }} @enderror</span>
						</div>
						<div class="col-md-4">
								<label for="returnAmount">Return Amount</label>
								<input type="number" id="returnAmount" name="returnAmount" class="form-control" step="0.01" readonly>
						</div>
				</div>
		</div> 
		<input type="hidden" name="customer_id" value="{{ $customer->id }}">
		<input type="hidden" name="order_date" value="{{ date('d-m-y') }}">
		<input type="hidden" name="order_month" value="{{ date('F') }}">
		<input type="hidden" name="order_year" value="{{ date('Y') }}">
		<input type="hidden" name="order_status" value="pending">
		
		<input type="hidden" name="total_products" value="{{ Cart::count() }}">
		<input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
		<input type="hidden" name="vat" value="{{ Cart::tax() }}">
		<input type="hidden" name="total" id='total' value="{{$total=  Cart::total() }}">
		<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Print Invoice</button>
		</div> 
</form>

</div> 
</div>
</div><!-- /.modal -->
<script>
function calculateCashDue() {
	let paymentAmount = parseFloat(document.getElementById('pay').value) || 0;
	let totalAmount = parseFloat(document.getElementById('total').value.replace(/,/g, '')) || 0;
	let cashDue = totalAmount - paymentAmount;
	let returnAmount = 0;

	if (cashDue < 0) {
		returnAmount = Math.abs(cashDue);
		cashDue = 0;
	}

	document.getElementById('due').value = cashDue.toFixed(2);
	document.getElementById('returnAmount').value = returnAmount.toFixed(2);
}

document.getElementById('pay').addEventListener('input', calculateCashDue);

calculateCashDue(); // This line should be placed after adding the event listener
</script>

<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
						<!-- <div class="panel-heading">
								<h4>Invoice</h4>
						</div> -->
						<div class="panel-body" id='invoice'>
								<div class="clearfix">
										<div class="pull-left">
												<h4 class="text-right"><img src="images/logo_dark.png" alt="velonic"></h4>
												<span class='text-danger fs-bolder'>@error('pay'){{ $message }} @enderror</span>
										</div>
										<div class="pull-right">
												<h4>Invoice # <br>
														<strong>{{date('d D M Y')}}</strong>
												</h4>
										</div>
								</div>
								<hr>
								<div class="row">
										<div class="col-md-12">
												
												
												<div class="pull-left m-t-30">
														<address>
																Name: <strong>{{$customer->name}}</strong>
																<Address>Address: {{$customer->address}}</Address>
																City: {{$customer->city}}<br>
																<abbr title="Phone">Phone:</abbr> {{$customer->phone}}
																</address>
												</div>
												
												<div class="pull-right m-t-30">
														<p><strong>Order Date: </strong>{{date('d  M Y')}}</p>
														<p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
														<p class="m-t-10"><strong>Order ID: </strong> #123456</p>
												</div>
										</div>
								</div>
								<div class="m-h-50"></div>
								<div class="row">
										<div class="col-md-12">
												<div class="table-responsive">
														<table class="table m-t-30">
																<thead>
																		<tr>
																				<th>#</th>
																				<th>Item</th>
																				
																				<th>Quantity</th>
																				<th>Unit Cost</th>
																				<th>Total</th>
																		</tr>
																</thead>
																<tbody>
																		@php
																		$sl=1;
																		@endphp
																		@foreach($cart as $row)
																		<tr>
																				<td>{{$sl++}}</td>
																				<td>{{$row->name}}</td>
																				<td>{{$row->qty}}</td>
																				<td>{{$row->price}}</td>
																				<td>{{$row->price*$row->qty}}</td>
																				
																		</tr>
																		@endforeach
																</tbody>
														</table>
												</div>
										</div>
								</div>
								<div class="row" style="border-radius: 0px;">
										<div class="col-md-3 col-md-offset-9">
												<p class="text-right"><b>Sub-total:</b> {{Cart::subtotal();}} ৳</p>
												<!-- <p class="text-right">Discout: 12.9%</p> -->
												<p class="text-right">Total Qty: {{Cart::count();}}</p>
												<p class="text-right">VAT: {{Cart::tax();}}</p>
												<hr>
												<h3 class="text-right">Total : {{Cart::total();}}</h3>
										</div>
								</div>
								<hr>
								<div class="hidden-print">
										<div class="pull-right">
												<!-- <button type="submit"class="btn btn-inverse waves-effect waves-light" id="printPi" ><i class="fa fa-print"></i></button> -->
												<a href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#finalInvoice">Submit</a>
										</div>
								</div>
						</div>
				</div>

		</div>

</div>


<script>
// Custom print function
function printElement(elementId) {
		let element = document.getElementById(elementId);
		if (element) {
				let body = document.body.innerHTML;
				let content = element.innerHTML;
				document.body.innerHTML = content;
				window.print();
				document.body.innerHTML = body;
		} else {
				console.error("Element with ID '" + elementId + "' not found.");
		}
}

// Add click event listener to the print button
// document.getElementById('print').addEventListener('click', function() {
//     printElement('invoice'); // Change 'element1' to the ID of the element you want to print
// });
// Add click event listener to the print button
document.getElementById('printPi').addEventListener('click', function() {
		printElement('invoice'); // Change 'element1' to the ID of the element you want to print
});
</script>

@endsection