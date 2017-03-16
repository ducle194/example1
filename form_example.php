<h2>Form Example</h2>
<form action="form_example.php" method="post">
    <select class="" name="country">
        <option value="">Choose</option>
        <option value="Sweden">Sweden</option>
        <option value="Finland">Finland</option>
        <option value="Norway">Norway</option>
    </select>
    <input class="btn btn-primary" type="submit" name="btnSend" value="Send">  
</form>
<?php
        $chosen=$_POST['country'];
        echo 'You have chosen: '.$chosen;    
?>
