<?php $this->load->view('thread/header');?>

<body>
    <div id="container">
    	<div id="header">
			Welcome <?=$username?>
        </div><!-- Close header -->
        
        
        	
            <?php $this->load->view('thread/menu');?>
            
            <div id="content">
	            <article class = "align-right">
	            	test R
	            </article>
	            <article class = "align-left">
	            	test l
	            </article>
	            <article class = "align-left">
	            	test l
	            </article>
        	    <article class = "align-left">
	            	test l
	            </article>
				<article class = "align-right">
	            	test R
	            </article>
			</div><!-- Close content -->

            

            
            
            <?php if($query): foreach($query as $post):?>
            <div class="post">
                <div class="post meta">
                	<div class="title"><h2><?php echo $post->entry_name;?></h2></div>
                    <div class="date"><?php echo mdate("%h:%i %a, %d.%m.%Y",mysql_to_unix($post->entry_date));?></div>
                </div>
                
                <p><?php echo $post->entry_body;?></p>
                <div style="float:right; font-size:12px; margin:0 5px;">
                	<a href="<?php echo base_url().'post/'.$post->entry_id;?>">Leave comments</a></div>
                <hr />
            </div><!-- Close post -->
            <?php endforeach; else: ?>
            	<h1>no entry yet!</h1>
            <?php endif; ?>
            
            
        
    	
        <?php //$this->load->view('thread/footer');?>
    	
    </div><!-- Close container -->
</body>
</html>