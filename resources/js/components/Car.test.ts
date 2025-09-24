import { mount } from '@vue/test-utils';
import { expect, test } from 'vitest';

import Car from './Car.vue';

test('it mounts', () => {
    const wrapper = mount(Car, {
        props: {},
    });

    expect(wrapper.text()).toHaveLength(21);
});
