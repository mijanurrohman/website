

<?php
$conn = mysqli_connect('localhost','root','','db_test');
$s= mysqli_query($conn,"SELECT * FROM mytest");



?>
<table border=1>
    <tr >
        <th  style="border: 2px solid red;">name</th>
        <th  style="border: 2px solid red;"  > email</th>
        <th style="border: 2px solid red;" >password</th>
    </tr>
    <?php
   // fetch data here
     while($r = mysqli_fetch_array($s)){
     

        ?>

<tr>
        <td style="border: 2px solid pink;"><?php echo $r['username'];?></td>
        <td style="border: 2px solid pink;"><?php echo $r['email'];?></td>
        <td style="border: 2px solid pink;"><?php echo $r['password'];?></td>
    </tr>
<?php


     }
    ?>
   
</table>
