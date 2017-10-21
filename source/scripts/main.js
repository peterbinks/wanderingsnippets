var userFeed = new Instafeed({
        get: 'user',
        userId: '351090214',
        limit: '12',
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        template: '<img src="{{image}}"/>',
        accessToken: '351090214.b2fb2fc.9c8428bc3dfd4acfbf9a725dfb416173'
    });
userFeed.run();
