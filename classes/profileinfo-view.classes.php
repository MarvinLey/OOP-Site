<?php

class ProfileInfoView extends ProfileInfo{

    public function fetchAbout($userId){
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]["profile_about"];
    }
    public function fetchTitle($userId){
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]["profile_introtitle"];
    }
    public function fetchText($userId){
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]["profile_introtext"];
    }

}