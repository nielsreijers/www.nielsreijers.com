<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/pages/03.contact/default.md',
    'modified' => 1682328688,
    'size' => 781,
    'data' => [
        'header' => [
            'title' => 'Contact',
            'body_classes' => 'title-center title-h1h2',
            'media_order' => 'me1.jpg'
        ],
        'frontmatter' => 'title: Contact
body_classes: \'title-center title-h1h2\'
media_order: me1.jpg',
        'markdown' => '<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}
</style>

<br>
<div style="text-align: center">
	<a href="#" target="_blank" data-gen-email>
		<img src="https://www.nielsreijers.com/contact/email.png" width="75">
	</a>
	<br>
	<img src="https://www.nielsreijers.com/contact/address.png" width="250">
</div>

<script>
	const emailAddress = atob("bWFpbHRvOm5pZWxzcmVpamVyc0BnbWFpbC5jb20");

	// Select all links with the attribute \'data-gen-email\'
	const emailLinks = document.querySelectorAll(\'[data-gen-email]\');

	emailLinks.forEach(link => {
	    link.onmouseover = link.ontouchstart = () => link.setAttribute(\'href\', emailAddress);
	});
</script>'
    ]
];
