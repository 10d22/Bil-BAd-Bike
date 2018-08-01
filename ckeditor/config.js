/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    config.skin = 'moono-dark';
    config.language = 'da';
    //  config.uiColor = '#313539';

    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        /*{ name: 'forms' },*/
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        {name: 'links'},
        {name: 'insert'},
        '/',
        {name: 'styles'},
        {name: 'colors'},
        {name: 'tools'},
        {name: 'others'},
        {name: 'about'}
    ];
    config .allowedContent = true ;
    config.bodyClass = 'content' ;
    //class that body needs to refer to
    config.contentsCss = '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' ;
};
