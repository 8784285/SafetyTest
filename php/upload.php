<?php
if( isset( $_POST[ 'Upload' ] ) ) {
    $target_path  = "E:\\phpstudy_pro\\WWW\\test\\uploads\\";
    $target_path .= basename( $_FILES[ 'myfile' ][ 'name' ] );
    if( !move_uploaded_file( $_FILES[ 'myfile' ][ 'tmp_name' ], $target_path ) ) {
        echo '<pre>图片未上传成功</pre>';
    }
    else {
        echo "<pre>{$target_path} 上传成功!</pre>";
    }
 }
?>