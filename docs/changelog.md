---
order: -2000
label: "CHANGELOG"
icon: git-branch
---

# CHANGELOG
2022-09-27 v.1.6.1
- fixed issue with color picker

2022-09-26 v.1.6.0
- image file upload bug fixes
- conditional visibility works with static fields (html, paragraph)
- added support for {image:size} in HTML field's content (for example: {={image:size}} MB)
- display calculated product price in the cart widget (cart popup)
- new parameter: product_is_on_sale to use in formula
- added parameters to js dynamic formula in HTML field
- added placeholder for select and dropdown fields
- bug fixed: incorrect value of the image swatch in the cart

v.1.5.5-1.5.7
- bug fixes

2022-08-21 v.1.5.4
- add option to show Price Block before or after "Add to cart" button
- bug fixes

2022-08-16 v.1.5.2, v.1.5.3
- image upload bug fix
- option to display text before or after field's title

2022-08-05
v.1.5.0
- fieldset's options (toggle default price blocks)
- new field: formula value
- bug fixes

2022-07-23
v.1.4.6
- added is_selected() function
- bug fixes in multi checkbox

2022-07-23
v.1.4.5
- conditional visibility support for multi checkbox

2022-07-23
v.1.4.4
- bug fixes

2022-07-22
v.1.4.3

- bug fixes

2022-07-22
v.1.4.1, 1.4.2

- bug fixes

2022-07-21
v.1.4.0

- new formula builder
- apply filters on td elements in field's templates
- new assignment type: product attribute
- more columns on fieldset table
- toggle button to publish/unpublish fieldsets quickly
- support for stock management and stock reduction multiplier
- layouts feature - you can choose one or two column layout
- conditional visibility (set rules to show/hide fields)
- bug fixes

2022-07-11
v 1.3.3

- Bug fixed: str_replace on array
- Bug fixed: missing numberposts argument on get_posts()

2022-07-07
v.1.3.2

- added support for array and json objects in global parameters

2022-07-06
v.1.3.1

- bug fixes
- new variables to get product's weight, width, height, length
- new variable to determine if current visitor is logged in
- upload path settings

2022-07-04
v.1.3.0

- new calculation mode - Price Add-ons
- you can use formulas in HTML/Paragraph field, for example: {={field_a}*{field_b}/100}
- Image upload field added – you can use file size parameter in expressions
- cron jobs to keep uploaded files clean
- strlen() function added to expressions – it returns text length
- Settings page added – you can define custom product form selector, you can toggle error messages for admin/manager

2022-06-15
v.1.2.3

- bug fixes

2022-06-14
v.1.2.2

- add notices

2022-06-13
v.1.2.1

- fixed issue with price calculation

2022-06-13
v.1.2.0

- New fields: image select, image swatches, color swatches, checkbox group (multicheckbox), HTML, Heading, Paragraph,
  Hidden, Link, Attachment
- Math functions to use in the expression
- Additional functions for radio group, checkbox group (sum, max, min), range date picker (days between dated)
- Global parameters can be defined and used in formula
- Assign fieldset to product's tags
- Customer can edit cart item
- text field has new option: pattern (regexp)
- bug fixes

2022-05-08
v.1.1.2

- Added new fields: email, radio
- fixed field builder (js script issue)
- fixed typo in HTML code for dropdown and select fields

2022-04-20
v.1.1.1

- Bug fix

2022-02-18
v.1.1.0

- fieldset post type
- assign the fieldset to products/categories on the fieldset's edit page
- added a price option to all fields
- new edit page
- added the priority option to fieldsets
- field's template can be overrided in your theme folder
- performance fixes
- bug fixes

2022-01-20  
v.1.0.0

- Initial release