#Software installation

1. Download
    *For beginning you need to go on this link : https://github.com/Norime/SlamQuiz*
    *Download the package*

2. Software need
    *You need php 7.0 and dont forget to download composer and symfony

3. Configuration
    *For take control of the Databse you need to go on .env and change the line 27*
    *DATABASE_URL=mysql://slamquiz:dbpassword@127.0.0.1:3306/slamquiz*
4. User manual

![Menu symfony](assets/screenshot_home_en.JPG)

*Dont forget the possible traduction {% trans %}*

`
{% block title %}{% trans %}Hello{% endtrans %} DefaultController!{% endblock %}
`

*Dont forget the command line on cmd for update disponible translation*
*php bin/console translation:update --force Language*