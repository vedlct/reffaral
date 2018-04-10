/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */


CKEDITOR.editorConfig = function( config ) {


     // var base_url ="http://localhost/ictm-web/dev/AdminPanel/public/";
      var base_url =ckBaseUrl+"public/";

    //   config.enterMode = 2; //disabled <p> completely
    config.enterMode = CKEDITOR.ENTER_BR // pressing the ENTER KEY input <br/>
    config.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
    config.autoParagraph = false; // stops automatic insertion of <p> on focus


    config.filebrowserBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
};
