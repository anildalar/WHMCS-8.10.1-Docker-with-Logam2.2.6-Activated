mgCRMapp.factory(
    "ResourcefollowupStatuses",
    ['$resource', '$rootScope', '$http',
        function( $resource,   $rootScope,   $http)
        {
            var container = $resource($rootScope.settings.config.apiURL + '/settings/general/followupStatus/json', {},
                {
                    getList: {
                        method: 'GET',
                        cache: false,
                        isArray: true,
                        responseType: 'json'
                    },
                    save: {
                        url: $rootScope.settings.config.apiURL + '/settings/general/followupStatus/add/json',
                        method: 'POST',
                        isArray: false,
                        cache: false,
                        responseType: 'json'
                    },
                    update: {
                        method: 'POST',
                        isArray: false,
                        cache: false,
                        responseType: 'json'
                    }
                });

            container.delete = function(id)
            {
                var params = {};

                return $http.post($rootScope.settings.config.apiURL + '/settings/general/followupStatus/' + id + '/delete/json', params, {isArray: false, cache: false, responseType: 'json'});
            };

            container.query = function()
            {
                var params = {};
                return $http.get($rootScope.settings.config.apiURL + '/settings/general/followupStatus/json', params);
            };

            container.updateSingleParam = function(id, $param, value)
            {
                var params = {};
                params[$param] = value;

                return $http.post($rootScope.settings.config.apiURL + '/settings/general/followupStatus/' + id + '/json', params);
            };

            container.reorder = function(newOrder)
            {
                var params = {};
                params['order'] = newOrder;

                return $http.post($rootScope.settings.config.apiURL + '/settings/general/followupStatus/reorder/json', params);
            };

            return container;

        }
    ]
);