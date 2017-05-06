<?php include('../perch/runtime.php'); ?>
<?php

if(isset($_POST['currentPost']))
{
    $current = $_POST['currentPost'];
    $next = $current + 3;

}

if(isset($_POST['category']))
{
   $category = $_POST['category'];

   $hasNext =
      perch_blog_custom(array(
      'category'   => $category,
      'paginate' => false,
      'count'=>1,
      'skip-template' => true,
      'sort'=>'postDateTime',
      'sort-order'=>'DESC',
      'start'=>$next,
   ));

   $html = perch_blog_custom(array(
      'category'   => $category,
      'paginate' => false,
      'count'=>3,
      'template'=>'post_in_list.html',
      'sort'=>'postDateTime',
      'sort-order'=>'DESC',
      'start'=>$current,

   ), true);

}
else
{
   $hasNext =
      perch_blog_custom(array(
      'paginate' => false,
      'count'=>1,
      'skip-template' => true,
      'sort'=>'postDateTime',
      'sort-order'=>'DESC',
      'start'=>$next,
   ));

   $html = perch_blog_custom(array(
      'paginate' => false,
      'count'=>3,
      'template'=>'post_in_list.html',
      'sort'=>'postDateTime',
      'sort-order'=>'DESC',
      'start'=>$current,
   ), true);
}

$returnObj = array('html' => $html , 'hasNext' => $hasNext);
echo json_encode($returnObj);

?>
