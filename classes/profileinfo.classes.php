<?php

class ProfileInfo extends Dbh{

    protected function getProfileInfo($userId)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM profiles WHERE user_id = ?;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: ../parts/profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;

    }

    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId)
    {
        $stmt = $this->connect()->prepare('UPDATE profiles SET profile_about = ?, profile_introtitle = ?, profile_introtext = ? WHERE user_id = ?;');

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("location: ../parts/profile.php?error=stmtfailed");
            exit();
        }


        $stmt = null;

    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId)
    {
        $stmt = $this->connect()->prepare('INSERT INTO profiles (profile_about, profile_introtitle, profile_introtext, user_id) VALUES (?,?,?,?);');

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("location: ../parts/profile.php?error=stmtfailed");
            exit();
        }


        $stmt = null;

    }

}