WEB_HOME=~/www

#git add $WEB_HOME/*.php
#git add $WEB_HOME/js
#git add $WEB_HOME/css
#git add $WEB_HOME/images

git add *.php
git add js/
git add css/
git add images/

git commit -m "`date`"

# git remote add origin https://github.com/StrawberrySystems/ss-web.git
git push -u origin master

