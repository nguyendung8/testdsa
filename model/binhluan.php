<?php
function load_cmt($idsp)
{
    $sql = "SELECT comments.content,comments.time,users.users_name	 FROM comments
    JOIN users on comments.iduser=users.id
    JOIN products on comments.product_id=products.id
    WHERE products.id=$idsp";
    $result = pdo_query($sql);
    return $result;
}
function insert_cmt($product_id, $users_id, $content, $time)
{
    $sql="insert into comments(content,users_id,product_id,time) values('$content','$users_id','$product_id','$time')";
    pdo_execute($sql);
}
function load_all_cmt($product_id)
{
    $sql = "SELECT * FROM comments";
    if ($product_id > 0) {
        $sql .= " AND product_id='" . $product_id . "'";
    }
    $sql .= " ORDER BY comments_id desc";
    $result = pdo_query($sql);
    return $result;
}
function delete_cmt($comments_id)
{
    $sql = "delete from comments where comments_id=" . $comments_id;
    $result = pdo_execute($sql);
}
?>
