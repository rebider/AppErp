<?php
namespace Common\Common\Api\flow;
//基本信息
require_once 'Jpdiam/FLOW.JPDIAM.INC.php';
class JpdiamCls
{
    use JpdiamFunction,JpdiamData;
    public static $VIPID = "your12";
    public static $VIPPSD = "123456";
    public static $JPDIAMBASEURL = "https://www.jpdiam.com/plugin/apitool";
}