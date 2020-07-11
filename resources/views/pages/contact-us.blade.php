@extends('layout.app')
@section('content')
        <!-- form -->
<div class="col-md-12">
<div class="mainf">
    <div class="contactform col-md-8 left">
<form action="" method="POST">
    <fieldset>
        <legend>Contact us</legend>
        Name:<input type="text" name="name" placeholder="Full Name"><br>
        Email:<input type="email" name="email" placeholder="someone@contact.com"><br> 
        Phone:<input type="tel" name="phone" placeholder="+923123456789"> <br>
        Role:<input type="radio" name="role" class="role">Student
        <input type="radio" name="role" class="role">Teacher<br>
        City:<select name="city">
        <option value="Lahore">Lahore</option>
        <option value="Karachi">Karachi</option>
        <option value="Peshawar">Peshawar</option>
        <option value="Multan">Multan</option>  
        </select><br> 
        Messege:<br><textarea></textarea><br>
        <button type="Submit" class="btn btn-primary button">Submit</button>
    </fieldset>
</form>
</div>
</div>
<!-- information -->
<div class="col-md-4 left basicinfo">
    <h6>Address:</h6>
    <p>University of Lahore, Lahore, Pakistan</p>
    <a href="mailto:someone@contact.com">someone@contact.com</a>
    <a href="tel:+923123456789">+923123456789</a>
</div>
<!-- map -->
<div class="col-md-4 left map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8369065412994!2d74.23878101475616!3d31.391060281412525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190015234aaed7%3A0xd9c52401a7d2c1ad!2sThe+University+of+Lahore+(Main+Campus)!5e0!3m2!1sen!2s!4v1508331718228"
     width="430" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
    </div>
@endsection