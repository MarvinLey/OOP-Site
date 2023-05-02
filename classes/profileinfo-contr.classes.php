<?php

class ProfileInfoContr extends ProfileInfo{

    private $userId;
    private $userUid;


    public function __construct($userId, $userUid)
    {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo()
    {
        $profileAbout = "Erzähl etwas über dich.";
        $profileTitle = "Hallo! Mein Name ist " . $this->userUid . ".";
        $profileText = "Willkommen auf meinem Profil. Bald gibt es hier mehr zu sehen.";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText)
    {
        //Irgendwelche Errors?
        if ($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            header("location: ../parts/profilsettings.php?error=emptyinput");
            exit();
        }
        //UpdateProfileInfo
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    private function emptyInputCheck($about, $introTitle, $introText)
    {
        $result = null;
        if (empty($about) || empty($introTitle) || empty($introText)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
}