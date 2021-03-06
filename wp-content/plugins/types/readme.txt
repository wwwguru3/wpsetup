=== Types - Custom Fields and Custom Post Types Management ===
Contributors: brucepearson, AmirHelzer, jozik, mihaimihai
Donate link: http://wp-types.com
Tags: CMS, custom field, custom fields, custom post type, custom post types, post, post type, post types, cck, taxonomy, fields
License: GPLv2
Requires at least: 3.4
Tested up to: 3.8.1
Stable tag: 1.5.4

The complete and reliable plugin for managing custom post types, custom taxonomy and custom fields.

== Description ==

Types lets you customize the WordPress admin by adding content types, custom fields and taxonomy. You will be able to craft the WordPress admin and turn it into your very own content management system.

[vimeo http://vimeo.com/43104695]

= POWERFUL PHP API, SIMPLE GUI FOR NON-CODERS =
If you're an experienced PHP developer, you'll appreciate Types comprehensive [PHP API](http://wp-types.com/documentation/functions/) and [documentation](http://wp-types.com/documentation/user-guides/).

Types and the other [Toolset](http://wp-types.com) plugins let you build complete sites without coding.

* **[Views](http://wp-types.com/home/views-create-elegant-displays-for-your-content/)** - a powerful content display engine
* **[CRED](http://wp-types.com/home/cred/)** - front-end form builder for content creation and editing
* **[Access](http://wp-types.com/home/types-access/)** - roles and access control management

The full [Toolset](http://wp-types.com) package lets you build complete WordPress sites from within the admin dashboard.

= CUSTOM FIELDS FOR CONTENT AND USERS =
Types lets you add custom fields for both posts (meaning, WordPress posts, pages and custom content types), as well as users. You can add any field types to different user profiles.

= ACCESS CONTROL FOR FIELDS =
Using [Access](http://wp-types.com/home/types-access/), you will be able to control what fields different users can edit and view. This way, you can make some field groups read-only for certain users, and fully-editable for other users.

For example, when you build a membership site, the site admin will be able to change membership levels for everyone and users will see their membership fields as read-only.

= DESIGN CUSTOM FIELDS WITH EASE =
Types fields come with a built-in CSS editor, letting you design how fields appear in the WordPress admin. You can design both full-edit and read-only field display modes.

= RELIABLE SUPPORT =
To get support for Types, please join our [technical support forum](http://wp-types.com/forums/). You will receive support directly from our developers, helping you deliver great sites on time and correctly.

= CUSTOM FIELDS =

Types includes support for a wide list of custom fields.

* **Single-line text**
* **Multi-line text**
* **WYSIWYG** (WordPress Visual Editor)
* **Checkbox**
* **Multi-value Checkboxes**
* **Radio group**
* **Drop-down Select**
* **File upload**
* **Image** (Types includes a robust image-resize and caching engine)
* **Date** (includes a JS date-picker)
* **Email**
* **Numeric**
* **Phone**
* **Skype**
* **URL**
* **Audio**
* **Video**
* **Embedded media**
* **Colorpicker**
* **Post reference** (using Types Parent / Child relationships management)

Types custom fields use the standard WordPress post-meta table, making it cross-compatible with any theme or plugin. Additionally, all fields can be **repeating fields**.

= CUSTOM POST TYPES AND TAXONOMY =

Types lets you easily setup custom post types and taxonomy. You can create new post types in seconds and use the advanced settings to customize every aspect.

* Full control over every feature
* Associate taxonomy with custom post types
* Integrated control over custom fields display for different post types

= BUILD RELATIONAL SITES =

Types lets you define parent / child relationship between different post types. You'll easily setup one-to-many and many-to-many relationships and build powerful sites.

= MULTILINGUAL READY =

Types is the only custom fields and post types plugin that's built multilingual-ready. It plays perfectly with [WPML](http://wpml.org). You'll be able to translate everything, including texts and labels in the WordPress admin and user-content for front-page.

= BUILT FOR STABILITY =

Types is part of a family of plugins, including WPML and Toolset, developed and maintained by [OnTheGoSystems](http://www.onthegosystems.com). Our plugins power over 100,000 commercial sites, using WordPress as a complete CMS. While we love features, we know that stability, performance, usability and security are critical. All our plugins go through comprehensive testing, QA and security analysis before every release.

== Installation ==

1. Upload 'types' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==

= How can I display custom post types on the home-page? =

By default, WordPress will either display your blog posts or a specific page on the home-page.

To display custom post types on the home-page, you have two options:

1. If you're comfortable with PHP and WordPress API, edit the site's template files (probably index.php) and load the custom post types there. Different themes do this differently, so we can't really say what single approach works best. You should look at [get_posts](http://codex.wordpress.org/Template_Tags/get_posts), which is part of the WordPress Template Tags system.
2. If you want to build sites right away, without becoming an expert in WordPress API and try our [Views Toolset](http://wp-types.com/). You'll be able to load whatever content you need from the database and display it anywhere and in whatever way you choose.

We're sorry, but we don't know of any third option which is both free and requires no coding.

= Can I use Types without Views? =

Sure you can! Types, by itself, replaces several other plugins that define custom types and fields. We believe that it does it much better, but it's up to you to decide.

If you also buy Views, with Toolset, you'll have a complete solution for both **defining** and **displaying** custom data. You can achieve everything that Views does if you're fluent in PHP and know WordPress API. When you buy Views, you're also supporting Types development, but we're not looking for donations. You should consider Views for its value and nothing else.

= I am already a ninje developer, do I really need Views? =

We honestly think so. Even if you're an expert developer, do you really enjoy doing the same stuff over and over again? With Views, you can concentrate on the unique features of every new site that you build, without wasting time on routine stuff.

Views was originally inspired by the Drupal module with the same name. Around 90% of all Drupal sites use the Drupal Views module and many consider it as one of the most powerful features in Drupal. Now, you too can enjoy the same power (and even more), but without any of the complexity of Drupal.

= Can Types display custom fields that I defined somehow else? =

Yes! You can tell Types to manage any other custom fields. For example, if you're using an e-commerce plugin, you can tell Types to manage product pricing. This will greatly help you display these fields with Types API or with Views.

Go to Custom fields control, under the Types menu. There, you can tell Types to manage existing custom fields.

= How do I migrate an existing site to use Types? =

The most important thing is to remember not to define custom post types and taxonomy in more than one place. If you previously defined them in PHP, first, remove your PHP code with the manual definition. The content will appear to temporarily vanish. Don't panic. Now, redefine the same custom post types and taxonomy with Types. Everything will return :-)

Types also includes data import from other plugins such as Custom Post UI and Advanced Custom Fields.

= Can I import and export my Types settings? =

Yes! Types includes its own import and export features, using an XML settings file. If you create a development site, you can easily transfer settings to the production site.

= What is the advantage of using Types over separate plugins for custom post types, taxonomy and fields? =

Types offers a much richer integration, which is simply impossible with separate plugins. For example, you have fine-grained control of where to display custom meta-boxes. Because Types defines both the post types and fields, we have greater control of where things can go.

Additionally, Types is the only plugin that lets you define parent/child relationships between different post types AND use that information to edit child data when editing a parent.


== Screenshots ==

1. Defining custom post types and taxonomy
2. Defining custom fields (meta-groups)
3. Editing custom fields
4. Inserting custom fields to content
5. Bulk editing child content using Field Tables

== Changelog ==

= 1.5.4 =
* Caching improvements
* Image resizing adjustments

= 1.5.3 =
* Fixed caching field data before applying WPML filters
* Fixed forced saving Uncategorized category in child table taxonomy forms
* Fixed indexing bugs with repetitive fields
* Fixed changing numeric to single-line do not remove numeric validation
* Fixed deleted fields showing in conditional dropdown
* Fixed checkboxes special characters in modal screen
* Added preview warning about not updated meta fields
* Added better filtering malformed fields
* Added not allowed saving fields with numeric slugs
* Added 'suppress_filters' parameter for WYSIWYG field
* Added support for W3TC CDN hosted resized images
* Improved JS validation performance
* Removed image exif_imagetype check

= 1.5.2 =
* Fixed image resizing when only width or height is specified
* Fixed image saving for Win
* Fixed validation for radio field

= 1.5.1 =
* Fixed the URLs of image fields on several server configurations

= 1.5 =
* Added new field Colorpicker
* Added new field Video
* Added new field Audio
* Added new field Embedded Media
* Added Usermeta fields to 'Add New User' screen
* Added backward compatibility for 'output' parameter
* Added show_admin_column support for taxonomies
* Added option to have padded cropped image and real non-proportional resize
* Added taxonomy terms selection to child post tables
* Added datepicker support for year range
* Added handling post_id to API call types_child_posts() for custom queries
* Fixed WPML updating fields from original translation
* Fixed WPML edit post screen forms for copied fields
* Fixed WPML creating and updating child posts
* Fixed WPML copied fields appear locked if post do not have original post
* Fixed WPML deleting translated post fields marked as 'translatable' when original is updated
* Fixed WPML changed all fields to be disabled when copied
* Fixed WPML unlocked copied fields when Translation Management is not active
* Fixed WPML removed translation preferences form when Translation Management is not active
* Fixed changing child post status when updating from child table or updating parent
* Fixed setting post parent as 'Not selected' for child post
* Fixed processing shortcodes from field value
* Fixed bug with caching types_child_posts() API call
* Fixed 'maxlength' validation
* Fixed saving post as draft when required field is hidden by other conditional field
* Fixed conditionals triggered on profile page if postmeta and usermeta have same ID
* Fixed custom fields named with prefix 'wpcf-' put under Types control
* Fixed possible issues with relative paths for embedded mode
* Fixed bug with Group conditional and date field
* Fixed bug with fields group conditional and date field
* Fixed saving checkbox zero value for usermeta
* Fixed saving checkboxes for usermeta
* Fixed migrating checkbox for usermeta
* Fixed migrating checkboxes for usermeta
* Fixed child table may show inactive fields

= 1.4 =
* Views 1.3 compatibility
* New Editor ( new GUI, complete parameter list available, improved inserting shortcodes )
* Added 'url' parameter for Image field
* Added 'target' parameter for URL field
* Added Asterisk for required fields titles
* API functions updated
* Added support for custom image sizes ( registered using add_image_size() )
* Removed un-necessary controls from Media Upload for field
* Improved performance on AJAX conditional check
* Fixed inconsistencies when creating first child
* Fixed various issues with Usermeta fields
* Fixed and improved sorting child posts
* Fixed bugs with validation JS
* Date conditional form improved ( added Date select )
* Checkboxes removed from conditional selection
* WPML synchronization when custom post type or taxonomy is changed (translation preferences, translation connections, belonging terms connections)
* Fixed various issues with WPML-copied fields
* Added support for Tabify plugin

= 1.3 =
* Added support for User Meta fields
* Added customization for styling of fields
* Added Access control for fields
* Added Read-only mode for fields
* Added no_protocol attribute for url field
* Fixed Date issues when Date is empty
* Better checks for Date values added
* Fixed Date formats issues
* Added Datepicker localization
* WPML and Group terms filter compatibility added
* Fixed Checkboxes 'save zero' setting and display issues
* Fixed Checkbox 'save zero' inserting value on new post
* Added missing Filters association Group setting in Export
* Fixed JS issues when adding first child post
* Fixed WYSIWYG editor not showing in child form
* Reviewed filters for Images for Windows server
* Fixed adding inactive images to editor dropdown
* Performance improvements ( caching results, JS reviews )

= 1.2.1.1 =
* Fixed problem with some dates showing as a time stamp
* Fixed number field so it excepts 0 (zero)
* Fixed raw="true" mode so it doesn't process shortcodes
* Fixed translations missing in some languages
* Fixed wrong language being displayed for missing translations
* Fixed repeater fields and conditional display issues

= 1.2.1 =
* Fixed compatibility with ACF, Events Calendar and a number of other plugins due to removed actions
* Fixed a problem with WooCommerce Extensions, due to too late initialization
* Fixed translations
* Fixed a problem with stypes_child_posts function on updates
* Fixed a problem with Types API for field render
* Fixed a problem with conditional fields and wpv_condition
* Fixed a bug with repeating fields in translated content
* Fixed a problem with many-to-many relationship
* Fixed a bug with fields inserted into the wrond WYSIWYG field

= 1.2 =
* Added allowing ordering of repeater fields
* Added allow duplicate repeater fields
* Added support for translating Custom Post Type slugs
* Added control of the number of children displayed in the Fields table
* Added optional hour and minutes to the Date field
* Added check to make sure the single and plural names of a Custom Post Type are different
* Fix handling of required conditional fields
* Remove use of mb_ereg and mb_string functions
* Fix JavaScript escaping
* Fix rendering of shortcodes inside types shortcode
* Fix Open_basedir restriction
* Fix AJAX popup CSS and JS
* Fix translation of "Add another field" and "Delete field" buttons
* Fix exporting and importing of Types Taxonomy
* Fix exporting and importing of conditional settings for groups

= 1.1.3.4 =
* Fix adding child posts for WordPress 3.5

= 1.1.3.2 =
* Fix 'em' tags in radio.php and select.php
* Added support for localized custom post slugs via WPML

= 1.1.3.1 =
* Fix saving fields in WP 3.5
* Fixed a bug displaying Types credit footer when not asked to do so

= 1.1.3 =
* Add support for resizing remote images
* Fix long and short date formats
* Fixed many small bugs and glitches
* Sync with Views 1.1.3

= 1.0.4 =
* Some fixes for textarea rendering without automatic paragraph insertion
* Some fixes for WPML compatibility
* Support for Views 1.1.1

= 1.0.3 =
* Fixes for repeating fields

= 1.0.2 =
* Improved WPML support with repeating fields
* Fixed problems with decimal repeating fields
* Post relationship meta box goes through standard WordPress filters
* Fixed field display conditions for date fields
* Fixed field count when adding or deleting fields
* Stopped saving child posts when saving the parent, to avoid conflicts with other plugins
* Checkboxes can save '0' for empty fields

= 1.0.1 =
* Fixes a number of small bugs, related with JS interaction with other plugins

= 1.0 =
* Added an option to make fields repeatable
* Added multiple-option checkboxes
* Added an option to output just URLs for resized images
* Added support for global class and style for all fields
* Added AJAX support for conditional fields
* Added support for non-ASCII characters in CPT URLs
* Added translations for Spanish, French, German, Portuguese, Italian and Dutch
* Fixed many small bugs and glitches

= 0.9.5.4 =
* Fixed a javascript bug on group edit pages

= 0.9.5.1 =
* Fixed a last-minute bug with post relationship

= 0.9.5 =
* Added support for parent/child post relationship between different types
* Added Field Tables, for bulk editing child fields from the parent editor
* Streamlined the field insert GUI

= 0.9.4.2 =
* Fixes a few bugs.

= 0.9.4.1 =
* Fixed a problem adding custom fields to a group on some servers
* Fixed so that standard tags and categories work again with custom post types
* Fixed custom field groups not being shown for some content templates

= 0.9.4 =
* Added an option to display custom field groups on specific templates only
* Fixed a number of bugs with Javascript and with Windows servers

= 0.9.3 =
* Added an import screen from Advanced Custom Fields
* Added an import screen from Custom Posts UI
* Added support for non-English character in custom field names
* Eliminated messages about how to insert custom fields in PHP
* Check if fields already exist with the same name before creating them
* Improved compatibility with WPML

= 0.9.2 =
* Added WYSIWYG custom fields
* Improved the usability for setting up custom taxonomies
* Date fields use the date format specified by WordPress
* Fixed a few bugs for WordPress 3.3
* Checks that fields cannot be created twice
* Checks that only local images are resized
* Added bulk-delete for custom fields
* Fixed a few issues with WPML support

= 0.9.1 =
* Added Embedded mode
* Allows to manage existing custom fields with Types
* Added a .po file for translating Types interface

= 0.9 =
* First release

== Upgrade Notice ==

= 0.9.1 =
* The new Embedded mode allows integrating Types functionality in WordPress plugins and themes.

= 0.9.2 =
* Check out the new WYSIWYG custom fields.

= 0.9.3 =
* This version streamlines the admin screens and includes a importers from other plugins

= 0.9.4 =
* You can now enable custom field groups for content with specific templates

= 0.9.4.1 =
* Fix a few problems found in the 0.9.4 release

= 0.9.5 =
Try the new parent/child relationship between different post types!

= 0.9.5.1 =
Fixed a last-minute bug with post relationship

= 0.9.5.4 =
Fixed a javascript bug on group edit pages

= 1.0 =
You can make any field repeating now

= 1.0.1 =
Small bugfix release

= 1.0.2 =
Better support for multilingual sites with repeating fields

= 1.1.3 =
Includes support for resizing remote images

= 1.1.3.1 =
Fix for WP 3.5

= 1.1.3.2 =
You can have localized slugs for custom post types

= 1.1.3.4 =
Fix adding child posts for WordPress 3.5

= 1.2 =
Drag and Drop ordering of repeating fields

= 1.2.1 =
Just bug fixes. Usermeta fields are coming in Types 1.3!

= 1.3 =
Add Usermeta fields and Access control of fields.
