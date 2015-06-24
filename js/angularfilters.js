angular.module('filters-module', [])
.filter('trustAsResourceUrl', ['$sce', function($sce) {
    return function(val) {
        return $sce.trustAsResourceUrl(val);
    };
}])
.filter('checkmark', function() {
  return function(input){
    return input ? '\u2713' : '\u2718';
  };
});
