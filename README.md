#Software installation

1. **Download**
    *For beginning you need to go on this link : https://github.com/Norime/SlamQuiz*
    *Download the package or clone this by the command line "git clone"*
	![Clone file](assets/GitClone.JPG)

2. **Software need**
    *You need php 7.0 and dont forget to download composer and symfony
	*Composer*

3. **Composer Install package**
	*for this take the command line composer install on ce cmd*
	![Composer Install](assets/ComposerInstall.JPG)

4. **Configuration**
    *For take control of the Database you need to go on .env and change the line 27*
    *DATABASE_URL=mysql://slamquiz:dbpassword@127.0.0.1:3306/slamquiz*
	*It's use for give crypted password*

5. **User manual**
	*For acces on your page use the adress localhost:8000 on your browser

![Menu symfony](assets/screenshot_home_en.JPG)

**Translation**
	*Dont forget the possible traduction {% trans %} if nous need another language*

	`
	{% block title %}{% trans %}Hello{% endtrans %} DefaultController!{% endblock %}
	`

*Dont forget the command line on cmd for update disponible translation*
*php bin/console translation:update --force Language*

**Starting server**
	*And now for start the server go to the file position with your Terminal and use the command line php bin/console server:run*
	![Start Server](assets/ServerRun.JPG)

**now we can enjoy your best website !**