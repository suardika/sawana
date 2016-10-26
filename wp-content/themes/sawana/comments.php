<div class="comments-wrap">
    <?php
	    foreach($comments as $comment) {
	        ?>
	        <h4><a href="<?php comment_author_url(); ?>"<?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>
	        <div class="comment-body">
	            <p><?php comment_content(); ?></p>
	        </div>
	        <?php
	    }
    ?>
</div>

<?php
if(comments_open()) {
	?>
	    <h4>Leave a comment</h4>
	    <form action="<php eco site_url('wp-comments-posts.php'); ?>" method="post" id="commentform">
	        <input type="hidden" name="comment_post_ID" id="comment_post_ID" value="<?php echo $post->ID; ?>" ></input>
	        <div class="form-group">
	            <label>Name / Alias (required)</label>
	            <input type="text" name="author" class="form-control"></input>
	        </div>
	        <div class="form-group">
	            <label>Email Address (required, not shown)</label>
	            <input type="text" name="email" class="form-control"></input>
	        </div>
	        <div class="form-group">
	            <label>Website (optional)</label>
	            <input type="text" name="url" class="form-control"></input>
	        </div>
	        <div class="form-group">
	            <label>Comment</label>
	            <textarea rows="7" cols="60" name="comment" class="form-control"></textarea>
	        </div>
	        <div class="form-group">
	            <button type="submit" class="btn btn-primary">Add Comment</button>
	        </div>
	    </form>
	<?php
}else{
    _e('Comments are closed', 'sawana' );
}

