/* 
*  Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
*  SPDX-License-Identifier: Apache-2.0
*/

<?php

//{fact rule=improper-authentication@v1.0 defect=1}
//NonCompliant: NULL values passed as password
ldap_bind($ldapconn, NULL, NULL); //nonCompliant 
//{/fact}