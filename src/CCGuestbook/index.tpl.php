<h1>Gästbok</h1>
<p>En gästbok i ramverket Lydia. Allt sparas till databasen.</p>

<form action="<?=$form_action?>" method='post'>
  <p>
    <label>Ditt meddelande: <br/>
    <textarea name='newEntry'></textarea></label>
  </p>
  <p>
    <input type='submit' name='doAdd' value='Skicka meddelande' />
    <input type='submit' name='doClear' value='Rensa alla meddelanden' />
    <input type='submit' name='doCreate' value='Skapa en tabell i databasen' />
  </p>
</form>

<h2>Tidigare meddelanden</h2>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>At: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>
