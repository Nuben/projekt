<h1>Logga in</h1>
<p>Logga in genom att använda ditt användarnamn eller e-mail.
Klicka först <a href="http://www.student.bth.se/~miad13/phpmvc/kmom04/user/init">här</a> om du behöver skapa databasen.</p>
<?=$login_form->GetHTML('form')?>
  <fieldset>
    <?=$login_form['acronym']->GetHTML()?>
    <?=$login_form['password']->GetHTML()?>  
    <?=$login_form['login']->GetHTML()?>
    <?php if($allow_create_user) : ?>
      <p class='form-action-link'><a href='<?=$create_user_url?>' title='Create a new user account'>Skapa konto</a></p>
    <?php endif; ?>
  </fieldset>
</form>


