define(
    [
        'ko',
        'uiComponent'
    ],
    function (ko, Component) {
        "use strict";

        return Component.extend({
            defaults: {
                template: 'LarissaStore_FirstTest/newsletter'
            },
            isRegisterNewsletter: true
        });
    }
);
