<style>
  nav.post{width: 20%;float: left;box-sizing: border-box;}
  article.post{width: 80%;float: left;box-sizing: border-box;}
  nav.post a{width: 100%;float: left;}
</style>
<section>
  <nav class="post">
    <?php
      $q = "select*from wp_posts";
      $rs = $connect->query($q);
      foreach($rs as $post):
    ?>
        <a href="?option=news&id=<?=$post['ID']?>"><?=$post['post_title']?></a>
    <?php  endforeach;?>
  </nav>
  <article class="post">
    <?php
      if(isset($_GET['id']))
        $id = $_GET['id'];
      else
        $id = 664;
      $q = "select*from wp_posts where ID=$id";
      $rs = $connect->query($q);
      $post = mysqli_fetch_array($rs);
    ?>
    <h1 style="font-size: 25px;"><?=$post['post_title']?></h1>
    <hr>
    <?=htmlspecialchars_decode($post['post_content']);?>
  </article>
</section>