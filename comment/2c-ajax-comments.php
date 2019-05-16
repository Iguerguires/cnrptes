<?php
/* [INIT] */
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-comments.php";
$pdo = new Comments();

/* [HANDLE AJAX REQUESTS] */
switch ($_POST['req']) {
	/* [INVALID REQUEST] */
	default:
		echo "ERR";
		break;

	/* [SHOW COMMENTS] */
  case "show":
    $comments = $pdo->get($_POST['post_id']);
		function show ($cid, $rid, $name, $time, $message, $indent = 0) { ?>
		<br><br>
    <div class="ccomment<?= $indent ? " creply" : "" ?>">
      <div>
        <span class="text-primary"><?=$name?></span>
        <span class="text-secondary"><?=$time?></span>
      </div>
			<div class="comment-body"><?=$message?></div>
			<input type="button" class="btn btn-primary py-1 px-2" value="Répondre" onclick="comments.reply(<?=$cid?>, <?=$rid?>)"/>
			<div id="reply-<?=$cid?>"></div>
		</div>
		<?php }
		if (is_array($comments)) { foreach ($comments as $c) {
			show($c['id_comment'], $c['id_comment'], $c['name'], $c['timestamp'], $c['message']);
			if (is_array($c['reply'])) { foreach ($c['reply'] as $r) {
				show($r['id_comment'], $c['id_comment'], $r['name'], $c['timestamp'], $r['message'], 1);
			}}
		}}
		break;

	/* [SHOW REPLY FORM] */
	case "reply": ?>
	<div class="comment-form-wrap pt-5">
		<form onsubmit="return comments.add(this)" >
			<h3 class="mb-5">Laisser un message</h3>
      <input type="hidden" name="id_theme" value="<?=$_POST['id_theme']?>"/>
      <input type="text" class="ccomment" name="name" placeholder="Nom" required/>
      <textarea name="message" class="ccomment" placeholder="Message" cols="30" rows="4" required></textarea>
      <input type="submit" class="btn btn-primary py-2 px-3" value="Commenter"/>
		</form>
	</div>

		<?php break;

	/* [ADD COMMENT] */
	case "add":
		echo $pdo->add($_POST['post_id'], $_POST['name'], $_POST['message'], $_POST['id_theme']) ? "OK" : "ERR";
		break;
}
?>