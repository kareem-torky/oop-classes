<h1>hello from views / posts / index</h1>
<?php foreach($posts as $post): ?>
    <p>
        <?php echo $post['title']; ?>
    </p>
<?php endforeach; ?>