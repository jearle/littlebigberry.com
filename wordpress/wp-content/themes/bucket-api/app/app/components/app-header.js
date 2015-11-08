import Ember from 'ember';
import $ from 'jquery';

export default Ember.Component.extend({

	didInsertElement: function () {
		
		this.sizeVertically();

		$(window).resize(function () {
			var w = $(window).width();
			console.log(w);
		});

	},

	sizeVertically: function () {

		var element = this.$();
		var windowHeight = $(window).height();
		var top = element.position().top;

		element.height(windowHeight - top);

		// debugger;

	}

});
