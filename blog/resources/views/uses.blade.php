<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	@foreach($uses as $use)
<li>{{$use->id}}</li>
<li>{{$use->body}}</li>
@endforeach
</ul>
</body>
</html>