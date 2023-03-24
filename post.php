 <?php

  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        
        if($post['id'] == $postId) {
          $currentPost = $post;
        }
    }
 }

 ?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolores suscipit sit nemo hic temporibus, neque perferendis corrupti, minima voluptas quasi, quae velit expedita ut error voluptatem dolore a iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptatum consequuntur! Nemo odit dolorum quos repudiandae, commodi rerum consequuntur ad? Corporis vitae, officia cumque harum error suscipit nihil mollitia sed? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, quod voluptatibus quae perferendis veritatis at praesentium. Totam, perferendis earum laudantium nemo quidem eius. Totam, officiis! Reiciendis nesciunt consequuntur iusto accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores ut atque cumque ullam qui nisi esse suscipit delectus commodi iure sapiente, magni blanditiis, dicta quis quas praesentium maxime, consectetur optio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error dolor voluptatum soluta modi, veniam nulla aspernatur iusto sed? Fugiat nobis distinctio recusandae, enim animi tenetur ea consequatur dignissimos non corrupti.</p> 
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolores suscipit sit nemo hic temporibus, neque perferendis corrupti, minima voluptas quasi, quae velit expedita ut error voluptatem dolore a iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, voluptatum consequuntur! Nemo odit dolorum quos repudiandae, commodi rerum consequuntur ad? Corporis vitae, officia cumque harum error suscipit nihil mollitia sed? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, quod voluptatibus quae perferendis veritatis at praesentium. Totam, perferendis earum laudantium nemo quidem eius. Totam, officiis! Reiciendis nesciunt consequuntur iusto accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores ut atque cumque ullam qui nisi esse suscipit delectus commodi iure sapiente, magni blanditiis, dicta quis quas praesentium maxime, consectetur optio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error dolor voluptatum soluta modi, veniam nulla aspernatur iusto sed? Fugiat nobis distinctio recusandae, enim animi tenetur ea consequatur dignissimos non corrupti.</p> 
    </div>
    <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
         <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
       <?php foreach($categories as $category): ?>
         <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
    </aside>
</main>
 
 <?php
  include_once("templates/footer.php")
 ?>