import Vue from 'vue';
import ExampleComponent from '../resources/assets/js/components/ExampleComponent';

describe('ExampleComponent.vue', () => {
  it('should render correct contents', () => {
    const Constructor = Vue.extend(ExampleComponent);
    const vm = new Constructor().$mount();
    expect(vm.$el.querySelector('.panel-heading').textContent)
      .to.equal('Example Component');
  });
});
