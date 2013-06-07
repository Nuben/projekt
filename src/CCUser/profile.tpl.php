<h1>Användarprofil</h1>
<p>Här kan se samt uppdatera din profil.</p>

<?php if($is_authenticated): ?>
  <?=$profile_form?>
  <p>You were created at <?=$user['created']?> and last updated at <?=$user['updated']?>.</p>
  <p>You are member of <?=count($user['groups'])?> group(s).</p>
  <ul>
  <?php foreach($user['groups'] as $group): ?>
    <li><?=$group['name']?>
  <?php endforeach; ?>
  </ul>
<?php else: ?>
  <p>Användaren är anonym och inte verifierad.</p>
<?php endif; ?>


