<?php
header("Content-type:text/html;charset=utf-8");
if( isset( $_POST[ 'Upload' ] ) ) {
    $target_path  = "E:\\phpstudy_pro\\WWW\\test\\uploads\\";
    $target_path .= basename( $_FILES[ 'myfile' ][ 'name' ] );

    $uploaded_name = $_FILES[ 'myfile' ][ 'name' ];
    $uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
	echo $uploaded_ext;
    $uploaded_size = $_FILES[ 'myfile' ][ 'size' ];
    $uploaded_tmp  = $_FILES[ 'myfile' ][ 'tmp_name' ];

    // Is it an image?
    if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
        ( $uploaded_size < 1000000 ) &&
        getimagesize( $uploaded_tmp ) ) {

        // Can we move the file to the upload folder?
        if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {
            // No
            echo '<pre>图片未上传成功</pre>';
        }
        else {
            // Yes!
            echo "<pre>{$target_path} 上传成功!</pre>";
        }
    }
    else {
        // Invalid file
        echo '<pre>仅支持jpg、png格式图片</pre>';
    }
}
?>
