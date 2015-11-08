import Ember from 'ember';

export default Ember.Component.extend({

	about: Ember.inject.service(),

	didInsertElement: function () {

		var about = this.get('about');

		console.log(about.test());

	}

});
