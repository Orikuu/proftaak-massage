<?php
$dbh = new PDO('mysql:host=localhost;dbname=care', 'root', '');
$page = isset($_GET['p'])? $_GET['p'] : '';
if($page=='add'){
    try{
        $id = $_POST['id'];
        $tl = $_POST['tl'];
        $dc = $_POST['dc'];
        $im = $_POST['im'];
        $pr = $_POST['pr'];
        $stmt = $dbh->prepare("INSERT INTO products VALUES(?,?,?,?,?)");
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$tl);
        $stmt->bindParam(3,$dc);
        $stmt->bindParam(4,$im);
        $stmt->bindParam(5,$pr);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been added</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to add data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='update'){
    try{
        $id = $_POST['id'];
        $tl = $_POST['tl'];
        $dc = $_POST['dc'];
        $im = $_POST['im'];
        $pr = $_POST['pr'];
        $stmt = $dbh->prepare("UPDATE products SET title=?, description=?, image=?, price=? WHERE id=?");
        $stmt->bindParam(1,$tl);
        $stmt->bindParam(2,$dc);
        $stmt->bindParam(3,$im);
        $stmt->bindParam(4,$pr);
        $stmt->bindParam(5,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been updated</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to update data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else if($page=='delete'){
    try{
        $id = $_POST['id'];
        $stmt = $dbh->prepare("DELETE FROM products WHERE id=?");
        $stmt->bindParam(1,$id);
        if($stmt->execute()){
            print "<div class='alert alert-success' role='alert'>Data has been deleted</div>";
        } else{
            print "<div class='alert alert-danger' role='alert'>Failed to delete data</div>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    } 
} else{
    try{
        $stmt = $dbh->prepare("SELECT * FROM products ORDER BY id DESC");
        $stmt->execute();
        while($row = $stmt->fetch()){
            print "<tr>";
            print "<td>".$row['title']."</td>";
            print "<td>".$row['description']."</td>";
            print "<td>".$row['image']."</td>";
            print "<td>".$row['price']."</td>";
            print "<td class='text-center'><div class='btn-group' role='group' aria-label='group-".$row['id']."'>";
            ?> 
            <button onclick="editData('<?php echo $row['id'] ?>','<?php echo $row['title'] ?>','<?php echo $row['description'] ?>','<?php echo $row['image'] ?>','<?php echo $row['price'] ?>')" class='btn btn-warning'>Edit</button>
            <button onclick="removeConfirm('<?php echo $row['id'] ?>')" class='btn btn-danger'>Trash</button>
            <?php 
            print "</div></td>";
            print "</tr>";
        }
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
?>