<html>
<head>
	<title>Laravel Anisa </title>
</head>
<body>
<table border="1">
	<thread>
		<tr>No </tr>
		<tr> Nama Produk </tr>
	</thread>
	<tbody>
	 	@foreach ($produk as $i => $v)
	    	<tr>
	    		 <td>{{ $i+1 }}</td> 
		 		 <td>{{ $v }}</td>
			</tr>
		 @endforeach 
	</tbody> 
</table>
</body>
</html>