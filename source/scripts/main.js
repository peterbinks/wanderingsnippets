var userFeed = new Instafeed({
        get: 'user',
        userId: '351090214',
        limit: '4',
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        template: '<li class="insta-img"><a href="{{link}}" style="background-image: url({{image}}); background-size: cover; background-position: center center;"></a></li>',
        accessToken: '351090214.b2fb2fc.9c8428bc3dfd4acfbf9a725dfb416173'
    });
userFeed.run();
