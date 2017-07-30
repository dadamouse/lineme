<?php
    set_time_limit(0);
    error_reporting(E_ALL & ~E_NOTICE);

    require_once("classes/class.YWRelatedTag.php");
    //require_once(dirname(dirname(__FILE__)).'/lib/api.class.php');
    require_once("classes/class.YWPDO.php");

    $arg = isset($argv[1]) ? $argv[1] : null;

    $debug = false;
    foreach ($argv as $aargv)
    {
        if ($aargv == 'debug')
        {
            $debug = true;
        }
    }

    switch ($arg) {
        case 'insert':
                $relatedTag = new YWRelatedTag();
                
                //setting to th
                $relatedTag->redisSetting = array(
                                            'prefix'  => 'YWTAG_TH',
                                            'host'    => '192.168.3.94',
                                            'port'    => 6379,
                                            'dbno'    => 4,
                                            'timeout' => 3,
                                            'ttl'     => 43200,
                                            );
                $relatedTag->sqlConn = 'iguang_data_TH';
                $relatedTag->debug = $debug;

                $myPDO = new YWPDO('iguang_data_TH');
                $parms = array();
                $parms['last_aid'] = 0;
                $parms['cnt'] = 0;
                $parms['total_cnt'] = 0;
                $parms['sql'] = "SELECT `id`, `tag` FROM `product_data_tag` 
                                    WHERE `id` > :last_aid 
                                    AND (`tag` NOT LIKE \"%\!%\")  
                                    AND (`tag` NOT LIKE \"%\@%\")  
                                    AND (`tag` NOT LIKE \"%\#%\")  
                                    AND (`tag` NOT LIKE \"%\\\\$%\")  
                                    AND (`tag` NOT LIKE \"%\^%\")  
                                    AND (`tag` NOT LIKE \"%\*%\")  
                                    AND (`tag` NOT LIKE \"%\(%\")  
                                    AND (`tag` NOT LIKE \"%\(%\")  
                                    AND (`tag` NOT LIKE \"%\)%\")  
                                    AND (`tag` NOT LIKE \"%\+%\")  
                                    AND (`tag` NOT LIKE \"%\-%\")  
                                    AND (`tag` NOT LIKE \"%\=%\")  
                                    AND (`tag` NOT LIKE \"%\_%\")  
                                    AND (`tag` NOT LIKE \"%\[%\")  
                                    AND (`tag` NOT LIKE \"%\]%\")  
                                    AND (`tag` NOT LIKE \"%\{%\")  
                                    AND (`tag` NOT LIKE \"%\}%\")  
                                    AND (`tag` NOT LIKE \"%\|%\")  
                                    AND (`tag` NOT LIKE \"%\\\\%\")  
                                    AND (`tag` NOT LIKE \"%\\\"%\")  
                                    AND (`tag` NOT LIKE \"%\:%\")  
                                    AND (`tag` NOT LIKE \"%\;%\")  
                                    AND (`tag` NOT LIKE \"%\,%\")  
                                    AND (`tag` NOT LIKE \"%\.%\")  
                                    AND (`tag` NOT LIKE \"%\/%\")  
                                    AND (`tag` NOT LIKE \"%\?%\")  
                                    AND (`tag` NOT LIKE \"%\<%\")  
                                    AND (`tag` NOT LIKE \"%\~%\")  
                                    AND (`tag` NOT LIKE \"%\`%\") 
                               ORDER BY `id` LIMIT 1000";

                //
                // prepare statement
                //
                $sth = $myPDO->prepareStatement($parms['sql']);
                if ($sth !== false) {
                    //
                    // execute and enter cursor mode
                    //
                    $cnt = 0;
                    while (($res = $myPDO->executeStatementCursor($sth, 
                        array('last_aid' => $parms['last_aid']))) !== false)
                        {
                        if ($res == 0) {
                            printf("no result!\n");
                            break;
                        }  // end if()
                        //
                        // fetch result
                        //
                        while (($ret = $myPDO->fetchStatementCursor($sth)) !== false) {
                            //
                            // update last_aid
                            //
                            $parms['last_aid'] = $ret['id'];

                            $relatedTag->addTag(array($ret['tag']));

                        }  // end if()
                        //
                        // close cursor
                        //
                        $myPDO->closeStatementCursor($sth);
                        printf("%s process [%s][%s] -> [id:%s]\n", YWUtil::getBriefMicrotime(), $parms['total_cnt'], $parms['cnt'], $parms['last_aid']);

                    }  // end while()
                    //
                    // gc
                    // - close sth
                    //
                    $myPDO->closeStatement($sth);
                }  // end if()
            break;
        case 'insert_priceza':
                $relatedTag = new YWRelatedTag();
                
                //setting to th
                $relatedTag->redisSetting = array(
                                            'prefix'  => 'YWTAG_TH_PRICE',
                                            'host'    => '192.168.3.94',
                                            'port'    => 6379,
                                            'dbno'    => 4,
                                            'timeout' => 3,
                                            'ttl'     => 43200,
                                            );
                $relatedTag->sqlConn = 'iguang_data_TH';
                $relatedTag->debug = $debug;

                $myPDO = new YWPDO('iguang_data_TH');
                $parms = array();
                $parms['last_aid'] = 0;
                $parms['cnt'] = 0;
                $parms['total_cnt'] = 0;
                $parms['sql'] = "SELECT `id`, `tag` FROM `product_data_tag` 
                                    WHERE `id` > :last_aid 
                                    AND (`tag` NOT LIKE \"%\!%\")  
                                    AND (`tag` NOT LIKE \"%\@%\")  
                                    AND (`tag` NOT LIKE \"%\#%\")  
                                    AND (`tag` NOT LIKE \"%\\\\$%\")  
                                    AND (`tag` NOT LIKE \"%\^%\")  
                                    AND (`tag` NOT LIKE \"%\*%\")  
                                    AND (`tag` NOT LIKE \"%\(%\")  
                                    AND (`tag` NOT LIKE \"%\(%\")  
                                    AND (`tag` NOT LIKE \"%\)%\")  
                                    AND (`tag` NOT LIKE \"%\+%\")  
                                    AND (`tag` NOT LIKE \"%\-%\")  
                                    AND (`tag` NOT LIKE \"%\=%\")  
                                    AND (`tag` NOT LIKE \"%\_%\")  
                                    AND (`tag` NOT LIKE \"%\[%\")  
                                    AND (`tag` NOT LIKE \"%\]%\")  
                                    AND (`tag` NOT LIKE \"%\{%\")  
                                    AND (`tag` NOT LIKE \"%\}%\")  
                                    AND (`tag` NOT LIKE \"%\|%\")  
                                    AND (`tag` NOT LIKE \"%\\\\%\")  
                                    AND (`tag` NOT LIKE \"%\\\"%\")  
                                    AND (`tag` NOT LIKE \"%\:%\")  
                                    AND (`tag` NOT LIKE \"%\;%\")  
                                    AND (`tag` NOT LIKE \"%\,%\")  
                                    AND (`tag` NOT LIKE \"%\.%\")  
                                    AND (`tag` NOT LIKE \"%\/%\")  
                                    AND (`tag` NOT LIKE \"%\?%\")  
                                    AND (`tag` NOT LIKE \"%\<%\")  
                                    AND (`tag` NOT LIKE \"%\~%\")  
                                    AND (`tag` NOT LIKE \"%\`%\") 
                               ORDER BY `id` LIMIT 1000";

                //
                // prepare statement
                //
                $sth = $myPDO->prepareStatement($parms['sql']);
                if ($sth !== false) {
                    //
                    // execute and enter cursor mode
                    //
                    $cnt = 0;
                    while (($res = $myPDO->executeStatementCursor($sth, 
                        array('last_aid' => $parms['last_aid']))) !== false)
                        {
                        if ($res == 0) {
                            printf("no result!\n");
                            break;
                        }  // end if()
                        //
                        // fetch result
                        //
                        while (($ret = $myPDO->fetchStatementCursor($sth)) !== false) {
                            //
                            // update last_aid
                            //
                            $parms['last_aid'] = $ret['id'];

                            $relatedTag->addTag(array($ret['tag']));

                        }  // end if()
                        //
                        // close cursor
                        //
                        $myPDO->closeStatementCursor($sth);
                        printf("%s process [%s][%s] -> [id:%s]\n", YWUtil::getBriefMicrotime(), $parms['total_cnt'], $parms['cnt'], $parms['last_aid']);

                    }  // end while()
                    //
                    // gc
                    // - close sth
                    //
                    $myPDO->closeStatement($sth);
                }  // end if()
            break;
        case 'crawl':
            $relatedTag = new YWRelatedTag();
            
            //setting to th
            $relatedTag->redisSetting = array(
                                        'prefix'  => 'YWTAG_TH',
                                        'host'    => '192.168.3.94',
                                        'port'    => 6379,
                                        'dbno'    => 4,
                                        'timeout' => 3,
                                        'ttl'     => 43200,
                                        );

            $relatedTag->stdOpt = array(
                    CURLOPT_HEADER         => false,
                    CURLOPT_ENCODING       => "gzip",
                    CURLOPT_MAXREDIRS      => 7,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT        => 50,
                    CURLOPT_CONNECTTIMEOUT => 50);

            $relatedTag->sqlConn = 'iguang_data_TH';
            $relatedTag->site    = 'obuy_th';
            $relatedTag->recordsite = null;
            $relatedTag->referrer = 'http://www.priceza.com';
            $relatedTag->debug = $debug;
            $relatedTag->num = 30;


            $relatedTag->getRelatedTag();
            break;
        case 'crawl_priceza':
            $relatedTag = new YWRelatedTag();
            
            //setting to th
            $relatedTag->redisSetting = array(
                                        'prefix'  => 'YWTAG_TH_PRICE',
                                        'host'    => '192.168.3.94',
                                        'port'    => 6379,
                                        'dbno'    => 4,
                                        'timeout' => 3,
                                        'ttl'     => 43200,
                                        );

            $relatedTag->stdOpt = array(
                    CURLOPT_HEADER         => false,
                    CURLOPT_ENCODING       => "gzip",
                    CURLOPT_MAXREDIRS      => 7,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT        => 50,
                    CURLOPT_CONNECTTIMEOUT => 50);

            $relatedTag->sqlConn = 'iguang_data_TH';
            $relatedTag->site    = 'obuy_th';
            $relatedTag->post    = array('cmd' => 'Search', 'sbu' => 'Y');
            $relatedTag->recordsite = null;
            $relatedTag->referrer = 'http://www.priceza.com';
            $relatedTag->debug = $debug;
            $relatedTag->num = 10;

            $relatedTag->getRelatedTag();
            break;

        default:
            break;
    }
?>
