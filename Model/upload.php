<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!class_exists("upload")) {
    class upload{
        private array $fileInformationArray;
        public function __construct( $fileInformationArray ){
            $this -> fileInformationArray = $fileInformationArray;
        }
        public function validate( $maxsize = 2097152 /*2Mb*/ ): bool{
            if( $this -> fileInformationArray['error'] === 0 ) {
                if ( !Validation::image($this->fileInformationArray['tmp_name']) ) {
                    Alert::alerts("خطا - فایل حتما باید از نوع تصویر باشد!");
                    return false;
                } elseif ( !Validation::Size($this->fileInformationArray['size'], $maxsize) ) {
                    Alert::alerts("حجم تصویر باید کوچک تر از " . ($maxsize / 1024 / 1024) . " مگابایت باشد!");
                    return false;
                } else
                    return true;
            }
            else
                return false;
        }
        public function permanent(): string{
            $extension = pathinfo( $this -> fileInformationArray['name'] , PATHINFO_EXTENSION );
            $fileName = time() . '.' . $extension;

            $uid = Authentication::uid();
            $destinationPath = assets("uploads/") . $uid . '/';

            if( !is_dir( $destinationPath ) ){
                mkdir( $destinationPath );
            }

            $destinationAddress = $destinationPath . $fileName;

            move_uploaded_file( $this -> fileInformationArray['tmp_name'] , $destinationAddress);

            return $destinationAddress;
        }
    }
}