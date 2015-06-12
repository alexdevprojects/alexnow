app.controller('PortfolioController', ['$scope', 'portfolio', function($scope, portfolio) {

  $scope.title = "Portfolio";

  portfolio.success(function(data) {
    $scope.portfolio_data = data;
  });

}]);
