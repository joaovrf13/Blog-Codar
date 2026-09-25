<?php
include_once("templates/header.php");

if(isset($_GET['id'])){

  $postId = $_GET['id'];
  $currentPost;

  foreach($posts as $post){

   if($post['id'] == $postId){
    $currentPost = $post;
   }
  }

}
?>
 <main id="post-container">
    <div class="contend-container">
         <h1 id="main-ttitle"><?= $currentPost['title'] ?></h1>
         <p id="post-description"><?= $currentPost['description'] ?></p>
         <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
         </div>
         <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores laudantium vero neque natus eveniet reiciendis repellat provident tempore? Atque voluptates consequuntur culpa optio nostrum a modi nam natus neque.
         Cum quia neque omnis officia perspiciatis minima optio excepturi repellat aspernatur deserunt fuga adipisci soluta, vitae ipsum libero, vel sint odio id ullam quibusdam consectetur accusamus explicabo quaerat laborum! Sapiente!
         Quisquam deleniti, iste laborum eligendi, neque temporibus repudiandae quia molestiae nesciunt, culpa fugit maxime tempora blanditiis facilis dolor voluptatibus possimus atque mollitia ipsam sequi consequuntur vel ducimus! Magnam, qui velit.
         Ex repellat possimus doloribus, earum unde, perferendis deleniti officia id consectetur impedit numquam, nostrum praesentium nesciunt laboriosam est maxime natus! Explicabo, animi impedit possimus asperiores voluptates itaque corporis aliquam quaerat?
         Pariatur asperiores perferendis voluptate quia, officiis explicabo, molestiae non adipisci aliquam repellendus saepe! Quo laborum numquam architecto sint laudantium consectetur repellendus corporis fugiat, nulla libero. Nostrum cumque asperiores quam incidunt?</p>
         <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolores laudantium vero neque natus eveniet reiciendis repellat provident tempore? Atque voluptates consequuntur culpa optio nostrum a modi nam natus neque.
         Cum quia neque omnis officia perspiciatis minima optio excepturi repellat aspernatur deserunt fuga adipisci soluta, vitae ipsum libero, vel sint odio id ullam quibusdam consectetur accusamus explicabo quaerat laborum! Sapiente!
         Quisquam deleniti, iste laborum eligendi, neque temporibus repudiandae quia molestiae nesciunt, culpa fugit maxime tempora blanditiis facilis dolor voluptatibus possimus atque mollitia ipsam sequi consequuntur vel ducimus! Magnam, qui velit.
         Ex repellat possimus doloribus, earum unde, perferendis deleniti officia id consectetur impedit numquam, nostrum praesentium nesciunt laboriosam est maxime natus! Explicabo, animi impedit possimus asperiores voluptates itaque corporis aliquam quaerat?
         Pariatur asperiores perferendis voluptate quia, officiis explicabo, molestiae non adipisci aliquam repellendus saepe! Quo laborum numquam architecto sint laudantium consectetur repellendus corporis fugiat, nulla libero. Nostrum cumque asperiores quam incidunt?</p>
    </div>
    </div>
 </main>
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
<?php
include_once("templates/footer.php");
?>