<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' id='skeleton-css' href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/skeleton.css?ver=5.7' type='text/css' media='all'/>
	<link rel='stylesheet' id='base-css' href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/base.css?ver=5.7' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-style-css'  href='http://test2.fnsflm.xyz:8190/wp-content/themes/ninja-shadow/assets/css/theme-style.css?ver=5.7' type='text/css' media='all' />
	<!-- <script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script> -->	
</head>
<script type="text/javascript">
	function replication(id,name) {
		document.getElementById("reply-title").innerHTML="回复给"+name;
		document.getElementById("comment").innerHTML=id;
		}
</script>
<div class="content">
	<div class="content-container">
		<div class="container">
			<div id="primary" class="content-area article">
<div id="comments" class="comments-area">

<!-- 连接数据库，动态加载评论 -->		
<?php
	$conn=mysqli_connect("localhost","root","123456");
	if(!$conn){
		die("数据库连接失败！");
	}
	mysqli_select_db($conn,"blog");
	$sql="select * from jc_comment";
	mysqli_query($conn,"set names utf8");
	$rst=mysqli_query($conn,$sql);
	$rows=mysqli_num_rows($rst); 
?>
		<h2 class="comments-title"> 
			<span>有<?php echo $rows ?>条评论</span>		
		</h2>				
<?php		
	
	while($arr=mysqli_fetch_assoc($rst)){	
?>

	<!-- 评论列表 -->
  	<ol class="comment-list">
		<li id="comment-1" class="comment even thread-even depth-1">
			<article id="div-comment-1" class="comment-body">				
				<footer class="comment-meta">					
					<div class="comment-author vcard">
						<b class="fn"><a href='#' rel='external nofollow ugc' class='url'><?php echo $arr['name'];?></a></b><span class="says">说道：</span>			
					</div><!-- .comment-author -->					
					<div class="comment-metadata">
						<time datetime="2021-03-07T15:48:41+00:00"><?php echo $arr['time']; ?></time> 				
					</div><!-- .comment-metadata -->
				</footer><!-- .comment-meta -->
				
				<div class="comment-content">
					<?php echo $arr['content']; ?>
				</div><!-- .comment-content -->
				<div class="reply"><a rel='nofollow' class='comment-reply-link' href='#' onclick="replication(<?php echo $arr['id'];?>,'<?php echo $arr['name'];?>')">回复</a></div>
				
				<!-- 动态加载回复 -->
				<?php
					$subSql="select * from jc_replication where foreignId='{$arr['id']}'";
					mysqli_query($conn,"set names utf8");
					$subRst=mysqli_query($conn,$subSql);
					while($subArr=mysqli_fetch_assoc($subRst)){
				?>	
					<footer class="comment-meta">					
						<div class="comment-author vcard">
							<b class="fn"><a href='#' rel='external nofollow ugc' class='url'>&nbsp;&nbsp;&nbsp;<?php echo $subArr['name'];?></a></b><span class="says">说道：</span>			
						</div><!-- .comment-author -->					
						<div class="comment-metadata">
							<time datetime="2021-03-07T15:48:41+00:00">&nbsp;&nbsp;&nbsp;<?php echo $subArr['time']; ?></time> 				
						</div><!-- .comment-metadata -->
					</footer><!-- .comment-meta -->				
					<div class="comment-content">&nbsp;&nbsp;&nbsp;<?php echo $subArr['content']; ?></div><!-- .comment-content -->
					<div class="reply"><a rel='nofollow' class='comment-reply-link' href='#' >&nbsp;&nbsp;&nbsp;回复</a></div>
				<?php	}	?>			
			</article><!-- .comment-body -->
		</li><!-- #comment-## -->
	</ol><!-- .comment-list -->
<?php	}	?>	
		
 <!-- 发表评论/回复 -->
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">发表评论</h3>
		<form action="1.php" method="post"  id="commentform" class="comment-form" novalidate>
			<p class="logged-in-as"></p>
			<p class="comment-form-comment">
				<label for="comment">评论</label> 
				<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
			</p>
			<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="发表评论" /> 
		</form>	</div><!-- #respond -->	
	</div><!-- #comments -->

				
				