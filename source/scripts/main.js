var userFeed = new Instafeed({
        get: 'user',
        userId: '6254553682',
        clientId: 'a2615bd12b3b40898cf0d54e7417fb54',
        limit: '4',
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        template: '<li class="insta-img"><a href="{{link}}" style="background-image: url({{image}}); background-size: cover; background-position: center center;"></a></li>',
        accessToken: '6254553682.a2615bd.80e31356e67640a6bff08af2b83781ec'
    });
userFeed.run();
