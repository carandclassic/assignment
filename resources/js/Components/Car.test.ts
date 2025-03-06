import { mount } from "@vue/test-utils";

import Car from "./Car.vue";

it("mounts", () => {
    const wrapper = mount(Car, {
        props: {},
    });

    expect(wrapper.text()).toHaveLength(21);
});
