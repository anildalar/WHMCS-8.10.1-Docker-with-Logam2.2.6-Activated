/***************************************************************************************
 *
 * 
 *                  ██████╗██████╗ ███╗   ███╗         Customer
 *                 ██╔════╝██╔══██╗████╗ ████║         Relations
 *                 ██║     ██████╔╝██╔████╔██║         Manager
 *                 ██║     ██╔══██╗██║╚██╔╝██║
 *                 ╚██████╗██║  ██║██║ ╚═╝ ██║         For WHMCS
 *                  ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝
 * 
 *    
 * @author      Piotr Sarzyński <piotr.sa@modulesgarden.com> 
 *              
 *                           
 * @link        http://www.docs.modulesgarden.com/CRM_For_WHMCS for documenation
 * @link        http://modulesgarden.com ModulesGarden
 *              Top Quality Custom Software Development
 * @copyright   Copyright (c) ModulesGarden, INBS Group Brand, 
 *              All Rights Reserved (http://modulesgarden.com)
 * 
 * This software is furnished under a license and mxay be used and copied only  in  
 * accordance  with  the  terms  of such  license and with the inclusion of the above 
 * copyright notice.  This software  or any other copies thereof may not be provided 
 * or otherwise made available to any other person.  No title to and  ownership of 
 * the  software is hereby transferred.
 *
 **************************************************************************************/




angular.module("mgCRMapp").controller(
        'importmailController',
        ['$rootScope', '$scope', '$stateParams', 'importmailData', 'ngDialog', '$q', 'blockUI', '$state',  '$translate', '$http', 'AclService', '$state',
function( $rootScope,   $scope,   $stateParams,   importmailData,   ngDialog,   $q,   blockUI,   $state,    $translate,   $http,   AclService,   $state)
{
    $scope.scopeMessages    = [];
    // container for admins array
    $scope.mailboxes        = importmailData.data.mailbox;
    // for now dont change this
    $scope.requestForImportMail  = importmailData.data.mailbox.length ? importmailData.data.mailbox[0].id : null;

    /**
     * ACL - allow user to preview other admin's dashboard
     */
    if(AclService.can('other.preview_import_mail')) {
        $scope.allowChangeAdmin = true;
    } else {
        $scope.allowChangeAdmin = false;
    }
}]);