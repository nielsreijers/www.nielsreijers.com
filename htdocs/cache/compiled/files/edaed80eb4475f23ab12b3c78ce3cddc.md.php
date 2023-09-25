<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/srv/data/web/vhosts/www.nielsreijers.com/htdocs/user/pages/02.cv/default.md',
    'modified' => 1682397778,
    'size' => 450,
    'data' => [
        'header' => [
            'title' => 'CV',
            'media_order' => 'cv.jpg,NielsReijers-longer-version.pdf,NielsReijers-single-page.pdf'
        ],
        'frontmatter' => 'title: CV
media_order: \'cv.jpg,NielsReijers-longer-version.pdf,NielsReijers-single-page.pdf\'',
        'markdown' => '<table style="margin: 0 auto;">
    <tr>
        <td>
            <img src="cv/cv.png" width="200">
        </td>
        <td>
            <a href="cv/NielsReijers-single-page.pdf">Single page version</a>
            <br>
            <br>
            <a href="cv/NielsReijers-longer-version.pdf">Longer version</a>
        </td>
    </tr>
</table>
'
    ]
];
