<h1>Contact Blade</h1>
<div>
<form action="{{ route('contact.store') }}" method="POST">
@csrf
<input type="text" Name="name"/>
<input type="text" Name="email"/>
<textarea name="message" cols="30" rows="10"></textarea>
<input type="submit" value="submit"/>
</form>
</div>