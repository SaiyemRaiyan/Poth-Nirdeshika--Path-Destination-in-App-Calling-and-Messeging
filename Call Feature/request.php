<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12705145117"><?php  echo $_POST['To'];?></Dial>
</Response>