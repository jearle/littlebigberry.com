import Ember from 'ember';

export default Ember.Component.extend({

	nav: Ember.inject.service(),

	links: function () {

		return this.get('nav.links');

	}.property()

});
