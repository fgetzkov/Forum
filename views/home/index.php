      <div class="container">
         ::before
         <div class="page-header" id="banner">
            <h1>Questions</h1>
         </div>
         <a href="question/add" class="btn btn-primary">Add Question</a>
         <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
         </form>
        <?php foreach ($this->posts as $post) : ?>
         <div class="ItemContent Discussion">
            <div class="Title">
            <span class="label label-success">new</span>
            <a href="question/preview/<?= $post['id'] ?>"><b><?= htmlspecialchars($post['title']) ?></b></a>
            </div>
            <div class="Meta Meta-Discussion">
               <span class="MItem MCount ViewCount"><span title="# views" class="Number">views</span> <?= htmlspecialchars($post['visits']) ?></span>
               <span class="MItem LastCommentBy">Posted By <a href="#"><?= htmlspecialchars($post['author']) ?></a></span>
               <span class="MItem LastCommentDate"><time title="#" datetime="#"><?= htmlspecialchars($post['date']) ?></time></span>
               <span class="MItem Category Category-#"> Category: <?= $this->categories htmlspecialchars([$post['category']]) ?></span>
            </div>
         </div>
         <br>
         <?php endforeach; ?>
      </div>