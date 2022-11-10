![Lionel Messi holding up his shirt](https://78.media.tumblr.com/5694c615b0260823db0cc54fc77c1769/tumblr_oovr7wUpKy1uqdbpso1_1280.gif)

# Project Title

I've always loved football in general, and the shirts/jerseys in particular.
An amazing freekick or a spectacular pass is hard to achieve, but creating a memorable shirt is way harder. Here is a glimpse of the classics according to my own taste and opinion.

# Installation

Visit: https://www.filipjonasson.com/elephpant/index.php

# Code Review

Code review written by [Thomas Danielsson](https://github.com/DanielssonThomas).

1. `index.php:21-25` - You should use an arrow function ```const refreshPage = () => {}``` instead of ```function refreashPage(){}```. As it is a little more modern and simplified way of writing functions
2. `index.php:22-24` - There is no use for ```if(true){}``` in your function as it always will be true, so here you can write your refresh page code without the 'if'.
3. `shirtInfo.php:17, 25` - The ```$title``` and ```$source``` doesnt need quotation marks to function.
4. `arrays.php:23, 36-37, 47, 80, 126` - To break the lines in the text you use the HTML tag 'br', in the php arrays. HTML code should be avoided in php code
5. `shirtInfo.php:8` - There is no validation for the '```$_GET```' so the user can use it to send harmful code, such as crashing the page when putting anything above '9' after ```?shirtIndex=``` in the url. You could add a function that makes sure the ```$_GET["shirtIndex"]``` is a number and limit the integer it returns to the values 0-9

# Testers

Tested by the following people:

1. Vali Al Osachi
2. Emma Hedlund
