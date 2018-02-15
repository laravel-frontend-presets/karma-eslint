import Vue from 'vue';
import ExampleComponent from '../resources/assets/js/components/ExampleComponent';

// alternatively, you can instantiate Vue from the 'setup/index.js' file
Vue.config.productionTip = false;

describe('ExampleComponent.vue', () => {
  it('should render correct contents', () => {
    const Constructor = Vue.extend(ExampleComponent);
    const vm = new Constructor().$mount();
    expect(vm.$el.querySelector('.panel-heading').textContent)
      .to.equal('Example Component');
  });
});
