<h1>Index Controller</h1>
<p>Welcome to Lydia index controller.</p>

<h2>Download</h2>
<p>You can download Lydia from github.</p>
<blockquote>
<code>git clone git://github.com/Nuben/projekt.git</code>
</blockquote>
<p>You can also download, clone, and review its source directly on github: <a href='https://github.com/Nuben/Projekt'>Here</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Lydia needs
to be able to write and create files.</p>
<blockquote>
<code>cd Lydia; chmod 777 site/data</code>
</blockquote>
<h2>.htaccess</h2>
<p>If Lydia is not installed in the root of your webserver you will have to edit your .htacess file. Make sure you point it to the appropriate folder. </p>


<p>Second, Lydia has some modules that need to be initialised. You can do this through a 
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>
