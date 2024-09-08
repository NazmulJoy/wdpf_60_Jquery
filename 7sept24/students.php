<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 require_once('db_config.php');
 $datas = $db->query("SELECT * FROM students");
?>
<table border="1">
 <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Date of Birth</th>
     <th>Gender</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Address</th>
     <th>Action</th>
 </tr>
 <?php while($row = $datas->fetch_assoc()){ ?>
 <tr>
     <td><?php echo $row['id'] ?></td>
     <td><?php echo $row['name'] ?></td>
     <td><?php echo $row['dob'] ?></td>
     <td><?php echo $row['gender'] ?></td>
     <td><?php echo $row['email'] ?></td>
     <td><?php echo $row['phone'] ?></td>
     <td><?php echo $row['address'] ?></td>
     <td><a href="#" class="stid" value="<?php echo $row['id'] ?>">Delete</a></td>
 </tr>
 <?php } ?>
 <script> 
    $(document).ready(function(){
            $(".stid").on('click', function(event){
                event.preventDefault();
                let sid = $(this).attr("value");
                //alert(sid)
                
                $.post("delete.php", {id:sid}, function(data,status){
                    alert(data);
                })
            })
    }) 
 </script>
</table>
</body>
</html>