From root:

styles:
stylus -u nib -w stylus/style.styl -o css/style.css

layout:
pug pug/pages/ --out ./ --pretty --watch