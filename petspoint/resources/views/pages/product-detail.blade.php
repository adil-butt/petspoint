@extends('layout.app')
@section('content')
<div class="row mainf">
	<div class="col-12">
		@if (count($product) == 1) 
	
				<table>
					<tr>
					<td valign="top"><img src="{{url('images/uploads/'.$product->pictureName)}}" height="250" width="250"  /> </td> 
					<td><b>Product Title : </b>{{$product->productTitle}}</br>
					<b>Product Price : </b>{{$product->productPrice}}</br>
					<b>Product	Code : </b>{{$product->productCode}}</br>
					<b>Product	Stock : </b>{{$product->productStock}}</br>
					<b>Product	Size : </b>{{$product->productSize}}</br>
					
					</td>
					</tr>
					<tr>
					<td colspan="2">
						<h3>Product Details :</h3>{{$product->productDescription}}
					</td>
					</tr>
				</table>
		@endif
	</div>
</div>
@endsection