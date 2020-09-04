<?php
namespace App\Logic\APIClient;

class WhmcsClientRegisterProgress
{

    public const WhmcsClientRegisterProgressSorted = array(
        self::CompletePersonInfo=>1,
        self::CompleteProjectInfo=>2,
        self::CompleteProjectInfo=>3,
        self::CompleteChoiceDomain=>4,
        self::Completed=>5
    );
    public const CompletePersonInfo="CompletePersonInfo";
    public const CompleteProjectInfo = "CompleteProjectInfo";
    public const CompleteChoiceTemplate="CompleteChoiceTemplate";
    public const CompleteChoiceDomain = "CompleteChoiceDomain";
    public const Completed = "Completed";
}


?>