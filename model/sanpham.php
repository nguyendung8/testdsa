<?php
function insert_sanpham($tensp,$giasp,$filename,$mota,$iddm){
    $sql = "INSERT INTO products(name,price,img,description,category_id) 
    VALUES ('$tensp','$giasp','$filename','$mota','$iddm')";
    pdo_execute($sql);
}
function listAll(){
    $sql = "SELECT * FROM products";
    $listAll = pdo_query($sql);
    return $listAll;
}
function loadlist_sanpham($kyw="",$category_id=0){
    $sql = "select * from products where 1";
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    } 
    if ($category_id > 0 ) {
        $sql.=" and name like '%".$category_id."%'";
    } 
    
    $sql.=" order by id desc";
    $list_sanpham = pdo_query($sql);
    return $list_sanpham;
}
function delete_sanpham($id){
    $id = $_GET['product_id'];
    $sql = "DELETE FROM products WHERE product_id = '$id';";
    pdo_execute($sql);
}
function loadeone_sanpham($id){
    $sql = "SELECT * FROM products WHERE product_id = '$id';";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($idsp,$tensp,$giasp,$filename,$mota,$iddm){
        $sql = "UPDATE products SET name='$tensp', price='$giasp',img='$filename',description='$mota',category_id='$iddm' WHERE product_id = '$idsp';";
    pdo_execute($sql);
}
?>