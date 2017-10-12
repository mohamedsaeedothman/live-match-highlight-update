<p><span style="color: #ff0000;"><strong>Requerments</strong></span></p>
<ul>
<li><strong>php&nbsp;</strong></li>
<li><strong>composer</strong></li>
<li><strong>node js</strong></li>
<li><strong>npm</strong></li>
<li><strong>redis server</strong></li>
</ul>
<p><span style="color: #ff0000;"><strong>Installation&nbsp; steps</strong></span></p>
<ul>
<li><strong>run [sudo composer install] to get php packages<br /></strong></li>
<li><strong>get database dump file from&nbsp; Database directory and create new database and&nbsp; import it&nbsp; or run migration but import is prefered to keep data</strong></li>
<li><strong>copy&nbsp; .env.example to .env&nbsp; and give it <span style="color: #800000;">write</span> permission&nbsp; and put you configration such as database&nbsp;</strong></li>
<li><strong>&nbsp;run [<span style="color: #800000;">php artisan key:generate</span>] to generate app key</strong></li>
<li><strong> run [<span style="color: #800000;">npm install --production</span>]&nbsp; &nbsp;to install dependencies&nbsp; js package&nbsp;</strong></li>
<li><strong>navigate to your app and run this command [<span style="color: #800000;">php artisan serve</span>] or configure your virtual host</strong></li>
<li><strong>navigate to you app and run this command [ <span style="color: #800000;">node socket.js</span>]&nbsp; you may be see error of using port you can kill process and retry again&nbsp;</strong></li>
</ul>
<p><strong><span style="color: #ff0000;">&nbsp;Admin area :</span></strong><strong><span style="color: #0000;">&nbsp;to go to admin area you should write in url&nbsp; /dashboard&nbsp; it navigate to login page you can access as admin by this credentials </span></strong></p>
<p><strong><span style="color: #0000;">email = <a href="mailto:mohamedsaeedothman@gmail.com">mohamedsaeedothman@gmail.com</a></span></strong></p>
<p><strong><span style="color: #0000;"> password=123456</span></strong></p>
<p><strong><span style="color: #0000;">if you want to login as moderator you can choose any one and edit his password and logout and log in with his credentials</span></strong></p>
<p><span style="color: #ff0000;"><strong><span style="color: #0000;">App Docs</span></strong></span></p>
<p><strong><span style="color: #0000;">you can create crud moderator , teams and create new match once you create match his status is not started and button start session appeared if you press on it comment opened from another button and if you add comment the user in client side see it real time if he go to match details&nbsp;</span></strong></p>
<p>&nbsp;</p>