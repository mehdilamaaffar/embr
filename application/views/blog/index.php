<?php foreach($posts as $post){ ?>
  <?php 
    echo "<div class=\"post\">";
    echo "<h3><a href=\"".base_url().strtolower(url_title($post["title"]))."\">".$post["title"]."</a></h3>";
    echo "<p class=\"blogP\">by $first_name on ".date("l dS F\, Y",strtotime ($post["datet"]))."</p>"; 

    echo "<p>";
    $body = explode("</p>",$post["content"]);
    echo "".strip_tags($body[0])." ".$post['summary']." <a class=\"imp\" href=\"".base_url().strtolower(str_replace(" ","-",$post["title"]))."\"> Continue Reading</a></p>";
    echo "</div>";   
  ?>  
<?php } ?>

<div class="pagination">
<?php echo $this->pagination->create_links(); ?>
</div>