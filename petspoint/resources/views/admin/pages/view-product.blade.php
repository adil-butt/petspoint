@extends('admin.layouts.app')

@section('content')

		@if ($message = Session::get('success'))
			<div class="container">
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
						<strong  style="padding-left: 400px;">{{ $message }}</strong>
				</div>
			</div>
		@endif
    <td height="463" align="center" valign="top">
			<table> 
			<tr> 
			<td height="33" colspan="2" style="font-weight:bold"  >
			</td>
			</tr>
			</table>
			
			<table width="100%" border="0">
			<h1>View All Website product</h1></br>
			  <tr>
				<td style="border-bottom:1px solid;text-align:center" width="10%"><strong style="padding-left:20px">product Id</strong></td>
				<td style="border-bottom:1px solid;text-align:center" width="15%"><strong>product Image</strong></td>
				<td style="border-bottom:1px solid;text-align:center" width="20%"><strong>product Name</strong></td>
				<td style="border-bottom:1px solid;text-align:center" width="20%"><strong>product Title</strong></td>
				<td style="border-bottom:1px solid;text-align:center" width="15%"><strong> product Status</strong></td>
				<td colspan="2" style="border-bottom:1px solid;text-align:center" width="20%" ><strong>Operations</strong></td>
			  </tr>
			  @foreach($products as $product)
			  <tr style="border-bottom:1px solid">
			<td style="border-bottom:1px solid;text-align:center">{{$product->productId}}</td>
			<td style="border-bottom:1px solid;text-align:center"><img src="{{url('/images/uploads/'.$product->pictureName)}}" height="50" width="50"  /></td>
			<td style="border-bottom:1px solid;text-align:center">{{$product->productName}}</td>
			<td style="border-bottom:1px solid;text-align:center">{{$product->productTitle}}</td>
			<td style="border-bottom:1px solid;text-align:center">{{$product->productStatus}}</td>
			<td style="border-bottom:1px solid;text-align:right">
			
			
			
			<form action="{{url('/view-product/destroy/'.$product->productId)}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}

				<button type="submit" class="btn btn-primary" style="background-color:orange;border:0">
					<i class="fa fa-trash"></i>Delete
				</button>&nbsp;&nbsp;&nbsp;
			</form>
			</td>
			<td style="border-bottom:1px solid;text-align:left">
			<form action="{{url('/edit-product/edit/'.$product->productId)}}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				<button type="submit" class="btn btn-primary" style="background-color:orange;border:0" >
					<i class="fa fa-trash"></i>Edit
				</button>
			</form>
			</td>
		  </tr>
			@endforeach
			 
	
			
			</table>
@endsection