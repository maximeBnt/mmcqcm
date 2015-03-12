/**
 * Created by maximeb on 12/03/15.
 */
module.exports=function() {
    var factory={utilisateurs:{},server:{}};
    factory.activeBrewery=undefined;
    factory.breweries.loaded=false;
    factory.breweries.refresh="all";//all|ask
    factory.breweries.update="immediate";//deffered|immediate
    factory.server.privateToken="";
    factory.server.restServerUrl="http://localhost/rest-QCM/";
    factory.server.force=false;
    return factory;
};