<?php include('../perch/runtime.php'); ?>
<?php


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
      'start'=>6,
   ));

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
      'start'=>6,
   ));
}

$returnObj = array('hasNext' => $hasNext);
echo json_encode($returnObj);

?>
