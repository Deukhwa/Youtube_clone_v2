<?php

class VideoDetailsFormProvider {

  private $con;

  public function __construct($con) {
    $this->con = $con;
  }

  public function createUploadForm() {
    $fileInput = $this->craeteFileInput();
    $titleInput = $this->createTitleInput();
    $descriptionInput = $this->createDescriptionInput(); 
    $privacyInput = $this->createPrivacyInput();
    $categoriesInput = $this->createCategoriesInput();
    $uploadButton = $this->createUploadButton();

    return "
    <form action='processing.php' method='POST' enctype='multipart/form-data'>
           $fileInput
           $titleInput
           $descriptionInput
           $privacyInput
           $categoriesInput
           $uploadButton
    </form>
    ";
  }

  private function craeteFileInput() {
    return "<div class='mb-3'>
              <label for='formFile' class='form-label'>Your file</label>
              <input class='form-control' type='file' id='formFile' name='fileInput' required>
            </div>";
  }

  private function createTitleInput() {
    return "
    
    <div class='input-group mb-3'>
      <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' name='titleInput' placeholder='title'>
    </div>

    ";
  }

  private function createDescriptionInput() {
    return "
    <div class='mb-3'>
      <textarea class='form-control' rows='3' placeholder='Description' name='descriptionInput'></textarea>
    </div>
    
    ";
  }

  private function createPrivacyInput() {
    return "
    <div class='mb-3'>
      <select class='form-select' aria-label='Default select example' name='privateInput'>
        <option selected>Open this select menu</option>
        <option value='0'>Private</option>
        <option value='1'>Public</option>
      </select>
    </div>
    
    ";
  }

  private function createCategoriesInput() {
    
    $query = $this->con->prepare("SELECT * FROM categories");
    $query->execute();

    $html = "<div class='mb-3'>
              <select class='form-select' aria-label='Default select example' name='categoryInput'>
                <option selected>Open this select menu</option>";

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
    return "<button class='btn btn-primary' name='uploadButton' type='submit'>Upload</button>";
  }


}

?>