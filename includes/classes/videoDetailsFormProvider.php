<?php
class videoDetailsFormProvider {
    private $con;
    public function __construct($con) {
         $this->con = $con;
    }
    public function createUploadForm() {

        $fileInput = $this->createFileInput();
        $titleInput =$this->createTitleInput();
        $privacyInput =$this->createPrivacyInput();
        $descriptionInput =$this->createDescriptionInput();
        $categoryInput =$this->createCategoriesInput();
        $uploadButton = $this->createUploadButton();
        return "<form action='processing.php'  method='POST' enctype='multipart/form-data'>
                $fileInput
                $titleInput
                $descriptionInput
                $privacyInput
                $categoryInput
                $uploadButton
        </form>";
    }

    private function createFileInput() {

        return "<div class='form-group'>
                <input type='file' class='form-control-file' id='exampleFormControlFile1' name='fileInput' required>
            </div>";
    }

    private function createTitleInput() {
        return "<div class='form-group'>
            <br>
            <input class='form-control' type='text' placeholder='Title' name='titleInput'>
        </div>";
    }

    private function createDescriptionInput() {
        return "<div class='form-group'>
            <br>
            <textarea class='form-control'  placeholder='Description' name='descriptionInput' row='3'></textarea>
        </div>";
    }

    private function createPrivacyInput() {
        return "<div class='form-group'>
                    <br>    
                <select class='form-control' name='privacyInput' >
                    <option value='0'>Private</option>
                    <option value='1'>Public</option>   
                </select>
        </div>";
    }

    private function createCategoriesInput() {
        $query = $this->con->prepare("SELECT * FROM categories");
        $query->execute(); 

        $html = "<div class='form-group'>
            <br>    
            <select class='form-control' name='categoryInput'";

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $name = $row["name"];
            $id = $row["id"];
            $html .= "<option value=$id>$name</option>";
        }

        $html .= "</select>
                </div>";

            return $html;

    }

    private function createUploadButton() {
        return "<br><button type='submit' class='btn btn-primary' name='uploadButton'>Upload</button>";
    }
}

?>