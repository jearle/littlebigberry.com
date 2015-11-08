export function initialize(container, application) {
  application.inject('route', 'navService', 'service:nav');
  application.inject('component', 'navService', 'service:nav');
}

export default {
  name: 'nav-service',
  initialize: initialize
};
