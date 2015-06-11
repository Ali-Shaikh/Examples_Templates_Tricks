<script language="javascript" type="text/javascript">
    function windowClose() {
        window.open('','_parent','');
        window.close();
    }
</script>

<?php
echo '<p align="center"><a href="#" onclick="window.close()">Close Window</a></p>';
?>

<input type="button" value="Close this window" onclick="self.close()">