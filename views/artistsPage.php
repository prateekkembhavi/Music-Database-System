<div ng-controller="artistsPageController">
    <div style=" height: 11vh"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                <div style="padding: 14px; font-size : 20px; border-bottom: 1px solid grey;background-color: #ddd; cursor: pointer" 
                     ng-repeat="artist in artistArray" ng-click="showSongs($index)">
                    {{artist.artistName}}
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>