/* 
*  Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
*  SPDX-License-Identifier: Apache-2.0
*/

<?php

//{fact rule=server-side-request-forgery@v1.0 defect=0}
function compliant(){
    //Compliant: Ensures the request is being sent to the expected destination
    $file = file_get_contents("index.php");

}
//{/fact}
