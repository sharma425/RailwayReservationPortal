<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<input type="text" name=" username" placeholder="username" id="username">
<input type="text" name=" kdmd" placeholder="kslDKSALDK">
</body>
</html>
<script type="text/javascript">
	var username=document.getElementById("username");
	username.onblur=function()
	{  //document.write("ppp");
		document.write("<?php echo check()?>");
	}
</script>
<?php
function check()
{//echo "keshav";
 $conn = mysqli_connect("localhost", "root", "", "railway");
            if (mysqli_connect_error())
             {
                 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
             }  

            	echo 1;
                $username="<script>document.writeln(username);</script>";echo $username;
                $SELECT = "SELECT * From user Where p_id = '$username' ";
                $result=mysqli_query($conn,$SELECT);
                $rnum=mysqli_num_rows($result);

                echo 2;
                if ($rnum ==1 ){echo "exist";}
            
}
?>
<script>
	var captcha=document.getElementById("");
	captcha.onblur=function()
	{
		var captcha1="P6KFA";
				if(captcha1 != this.value)
			{
				this.value="";
				alert("Your Captcha Does Not Match \n Please Re-enter Your Captcha ");
				this.style.border="2px solid red";
				this.onclick=function()
					{
						this.style.border="1px solid gray";
					}
			}	
	}
	
   
</script>
<?php
   //echo "<script>document.writeln(res);</script>";
?>
<script>
   var res = "success";
</script>
<?php
  $var="<script>document.writeln(res);</script>";
  echo $var;
  echo $var;
  echo $var;
?>



<?php 
function add()
{
	echo "eefefe";
}
?>
<script type="text/javascript">
	var phpadd=add();
</script>