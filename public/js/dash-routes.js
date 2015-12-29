(function(){

    console.log(root + 'dash/create');

    app = angular.module('app-cms',  [
            'ngRoute'
        ], function($interpolateProvider){
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    function page(view, p) {
        var data = {};
        if (p) {
            data.templateUrl = function(params){
                return root + 'dash/page/' + params[p] + '/' + view;
            };
        } else {
            data.templateUrl = root + 'dash/page/' + view;
        }

        data.controller = 'PageCtrl';
        data.action = view == 'edit' ? 'update': view;
        return data;
    }

    app.config(['$routeProvider', function($routeProvider, $routeParams) {
        $routeProvider
        .when('/', {
            templateUrl: root + 'partials/index.html',
            controller: 'DashCtrl'
        })

        .when('/page/:action?/:id?', {
            controller: 'PageCtrl',
            templateUrl: function(p) {
                var page = root + 'dash/page/';
                if (p.action != 'undefined') {
                    switch(p.action) {
                        case 'create': return page + 'create';
                        case 'update': return page + p.id + '/edit';
                        case 'delete': return page + p.id;
                        case 'search': return page + p.id;
                    }
                }
                return page;
            }
        })

        // Page View
        // .when('/page/', page(''))
        // .when('/page/create', page('create'))
        // .when('/page/update/:id', page('edit', 'id'))
        // .when('/page/delete/:id', page('delete', 'id'))
        // .when('/page/search/:key', page('search', 'key'))

        .otherwise({
            templateUrl: root + 'partials/error.html',
            controller: 'DashCtrl'
        });
    }]);

    // Services
    app.factory('Page', function($http){
        var root = 'http://localhost:8000/dash/';
        var items = [];

        return {
            create: function(item) {
                return $http.post(root + 'page/create', item).then(function(status){
                    return status;
                });
            },

            update: function(id, item) {
                return $http.post(root + 'page/' + {id: id, page: item}).then(function(status){
                    return status;
                });
            },

            delete: function(id) {
                return $http.delete(root + 'page/' + id).then(function(status){
                    return status.data;
                });
            },

            getAll: function() {
                return $http.get(root + 'page/json').then(function(status){
                    return status.data;
                });
            },

            getOne: function(id) {
                console.log('getOne(' + id + ')');
                return $http.get(root + 'page/' + id).then(function(status){
                    return status.data;
                });
            }

        };
    });

    // app.factory('PageService', function($resource){
    //     return $resource('http://localhost:8000/dash/page/', {}, {
    //         create: {method: 'POST'},
    //         update: {method: 'PUT'},
    //         delete: {method: 'DELETE'},
    //         getone: {method: 'GET'},
    //         getall: {method: 'GET', isArray: true}
    //     });
    // });

})();