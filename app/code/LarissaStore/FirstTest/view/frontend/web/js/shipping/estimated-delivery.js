define([
    'jquery',
    'ko',
    'uiComponent',
    'domReady!' /* Component will be only executed after DOM Ready */
  ],
    function ($, ko, Component) {
      'use strict';
      
      return Component.extend({
          /* Zipcode Input */
        zipcode: ko.observable(''), 
        
        /* Server Response */
        shippingEstimate: ko.observable(null),

        /* Initialize method get called when we mount this component */
        initialize: function () {
          /* Compoennt is extended from Magento UiComponent, this._super() will call the parent component init */
          this._super();
          
        },

        /* Invoke the API and get the estimated shipping date */
        calculateEstimatedDelivery: function () {

          // Our custom code goes here.. 

        }

      });
  });
