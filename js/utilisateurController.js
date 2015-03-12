/**
 * Created by maximeb on 12/03/15.
 */
module.exports=function($scope,rest,$timeout,$location,config,$route,save) {
    $scope.data={load:false};

    $scope.sortBy={field:"name",asc:false};

    $scope.messages=rest.messages;

        $scope.data.load=true;
        rest.getAll($scope.data,"utilisateurs");
    $scope.allSelected=false;

    $scope.selectAll=function(){
        angular.forEach($scope.data.utilisateur, function(value, key) {
            value.selected=$scope.allSelected;
        });
    };

};