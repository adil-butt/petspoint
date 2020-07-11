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
  <tr>
    <td height="463" align="center" valign="middle">
	<form name="addproduct" action="{{ url('/product/create') }}" method="post" enctype="multipart/form-data" >
	{{ csrf_field() }}
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" >

	</td>
  </tr>
   <tr>
    <td height="34" colspan="2"><h3><center>Add product Record</center></h3></td>
  </tr>
	<tr>
	<td>&nbsp
	</td>
	</tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="" style="margin:10px"/></td>
  </tr>
  <tr>
    <td>Product Title</td>
    <td><input type="text" name="productTitle" value="" style="margin:10px"/></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><input type="number" name="productPrice" value="" style="margin:10px"/></td>
  </tr>
  <tr>
    <td>Product Code</td>
    <td><input type="text" name="productCode" value="" style="margin:10px"/></td>
  </tr>
  <tr>
    <td>Product Stock</td>
    <td><select name="productStock" style="margin:10px">
		<option value="N" >outStock</option>
		<option value="Y" >inStock</option>		
		</select>
	</td>
  </tr>
  <tr>
    <td>Product Discount</td>
    <td><input type="number" name="productDiscount" value="" style="margin:10px"/></td>
  </tr><tr>
    <td>Product Size</td>
    <td><input type="text" name="productSize" value="" style="margin:10px"/></td>
  </tr>
  <tr>
    <td valign="top">product Description</td>
    <td valign="top"><textarea cols="80" rows="15" name="productDescription" style="margin:10px"></textarea></td>
  </tr>
	<tr>
    <td>Product Status</td>
    <td><select name="productStatus" >
		<option value="Y" >Published</option>
		<option value="N" >Not Published</option>
		</select></td>
  </tr> 
  <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file" value="" name="pictureName" style="margin:10px" /></td>
   </tr>
   
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add Product" style="background-color:orange;border:0;margin:10px" class="btn btn-primary"/></td>
  </tr>
</table>
</form>
@endsection
