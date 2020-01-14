<!doctype html>
<html lang="{langcode}">
<head>
    {block name="head"}
        <meta charset="utf-8">
        <title>{if isset($meta.title)}{$meta.title}{/if}</title>
        <meta name="description"
              content="{if isset($meta.description)}{$meta.description}{else}{lang name="meta.descrtiption"}{/if}">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    {/block}
</head>

<body>
{block name="body"}

{/block}
</body>
</html>