export function initialize(container, application) {
  application.inject('route', 'aboutService', 'service:about');
}

export default {
  name: 'about-service',
  initialize: initialize
};
