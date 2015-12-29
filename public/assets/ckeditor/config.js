/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    //
    config.uiColor = '#FFFFFF';

    config.toolbar = [
        [ "Source", "Save", "NewPage", "DocProps", "Preview", "Print", "Templates", "document" ],
        [ /* "Cut", "Copy", "Paste", */ "PasteText", "PasteFromWord", /* "Undo", "Redo" */ ],
        [ /* "Find", "Replace", "SelectAll", */ "Scayt" ],
        //[ "Form", "Checkbox", "Radio", "TextField", "Textarea", "Select", "Button", "ImageButton", "HiddenField" ],
        [ "Bold", "Italic", "Underline", "Strike", "Subscript", "Superscript", "RemoveFormat" ],
        [ "NumberedList", "BulletedList", "Outdent", "Indent", "Blockquote", "CreateDiv", "JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock", "BidiLtr", "BidiRtl", "Link", "Unlink", "Anchor" ],
        [ "CreatePlaceholder", "Image", "Flash", "Table", "HorizontalRule", "Smiley", "SpecialChar", "PageBreak", "Iframe", "InsertPre" ],
        [ "Styles", "Format", "Font", "FontSize" ],
        [ "TextColor", "BGColor" ],
        [ "UIColor", "Maximize", "ShowBlocks" ],
        ["button1", "button2", "button3", "oembed", "MediaEmbed" ],
        // "About"
    ];

    // config.filebrowserImageUploadUrl = '/upload/photo';
    config.filebrowserWindowWidth = 800;
    config.filebrowserWindowHeight = 500;

    // config.toolbarGroups = [
    //     { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
    //     { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
    //     { name: 'links', groups: [ 'links' ] },
    //     { name: 'insert', groups: [ 'insert' ] },
    //     { name: 'forms', groups: [ 'forms' ] },
    //     { name: 'tools', groups: [ 'tools' ] },
    //     { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
    //     { name: 'others', groups: [ 'others' ] },
    //     { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    //     { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
    //     { name: 'styles', groups: [ 'styles' ] },
    //     { name: 'colors', groups: [ 'colors' ] },
    //     '/',
    //     '/',
    //     { name: 'about', groups: [ 'about' ] }
    // ];
    // config.removeButtons = 'Cut,Redo,Undo,RemoveFormat,About';
};
