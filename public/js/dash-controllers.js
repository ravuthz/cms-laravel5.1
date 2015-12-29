(function() {
    app.controller('DashCtrl', function($scope, $location, $http) {
        console.log('Dash Ctroller: ', $location.path());
        $scope.title = 'DashBoard';
    });

    app.controller('PageCtrl', function($scope, $location, $http, $routeParams, $route, Page) {

        $scope.page = {};
        $scope.title = 'DashBoard Page/Index';
        $scope.pages = Page.getAll();

        if ($routeParams.id != 'undefined') {
            $scope.page = Page.getOne($routeParams.id);
        }

        $scope.save = function() {
            console.log($scope.page);
        };

        $scope.create = function() {
            Page.create($scope.page);
        };

        $scope.update = function() {
            Page.update($routeParams.id, $scope.page);
        };

        $scope.delete = function() {
            if(confirm('Do you really want to delete this page?')) {
                Page.delete(id);
            }
        };

    });




})();
