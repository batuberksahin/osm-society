<?php

class JSONdb
{
  protected $file;

  public function setFile($extension)
  {
    $this->file = $extension;
  }

  public function getData()
  {
    if(empty($this->file)) throw new Exception("Couldn't find data file!");

    $data = file_get_contents($this->file);
    return json_decode($data, true);
  }

  public function saveData($newData)
  {
    if(empty($this->file)) throw new Exception("Couldn't find data file!");

    $data = $this->getData();
    $insert = $newData;
    array_push($data, $insert);

    file_put_contents($this->file, json_encode($data));
  }
}

?>
