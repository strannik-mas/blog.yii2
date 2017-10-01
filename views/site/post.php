<?php
$this->title = $post->title;
$this->registerMetaTag([
	'name' => 'description',
	'content' => $post->meta_desc
]);

$this->registerMetaTag([
	'name' => 'keywords',
	'content' => $post->meta_key
]);
?>
<div class="post">
	<h1><?php if($post->is_release) { ?> Выпуск №<?=$post->number?>. <?php } ?><?=$post->title?></h1>
	<hr />
	<table id="fullpost_info">
		<tr>
			<td>
				<table class="post_info">
					<tr>
						<td>
							<img src="/web/images/date.png" alt="Дата" />
						</td>
						<td>
							<p><?=$post->date?></p>
						</td>
						<td class="right">
							<img src="/web/images/hits.png" alt="Просмотров" />
						</td>
						<td class="center">
							<p><?=$post->hits?></p>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<?php include "likes.php"; ?>			</td>
		</tr>
	</table>
	<div class="post_text">
		<img class="intro" src="<?=$post->img?>" alt="<?=$post->title?>" />
		<!--без форматирования и видео-->
		<?=$post->full_text?>
	</div>
	<script type="text/javascript">
		VK.Observer.subscribe('widgets.like.liked', function(param) {
			document.getElementById("access_like_1").style.display = "block";
			document.getElementById("access_like_2").style.display = "block";
		});
		window.fbAsyncInit = function() {
			FB.Event.subscribe('edge.create',
				function(response) {
					document.getElementById("access_like_1").style.display = "block";
					document.getElementById("access_like_2").style.display = "block";
				}
			);
		};	
	</script>
	<div id="repost">
		<hr />
		<h2>Порекомендуйте этот пост друзьям:</h2>
		<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
		<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus" data-counter="" data-image="https://blog.myrusakov.ru/images/posts/multilanguage.png" data-description="Как сделать мультиязычный сайт?"></div>
	</div>
			<div id="form_update">
			<h4 class="center">Чтобы не пропустить свежие выпуски, заполните форму ниже</h4>
			<div class="form_subscribe">
				<h3>Подписаться на обновления</h3>
				<form name="subscribe_update" action="https://srs.myrusakov.ru/subscribe?utm_source=Blog.MyRusakov.ru&utm_campaign=update&utm_content=post_113" method="post" onsubmit="return SR_submit(this)">
					<p>
						<input type="text" class="input" name="name" value="Ваше имя" onfocus="if(this.value=='Ваше имя') this.value='';" onblur="if(this.value=='') this.value='Ваше имя'" />
					</p>
					<p>
						<input type="text" class="input" name="email" value="Ваш e-mail адрес" onfocus="if(this.value=='Ваш e-mail адрес') this.value=''" onblur="if(this.value=='') this.value='Ваш e-mail адрес'" />
					</p>
					<table class="button_subscribe">
						<tr>
							<td>
								<input type="hidden" name="delivery_id" value="4" />
								<input type="image" src="/web/images/button_subscribe_left.png" alt="Получать свежие выпуски" />
							</td>
							<td class="center">
								<input type="submit" class="bg_center" value="Получать свежие выпуски" />
							</td>
							<td>
								<input type="image" src="/web/images/button_subscribe_right.png" alt="Получать свежие выпуски" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div><hr />
<div id="comments">
	<h2>Добавить комментарий:</h2>
	<div id="comments_vk">
		<div id="vk_comments"></div>
		<script type="text/javascript">
			VK.Widgets.Comments("vk_comments", {limit: 10, width: "496", attach: "graffiti,photo,link"});
		</script>
	</div>
</div>