@extends('layout.app')
@section('content')
<div class="container-fluid">
	<div class="row mainf" style="padding-top: 20px">
		@if (count($products) > 0) 
			@foreach($products as $product)
			@if($product->productStatus == 'Y')
				<div style=" width:220px; margin-left:10px; border:1px solid; float:left">
				<table>
					<tr>
					<td ><a href="{{ url('/product-details/'.$product->productId) }}" ><img src="{{url('/images/uploads/'.$product->pictureName)}}" height="200" width="200"  /></a></td>
					</tr>
					<tr>
					<td style="padding-left:70px"><a href="{{ url('/product-details/'.$product->productId) }}" style="color:black">{{$product->productTitle}}</a></td>
					</tr>
				</table>
				</div>
			@endif
			@endforeach	
		@endif
</div>

</div>
@endsection