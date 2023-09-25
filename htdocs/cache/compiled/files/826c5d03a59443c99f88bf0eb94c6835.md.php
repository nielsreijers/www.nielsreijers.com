<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/pages/01.home/default.md',
    'modified' => 1682500492,
    'size' => 725,
    'data' => [
        'header' => [
            'title' => 'Home',
            'body_classes' => 'title-center title-h1h2',
            'media_order' => 'me1.jpg'
        ],
        'frontmatter' => 'title: Home
body_classes: \'title-center title-h1h2\'
media_order: me1.jpg',
        'markdown' => '# Hello!

<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
</style>

<br>
<div style="text-align: center">
    Welcome to my page. So far there\'s not much to see here, except my <a href="/cv">CV</a> and a photo of me.
</div>
<br>
<img src="https://www.nielsreijers.com/home/me3.jpg" class="center" id="my-photo">

<script>
var imgArr = ["me1.jpg", "me2.jpg", "me3.jpg", "me4.jpg", "me5.jpg"];
var randomPhoto = imgArr[Math.floor(Math.random() * imgArr.length)];
var img = document.getElementById(\'my-photo\');
img.setAttribute(\'src\', \'https://www.nielsreijers.com/home/\' + randomPhoto);
</script>

'
    ]
];
