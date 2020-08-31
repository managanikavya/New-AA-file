<?php
    $data = array();
    date_default_timezone_set("Asia/Calcutta");
    function clean_scandir($dir)
    {
        return array_values(array_diff(scandir($dir),array("..",".")));
    }
    $file_path = $_REQUEST['file_path'];
    $ProjectCode = $_REQUEST['ProjectCode'];
    $files = clean_scandir($file_path);
    $dateTime = date("YmdHis");
    $zip_File_Name = $ProjectCode."_".$dateTime.".zip";
    $zip = new ZipArchive();
    $zip->open("temp/".$zip_File_Name, ZipArchive::CREATE | ZipArchive::OVERWRITE);
    for($i=0;$i<count($files);$i++)
    {
        $zip->addFile($file_path."".$files[$i],$ProjectCode."/".$files[$i]);
    }
    if($zip->close())
    {
        $data["IsOk"] = true;
        $data["FilePath"] = "temp/".$zip_File_Name;
    }
    else
    {
        $data["IsOk"] = false;
        $data["FilePath"] = "";
        $data["ErrorMsg"] = "Error While creating ZIP";
    }
    echo json_encode($data,true);
?>