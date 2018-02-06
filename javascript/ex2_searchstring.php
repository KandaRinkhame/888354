<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function SearchString(){
			var text1 = document.getElementById('text1').value;
			var text2 = document.getElementById('text2').value;
			var check_radio = document.querySelector('input[name="case"]:checked').value;
			if(check_radio==1){
        		if(text2==""||text1==""){
          			document.getElementById('result').innerHTML = "No input";
        		}
        	else{
          		var x = new RegExp(text2, 'g');
          		var count = text1.match(x);
          			if(count==null){
           				document.getElementById('result').innerHTML = "0";
          			}
         			else{
            			document.getElementById('result').innerHTML = text1.match(x).length;;
          			}
        		}
      		}
      		else if(check_radio==2){
        		if(text2==""||text1==""){
         			document.getElementById('result').innerHTML = "No input";
       	 		}
        		else{
          			var x = new RegExp(text2, 'gi');
          			var count = text1.match(x);
          			if(count==null){
            			document.getElementById('result').innerHTML = "0";
          			}
          			else{
            			document.getElementById('result').innerHTML = text1.match(x).length;;
          			}
        		}
      		}
    	}
	</script>
</head>
<body>
<center> Text Input : 
	<textarea rows="4" cols="50" id="text1"></textarea><br><br>
	Sensitive Case:<input type="radio" name="case" value="1">yes<input type="radio" name="case" value="2">no
	<br><br>
	Search : <input type="text" id="text2">
	<br><br>
	<button type="button" onclick="SearchString()">Search</button>
	<br><br>
	Result for search : <span id="result"></span>
</center>
</body>
</html>