<?php 

    class videoUploadData {

        public $videoDataArray, $title, $description, $privacy, $category, $uploadedBy ;
        
            public function _construct($videoDataArray, $title, $description, $privacy, $category, $uploadedBy) {
                $this->videoDataArray = $videoDataArray;
                $this->title = $title;
                $this->description = $description;
                $this->privacy = $privacy;
                $this->category = $category;
                $this->uploadedBy = $uploadedBy;
            }

            

    }

?>