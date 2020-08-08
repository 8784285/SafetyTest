<?php
if( isset( $_POST[ 'Upload' ] ) ) {
    $target_path  = "E:\\phpstudy_pro\\WWW\\test\\uploads\\";
    $target_path .= basename( $_FILES[ 'myfile' ][ 'name' ] );

    $uploaded_name = $_FILES[ 'myfile' ][ 'name' ];
    $uploaded_type = $_FILES[ 'myfile' ][ 'type' ];
    $uploaded_size = $_FILES[ 'myfile' ][ 'size' ];

    if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
        ( $uploaded_size < 100000 ) ) {

        if( !move_uploaded_file( $_FILES[ 'myfile' ][ 'tmp_name' ], $target_path ) ) {
            echo '<pre>图片未上传成功</pre>';
        }
        else {
            echo "<pre>{$target_path} 上传成功!</pre>";
        }
    }
    else {
        echo '<pre>仅支持jpg、png格式图片</pre>';
    }
}
?>