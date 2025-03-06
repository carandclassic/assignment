import Car from './Car.vue';
import { mount } from '@vue/test-utils';

it('mounts', () => {
    const wrapper = mount(Car, {
        props: {},
    });

    expect(wrapper.text()).toHaveLength(21);
});
