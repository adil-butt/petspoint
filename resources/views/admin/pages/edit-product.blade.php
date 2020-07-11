@extends('admin.layouts.app')

@section('content')
<table width="80%" border="1" align="center">
	@if ($message = Session::get('success'))
				<div class="container">
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>
							<strong  style="padding-left: 400px;">{{ $message }}</strong>
					</div>
				</div>
	@endif
    <td height="463" align="center" valign="middle">
	<form name="edit-product" action="{{ url('/product/update/'.$product->productId) }}" method="post"  enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><h3><center>Edit Record</center></h3></td>
  </tr>
	<tr>
	<td>&nbsp
	</td>
	</tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="{{$product->productName}}" /></td>
  </tr>
  <tr>
    <td>Product Title</td>
    <td><input type="text" name="productTitle" value="{{$product->productTitle}}" /></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><input type="number" name="productPrice" value="{{$product->productPrice}}" /></td>
  </tr>
  <tr>
    <td>Product Code</td>
    <td><input type="text" name="productCode" value="{{$product->productCode}}" /></td>
  </tr>
  <tr>
    <td>Product Stock</td>
    <td><select name="productStock" >
		<option value="N" <?php if($product->productSock=='Y') echo 'selected'; else ''; ?> >outStock</option>
		<option value="Y" <?php if($product->productStock=='N') echo 'selected'; else ''; ?> >inStock</option>		
		</select>
	</td>
  </tr>
  <tr>
    <td>Product Discount</td>
    <td><input type="number" name="productDiscount" value="{{$product->productDiscount}}" /></td>
  </tr><tr>
    <td>Product Size</td>
    <td><input type="text" name="productSize" value="{{$product->productSize}}" /></td>
  </tr>
  <tr>
    <td valign="top">Product Description</td>
    <td valign="top"><textarea cols="80" rows="15" name="productDescription" >{{$product->productDescription}}</textarea></td>
  </tr>
  <tr>
    <td>Product Status</td>
    <td><select name="productStatus" >
		<option value="Y" <?php if($product->productStatus=='Y') echo 'selected'; else ''; ?>  >Published</option>
		<option value="N" <?php if($product->productStatus=='N') echo 'selected'; else ''; ?>  >Not Published</option>
		</select></td>
  </tr> 
  <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="pictureName"  /></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Update" /></td>
  </tr>
  <tr>
  <td valign="top">&nbsp;Existing Image:</td>
  <td align="left" valign="top"> <img src="{{url('images/uploads/'.$product->pictureName)}}" height="50" width="50"  /></td>
  </tr>
</table>
</form>
	
@endsection