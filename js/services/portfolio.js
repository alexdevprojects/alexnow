app.factory('portfolio', ['$http', function($http){
  return $http.get('/api/portfolio.json')
                  .success(function(data) {
                    return data;
                  })
                  .error(function(err) {
                    return err;
                  });
}]);
