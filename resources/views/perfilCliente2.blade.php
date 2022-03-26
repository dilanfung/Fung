<!DOCTYPE html>
<html lang="en">
	<head>
	</head>

	<body onload="document.forms['logout-form'].submit()">

		
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" name="logout-form">
			@csrf 
		</form>
	</body>

</html>